import { initNav } from "./module/nav.js";
import { initSlider } from "./module/sliders.js";
import { initPopup } from "./module/popup.js";
import { initScrollAnimation } from './module/scroll-animation.js';
import { initModal } from "./module/modal.js";


window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');
    initSlider()
    initNav()
    initPopup()
    initScrollAnimation()
    initModal();
    baguetteBox.run('.gallery-wrapper');

});
