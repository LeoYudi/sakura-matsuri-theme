document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.nav-toggle'),
    menu = document.querySelector('.nav-links');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      const isOpen = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
    });
  }
});
