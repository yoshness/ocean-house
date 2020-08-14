import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSliders from './modules/init-sliders';
import heroAnimation from './modules/hero-animation';
import separateLetters from './modules/separate-letters';
import scrollActivate from './modules/scroll-activate';
import toggleMenu from './modules/toggle-menu';
import scrollToElement from './modules/scroll-to-element';
import slideDown from './modules/slide-down';

initSliders();
heroAnimation();
separateLetters();
scrollActivate();
toggleMenu();
scrollToElement();
slideDown();
