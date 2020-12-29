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
      this.sideMenu = document.querySelector('#side-menu');
      this.toggleMenu = this.menu.querySelector('.menu__toggle');
      this.init = this.init.bind(this);
      this.scroll = 0;
      
      this.init();
    }

    init(){
        ScrollTrigger.create({
            start: 'top -100',
            end: 99999,
            toggleClass: {className: 'scrolled', targets: ['#menu-bar', '#side-menu',  '#menu-schedule']}
          });

      this.toggleMenu.addEventListener('click', () => {
        this.toggleMenu.classList.toggle('on');
        this.sideMenu.classList.toggle('active');
        if(this.sideMenu.classList.contains('active')){
          document.querySelector('body').classList.add('block');
        } else{
          document.querySelector('body').classList.remove('block');
        }
      });

      window.addEventListener('resize', () => {
        if(this.sideMenu.classList.contains('active')){
          this.sideMenu.classList.remove('active');
        }
        if(document.querySelector('body').classList.contains('block')){
          document.querySelector('body').classList.remove('block');
        }
        if(this.toggleMenu.classList.contains('on')){
          this.toggleMenu.classList.remove('on');
        }
      });
    }

}