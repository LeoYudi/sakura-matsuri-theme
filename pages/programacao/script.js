document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.prog-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.prog-tab').forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false')
      });
      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');
      document.getElementById('day-name').textContent = tab.dataset.day;
    });
  });
});
