'use strict';

// ============================================================
// Hamburger Menu
// ============================================================
const hamburger = document.querySelector('.l-header__hamburger');
const spNav = document.querySelector('.l-sp-nav');

if (hamburger && spNav) {
  hamburger.addEventListener('click', () => {
    const isOpen = hamburger.getAttribute('aria-expanded') === 'true';

    hamburger.setAttribute('aria-expanded', String(!isOpen));
    spNav.setAttribute('aria-hidden', String(isOpen));
    spNav.classList.toggle('is-open', !isOpen);
    document.body.classList.toggle('is-nav-open', !isOpen);
  });

  // SPナビのリンククリック時にメニューを閉じる
  spNav.querySelectorAll('.l-sp-nav__link').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.setAttribute('aria-expanded', 'false');
      spNav.setAttribute('aria-hidden', 'true');
      spNav.classList.remove('is-open');
      document.body.classList.remove('is-nav-open');
    });
  });
}


// ============================================================
// Header Scroll
// TODO: スクロール時のヘッダーにスタイルを付与したい場合は有効化
// ============================================================
// const header = document.querySelector('.l-header');
// let lastScrollY = 0;
//
// window.addEventListener('scroll', () => {
//   const currentScrollY = window.scrollY;
//
//   if (currentScrollY > 80) {
//     header.classList.add('is-scrolled');
//   } else {
//     header.classList.remove('is-scrolled');
//   }
//
//   lastScrollY = currentScrollY;
// }, { passive: true });


// ============================================================
// TODO: 案件ごとに必要な処理を追加
// ============================================================
