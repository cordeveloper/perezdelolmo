import {gsap} from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default class Menu {

    constructor(DOM) {
      this.menu = DOM;
      this.menuBar = this.menu.querySelector('#menu-bar');
      this.menuBrand = this.menu.querySelector('#menu-brand');
      this.menuLogo = this.menu.querySelector('#logo span:first-child');
      this.menuLogoSub = this.menu.querySelector('#logo span:last-child');
      this.init = this.init.bind(this);
      this.scroll = 0;
      
      this.init();
    }

    init(){
        ScrollTrigger.create({
            start: 'top',
            end: 99999,
            toggleClass: {className: 'scrolled', targets: '#menu-bar'}
          });
    }

}