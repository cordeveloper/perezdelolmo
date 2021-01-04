import {gsap, Power1} from "gsap";

export default class InViewport {
    constructor(DOM) {
        this.element = DOM;

        this.init = this.init.bind(this);

        this.init();
    }

    init() {
        const el = this.element;
        const intersectionObserver = new IntersectionObserver( function(entries){
            if (entries[0].intersectionRatio <= 0) return;

            gsap.fromTo(el, {autoAlpha: 0, x: '-100vw'}, {autoAlpha: 1, x: 0, duration: 1, delay: .5, ease: Power1.easeInOut})
            intersectionObserver.unobserve(el);
        });

        intersectionObserver.observe(this.element);
    }
}