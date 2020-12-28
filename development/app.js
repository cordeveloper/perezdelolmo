import "./scss/style.scss";

import Menu from "./js/menu.js";


document.addEventListener('DOMContentLoaded', () => {

    const menuDOM = document.querySelector('#menu');

    if(menuDOM){
        new Menu(menuDOM);
    }

});