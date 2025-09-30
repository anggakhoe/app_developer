document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.hero-slide');
  let current = 0;
  const total = slides.length;

  function showSlide(idx) {
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === idx);
    });
  }

  function nextSlide() {
    current = (current + 1) % total;
    showSlide(current);
  }

  showSlide(current);
  setInterval(nextSlide, 5000);
});
