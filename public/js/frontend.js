document.addEventListener('DOMContentLoaded', function () {
  initMobileMenu();
  initMobileAccordions();
  initHeroSlider();
});

let typingTimeouts = [];

function clearTyping() {
  typingTimeouts.forEach(t => clearTimeout(t));
  typingTimeouts = [];
  document.querySelectorAll('.typed-text').forEach(el => el.textContent = '');
  document.querySelectorAll('.typewriter-cursor').forEach(el => el.classList.remove('hidden'));
}

function typeText(element, text, speed, callback) {
  let i = 0;
  element.textContent = '';
  const cursor = element.parentElement.querySelector('.typewriter-cursor');
  if (cursor) cursor.classList.remove('hidden');

  function type() {
    if (i < text.length) {
      element.textContent += text.charAt(i);
      i++;
      const variation = Math.random() * 30 - 15;
      const t = setTimeout(type, speed + variation);
      typingTimeouts.push(t);
    } else {
      if (cursor) cursor.classList.add('hidden');
      if (callback) callback();
    }
  }
  type();
}

function animateHeroSlide() {
  clearTyping();
  const activeSlide = document.querySelector('.heroSwiper .swiper-slide-active');
  if (!activeSlide) return;

  const titleEl = activeSlide.querySelector('.hero-slide-title .typed-text');
  const descEl = activeSlide.querySelector('.hero-slide-desc .typed-text');
  const titleText = activeSlide.querySelector('.hero-slide-title').dataset.text;
  const descText = activeSlide.querySelector('.hero-slide-desc').dataset.text;

  if (titleEl && titleText) {
    typeText(titleEl, titleText, 70, function () {
      if (descEl && descText) {
        typeText(descEl, descText, 50, function () {});
      }
    });
  }
}

function initHeroSlider() {
  const heroSwiper = document.querySelector('.heroSwiper');
  if (!heroSwiper) return;

  new Swiper(heroSwiper, {
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true
    },
    speed: 800,
    keyboard: {
      enabled: true,
      onlyInViewport: true
    },
    mousewheel: {
      enabled: false
    },
    grabCursor: true,
    touchRatio: 1,
    touchAngle: 45,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    on: {
      slideChangeTransitionStart: function () {
        const activeSlide = document.querySelector('.heroSwiper .swiper-slide-active');
        if (activeSlide) {
          const content = activeSlide.querySelector('.animate-fade-up');
          if (content) {
            content.style.animation = 'none';
            content.offsetHeight;
            content.style.animation = 'fadeUp 0.8s ease forwards';
          }
        }
        animateHeroSlide();
      },
      init: function () {
        animateHeroSlide();
      }
    }
  });
}

function initMobileMenu() {
  const toggle = document.querySelector('.mobile-toggle');
  const menu = document.querySelector('.mobile-menu');
  const closeBtn = document.querySelector('.mobile-menu-close');
  const overlay = document.querySelector('.mobile-menu-overlay');

  if (!toggle || !menu) return;

  function openMenu() {
    menu.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (overlay) overlay.style.display = 'block';
  }

  function closeMenu() {
    menu.classList.remove('open');
    document.body.style.overflow = '';
    if (overlay) overlay.style.display = 'none';
  }

  toggle.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (overlay) overlay.addEventListener('click', closeMenu);

  document.querySelectorAll('.mobile-menu a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (!this.nextElementSibling || !this.nextElementSibling.classList.contains('mobile-submenu')) {
        closeMenu();
      }
    });
  });
}

function initMobileAccordions() {
  document.querySelectorAll('.mobile-nav-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
      const parent = this.parentElement;
      const submenu = parent.querySelector('.mobile-submenu');
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


document.addEventListener('DOMContentLoaded', function () {
  initMobileMenu();
  initMobileAccordions();
  initHeroSlider();
});
