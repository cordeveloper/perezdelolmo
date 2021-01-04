import "./scss/style.scss";

import Menu from "./js/menu.js";
import InViewport from "./js/in-viewport.js";


document.addEventListener('DOMContentLoaded', () => {

    const menuDOM = document.querySelector('#menu');
    const inViewportDOM = Array.prototype.slice.call(document.querySelectorAll('[data-inviewport]'));

    if(menuDOM){
        new Menu(menuDOM);
    }

    if(inViewportDOM) {
        inViewportDOM.forEach( el => new InViewport(el));
    }

});