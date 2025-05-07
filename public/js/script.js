
const navToggle = document.getElementById('nav-toggle');
const navMenu = document.getElementById('nav-menu');

if (navToggle && navMenu) {
  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
  });
}

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const targetId = this.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      e.preventDefault();
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// Light/Dark Mode Toggle
const modeToggle = document.getElementById('mode-toggle');
const body = document.body;

if (modeToggle) {
  // Load saved mode from localStorage
  const savedMode = localStorage.getItem('mode');
  if (savedMode === 'dark') {
    body.classList.add('dark-mode');
    modeToggle.textContent = '☀️'; // sun icon for light mode
  } else {
    modeToggle.textContent = '🌙'; // moon icon for dark mode
  }

  modeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    if (body.classList.contains('dark-mode')) {
      modeToggle.textContent = '☀️'; // sun icon
      localStorage.setItem('mode', 'dark');
    } else {
      modeToggle.textContent = '🌙'; // moon icon
      localStorage.setItem('mode', 'light');
    }
  });
}

// Pop-up Modal
const modalOpenBtn = document.getElementById('modal-open');
const modal = document.getElementById('modal');
const modalCloseBtn = document.getElementById('modal-close');

if (modalOpenBtn && modal && modalCloseBtn) {
  modalOpenBtn.addEventListener('click', () => {
    modal.style.display = 'block';
  });

  modalCloseBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Close modal when clicking outside modal content
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
}
