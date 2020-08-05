import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSliders from './modules/init-sliders';
import heroAnimation from './modules/hero-animation';
import separateLetters from './modules/separate-letters';
import scrollActivate from './modules/scroll-activate';

initSliders();
heroAnimation();
separateLetters();
scrollActivate();