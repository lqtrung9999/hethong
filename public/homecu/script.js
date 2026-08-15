const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((element, index) => {
  element.style.transitionDelay = `${Math.min(index % 3, 2) * 90}ms`;
  observer.observe(element);
});

const form = document.querySelector('#quoteForm');
const toast = document.querySelector('.toast');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  toast.classList.add('show');
  form.reset();
  window.setTimeout(() => toast.classList.remove('show'), 3800);
});

const header = document.querySelector('.site-header');
window.addEventListener('scroll', () => {
  const scrolled = window.scrollY > 80;
  header.style.position = scrolled ? 'fixed' : 'absolute';
  header.style.background = scrolled ? 'rgba(6, 19, 28, .94)' : 'transparent';
  header.style.backdropFilter = scrolled ? 'blur(16px)' : 'none';
});
