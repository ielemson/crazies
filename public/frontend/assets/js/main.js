const openBtn = document.getElementById('openMenu');
    const closeBtn = document.getElementById('closeMenu');
    const overlay = document.getElementById('sidebarOverlay');
    const sidebar = document.getElementById('sidebar');

    openBtn.addEventListener('click', () => {
      overlay.classList.add('active');
      setTimeout(() => sidebar.classList.add('show'), 10);
    });

    closeBtn.addEventListener('click', () => {
      sidebar.classList.remove('show');
      setTimeout(() => overlay.classList.remove('active'), 300);
    });

    overlay.addEventListener('click', (e) => {
      if (!e.target.closest('.sidebar')) {
        sidebar.classList.remove('show');
        setTimeout(() => overlay.classList.remove('active'), 300);
      }
    });

     document.addEventListener("DOMContentLoaded", function () {
      const hero = document.getElementById('hero-section');
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            hero.classList.add('visible');
          }
        });
      }, {
        threshold: 0.1
      });
      observer.observe(hero);
    });