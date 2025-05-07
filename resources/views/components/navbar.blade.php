<style>
header {
    background-color: #037509;
    color: white;
    padding: 1rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header h1 {
    margin: 0;
    font-size: 1.5rem;
}

nav a {
    color: white;
    text-decoration: none;
    margin-left: 1.5rem;
    font-weight: 600;
    font-size: 1rem;
}

nav a:hover {
    text-decoration: underline;
}

nav a.active {
    text-decoration: underline;
    font-weight: 700;
}

#nav-menu {
    display: none;
}

#nav-menu.active {
    display: flex;
    flex-direction: column; 
    position: absolute;
    top: 60px;
    right: 0;
    width: 200px;
    background-color: #037509;
    padding: 1rem;
    text-align: left;
    border-left: 1px solid white;
    z-index: 999; 
}


#nav-menu.active a {
    margin: 0.5rem 0;
}

body.dark-mode {
    background-color: #121212;
    background-image: none;
    color: #0a0505;
}

.dark-mode nav {
    background-color: #1a3d1a;
}

.dark-mode nav a {
    color: #110808;
}

.dark-mode header,
.dark-mode footer {
    background-color: #004d00;
}

.dark-mode #nav-menu.active {
    background-color: #1a3d1a;
    border-left: 1px solid #444;
}
</style>
<body>
<header>
    <div style="display: flex; align-items: center; gap: 1rem;">
<img src="{{ asset('storage/images/pemkab.png') }}" alt="Logo Pemerintah" style="height: 40px;">
        <h1>Pemerintah Kabupaten Sidoarjo</h1>
    </div>
    <div style="display: flex; align-items: center; gap: 0.5rem;">
        <button id="mode-toggle" aria-label="Toggle light/dark mode" style="font-size:1.5rem; background:none; border:none; color:white; cursor:pointer; margin-left:1rem;">🌙</button>
        <button id="nav-toggle" aria-label="Toggle navigation menu" style="font-size:1.5rem; background:none; border:none; color:white; cursor:pointer;">☰</button>
    </div>
    <nav id="nav-menu" class="navbar">
        @if(session()->has('username'))
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('pengelolaan') }}">Pengelolaan</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endif
    </nav>
    
</header>
<script>
    
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

</script>

</body>