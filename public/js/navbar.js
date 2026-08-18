document.addEventListener('DOMContentLoaded', function () {
  initMobileMenu();
  initMobileAccordions();
  initDropdownKeyboard();
});

function initMobileMenu() {
  const toggle = document.querySelector('.sa-mobile-toggle');
  const menu = document.querySelector('.sa-mobile-menu');
  const closeBtn = document.querySelector('.sa-mobile-menu-close');
  const overlay = document.querySelector('.sa-mobile-overlay');

  if (!toggle || !menu) return;

  function openMenu() {
    menu.classList.add('open');
    menu.setAttribute('aria-hidden', 'false');
    toggle.setAttribute('aria-expanded', 'true');
    toggle.setAttribute('aria-label', 'Close menu');
    document.body.style.overflow = 'hidden';
    if (overlay) overlay.classList.add('open');
  }

  function closeMenu() {
    menu.classList.remove('open');
    menu.setAttribute('aria-hidden', 'true');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Open menu');
    document.body.style.overflow = '';
    if (overlay) overlay.classList.remove('open');
  }

  toggle.addEventListener('click', function () {
    if (menu.classList.contains('open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (overlay) overlay.addEventListener('click', closeMenu);

  document.querySelectorAll('.sa-mobile-menu a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (!this.nextElementSibling || !this.nextElementSibling.classList.contains('sa-mobile-submenu')) {
        closeMenu();
      }
    });
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && menu.classList.contains('open')) {
      closeMenu();
      toggle.focus();
    }
  });
}

function initMobileAccordions() {
  document.querySelectorAll('.mobile-nav-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
      const parent = this.parentElement;
      const submenu = parent.querySelector('.sa-mobile-submenu');
      if (submenu) {
        e.preventDefault();
        const isOpen = parent.classList.contains('open');
        parent.classList.toggle('open');
        this.setAttribute('aria-expanded', !isOpen);
      }
    });

    link.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.click();
      }
    });
  });
}

function initDropdownKeyboard() {
  document.querySelectorAll('.sa-navbar .nav-item.dropdown > .nav-link').forEach(function (trigger) {
    trigger.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        const dropdown = this.nextElementSibling;
        if (dropdown && dropdown.classList.contains('dropdown-menu-custom')) {
          const firstLink = dropdown.querySelector('li a');
          if (firstLink) firstLink.focus();
        }
      }
    });
  });
}
