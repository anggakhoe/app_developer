(function () {
  'use strict'
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    } else {
    }
    form.classList.add('was-validated');
  }, false)
})();
