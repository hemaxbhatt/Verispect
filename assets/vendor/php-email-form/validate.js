(function () {
  "use strict";

  const forms = document.querySelectorAll(".php-email-form");

  forms.forEach(function (form) {
    /* ==========================
       HELPERS
    ========================== */

    function showLoading() {
      form.querySelector(".loading").classList.add("d-block");
      form.querySelector(".error-message").classList.remove("d-block");
      form.querySelector(".sent-message").classList.remove("d-block");
    }

    function hideLoading() {
      form.querySelector(".loading").classList.remove("d-block");
    }

    function fail(field, message) {
      hideLoading();

      if (field) {
        field.classList.add("is-invalid");
        field.classList.remove("is-valid");

        let feedback = field.parentElement.querySelector(".invalid-feedback");
        if (!feedback) {
          feedback = document.createElement("div");
          feedback.className = "invalid-feedback";
          field.parentElement.appendChild(feedback);
        }
        feedback.textContent = message;

        field.scrollIntoView({ behavior: "smooth", block: "center" });
        field.focus();
      }

      return false;
    }

    function markValid(field) {
      field.classList.remove("is-invalid");
      field.classList.add("is-valid");
      const feedback = field.parentElement.querySelector(".invalid-feedback");
      if (feedback) feedback.textContent = "";
    }

    function displayError(message) {
      hideLoading();
      const errorBox = form.querySelector(".error-message");
      errorBox.innerHTML = message;
      errorBox.classList.add("d-block");
    }

    /* ==========================
       RECAPTCHA v2 VALIDATION
    ========================== */

    function validateRecaptcha() {
      const wrapper = document.getElementById("recaptchaWrapper");
      const errorEl = document.getElementById("recaptchaError");
      const response =
        typeof grecaptcha !== "undefined" ? grecaptcha.getResponse() : "";

      if (!response || response.trim() === "") {
        if (wrapper) wrapper.classList.add("is-invalid");
        if (errorEl) errorEl.style.display = "block";
        hideLoading();

        const recaptchaBox = form.querySelector(".g-recaptcha");
        if (recaptchaBox) {
          recaptchaBox.scrollIntoView({ behavior: "smooth", block: "center" });
        }
        return false;
      }

      if (wrapper) wrapper.classList.remove("is-invalid");
      if (errorEl) errorEl.style.display = "none";
      return true;
    }

    /* ==========================
       NORMALISE AUSTRALIAN MOBILE
    ========================== */

    function normaliseAuMobile(raw) {
      let cleaned = raw.replace(/[^\d+]/g, "");

      if (cleaned.startsWith("+614")) {
        cleaned = "0" + cleaned.substring(3);
      } else if (cleaned.startsWith("614") && cleaned.length === 11) {
        cleaned = "0" + cleaned.substring(2);
      } else if (/^4\d{8}$/.test(cleaned)) {
        cleaned = "0" + cleaned;
      }

      return cleaned;
    }

    /* ==========================
       FIELD VALIDATORS
    ========================== */

    function validateName(field) {
      const val = field.value.trim();
      if (!val || val.length < 2) {
        return fail(field, "Please enter your full name.");
      }
      if (!/^[a-zA-Z\s'\-\.]+$/.test(val)) {
        return fail(
          field,
          "Name can only contain letters, spaces, hyphens or apostrophes.",
        );
      }
      if (val.length > 80) {
        return fail(field, "Name is too long.");
      }
      markValid(field);
      return true;
    }

    function validatePhone(field) {
      const normalised = normaliseAuMobile(field.value);
      if (!/^04\d{8}$/.test(normalised)) {
        return fail(
          field,
          "Enter a valid Australian mobile number (e.g. 0410 718 975).",
        );
      }
      field.value = normalised.replace(
        /^(04)(\d{2})(\d{3})(\d{3})$/,
        "$1$2 $3 $4",
      );
      markValid(field);
      return true;
    }

    function validateEmail(field) {
      const val = field.value.trim();
      if (!val || !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(val)) {
        return fail(field, "Please enter a valid email address.");
      }
      markValid(field);
      return true;
    }

    function validateSelect(field, message) {
      if (!field || field.value === "" || field.value === null) {
        return fail(field, message);
      }
      markValid(field);
      return true;
    }

    function validateAddress(field) {
      const val = field.value.trim();
      if (!val || val.length < 5) {
        return fail(field, "Please enter your suburb or address.");
      }
      if (val.length > 300) {
        return fail(field, "Address is too long.");
      }
      markValid(field);
      return true;
    }

    /* ==========================
       LIVE VALIDATION ON BLUR
    ========================== */

    const nameField = form.querySelector('input[name="name"]');
    const phoneField = form.querySelector('input[name="phone"]');
    const emailField = form.querySelector('input[name="email"]');
    const serviceField = form.querySelector('select[name="service"]');
    const propertyField = form.querySelector('select[name="property_type"]');
    const addressField = form.querySelector('[name="address"]');

    if (nameField)
      nameField.addEventListener("blur", () => validateName(nameField));
    if (phoneField)
      phoneField.addEventListener("blur", () => validatePhone(phoneField));
    if (emailField)
      emailField.addEventListener("blur", () => validateEmail(emailField));
    if (serviceField)
      serviceField.addEventListener("change", () =>
        validateSelect(serviceField, "Please select a service."),
      );
    if (propertyField)
      propertyField.addEventListener("change", () =>
        validateSelect(propertyField, "Please select a property type."),
      );
    if (addressField)
      addressField.addEventListener("blur", () =>
        validateAddress(addressField),
      );

    /* ==========================
       CLEAR ERROR ON INPUT / CHANGE
    ========================== */

    form.querySelectorAll("input, select, textarea").forEach((field) => {
      field.addEventListener("input", function () {
        this.classList.remove("is-invalid");
        const feedback = this.parentElement.querySelector(".invalid-feedback");
        if (feedback) feedback.textContent = "";
      });
      field.addEventListener("change", function () {
        this.classList.remove("is-invalid");
        const feedback = this.parentElement.querySelector(".invalid-feedback");
        if (feedback) feedback.textContent = "";
      });
    });

    /* ==========================
       FORM SUBMIT
    ========================== */

    form.addEventListener("submit", function (event) {
      event.preventDefault();

      const action = form.getAttribute("action");
      if (!action) {
        displayError(
          "Form action is not configured. Please contact us directly.",
        );
        return;
      }

      showLoading();

      // Honeypot
      const honeypot = form.querySelector('input[name="company"]');
      if (honeypot && honeypot.value.trim() !== "") {
        hideLoading();
        form.querySelector(".sent-message").classList.add("d-block");
        return;
      }

      // Field validation — stop at first failure
      if (!validateName(nameField)) return;
      if (!validatePhone(phoneField)) return;
      if (!validateEmail(emailField)) return;
      if (!validateSelect(serviceField, "Please select a service.")) return;
      if (!validateSelect(propertyField, "Please select a property type."))
        return;
      if (!validateAddress(addressField)) return;

      // reCAPTCHA v2 — validated last
      if (!validateRecaptcha()) return;

      const formData = new FormData(form);
      submitForm(form, action, formData, hideLoading, displayError);
    });
  });

  /* ==========================
     AJAX SUBMIT
  ========================== */

  function submitForm(form, action, formData, hideLoading, displayError) {
    fetch(action, {
      method: "POST",
      body: formData,
      headers: { "X-Requested-With": "XMLHttpRequest" },
    })
      .then((res) => {
        if (!res.ok)
          throw new Error(
            "Network error (HTTP " + res.status + "). Please try again.",
          );
        return res.json();
      })
      .then((data) => {
        hideLoading();

        if (data.status === "success") {
          form.querySelector(".sent-message").classList.add("d-block");
          form.reset();

          // Reset reCAPTCHA widget
          if (typeof grecaptcha !== "undefined") {
            grecaptcha.reset();
          }
          const wrapper = document.getElementById("recaptchaWrapper");
          const errorEl = document.getElementById("recaptchaError");
          if (wrapper) wrapper.classList.remove("is-invalid");
          if (errorEl) errorEl.style.display = "none";

          // Clear is-valid states
          form
            .querySelectorAll(".is-valid")
            .forEach((f) => f.classList.remove("is-valid"));
        } else {
          if (data.errors && data.errors.length > 0) {
            displayError(data.errors[0]);
          } else {
            displayError(
              data.message || "Submission failed. Please try again.",
            );
          }
        }
      })
      .catch((err) => {
        hideLoading();
        displayError(
          err.message ||
            "Something went wrong. Please try again or call us directly.",
        );
      });
  }
})();
