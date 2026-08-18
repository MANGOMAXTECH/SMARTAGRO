document.addEventListener('DOMContentLoaded', function () {
  initPasswordToggles();
  initAuthCarousel();
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

function initAuthCarousel() {
  const carousel = document.getElementById('authCarousel');
  if (!carousel) return;

  carousel.addEventListener('slide.bs.carousel', function (e) {
    clearTyping();
    const newSlide = e.relatedTarget;
    if (!newSlide) return;

    const titleEl = newSlide.querySelector('.carousel-caption h3 .typed-text');
    const descEl = newSlide.querySelector('.carousel-caption p .typed-text');
    const titleText = newSlide.querySelector('.carousel-caption h3').dataset.text;
    const descText = newSlide.querySelector('.carousel-caption p').dataset.text;

    if (titleEl && titleText) {
      typeText(titleEl, titleText, 70, function () {
        if (descEl && descText) {
          typeText(descEl, descText, 50, function () {});
        }
      });
    }
  });

  const initialSlide = document.querySelector('#authCarousel .carousel-item.active');
  if (initialSlide) {
    const titleEl = initialSlide.querySelector('.carousel-caption h3 .typed-text');
    const descEl = initialSlide.querySelector('.carousel-caption p .typed-text');
    const titleText = initialSlide.querySelector('.carousel-caption h3').dataset.text;
    const descText = initialSlide.querySelector('.carousel-caption p').dataset.text;

    if (titleEl && titleText) {
      typeText(titleEl, titleText, 70, function () {
        if (descEl && descText) {
          typeText(descEl, descText, 50, function () {});
        }
      });
    }
  }
}

function initPasswordToggles() {
    const toggles = document.querySelectorAll('.password-toggle');

    toggles.forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            const inputGroup = this.closest('.input-group');
            const passwordInput = inputGroup.querySelector('input[type="password"], input[type="text"]');

            if (!passwordInput) return;

            const isPassword = passwordInput.type === 'password';

            passwordInput.type = isPassword ? 'text' : 'password';

            const icon = this.querySelector('i');
            if (icon) {
                if (isPassword) {
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }
        });

        toggle.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
}