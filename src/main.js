import './styles.scss'import gsap from 'gsap';import ScrollTrigger from 'gsap/ScrollTrigger';import {Hover} from "perspective.js/src";import Isotope from 'isotope-layout';import Swiper from 'swiper';import 'swiper/css';window.addEventListener("DOMContentLoaded", () => {    lucide.createIcons();    gsap.registerPlugin(ScrollTrigger);    let header = document.getElementById('masthead');    if (header) {        ScrollTrigger.create({            start: 'top top',            end: 'bottom bottom',            onUpdate: (self) => {                const scrollDirection = self.direction; // 1 for down, -1 for up                if (scrollDirection === 1) {                    gsap.to(header, {yPercent: -100});                } else if (scrollDirection === -1) {                    gsap.to(header, {yPercent: 0});                }            }        });    }    // Hero Slider    const heroSliderContainer = document.querySelector('.hero-slider');    if (heroSliderContainer) {        const heroSlider = new Swiper(heroSliderContainer, {            spaceBetween: 20,            speed: 2000,            pagination: {                el: ".swiper-pagination",                dynamicBullets: true,            },        });    }    const portfolioItem = document.querySelectorAll('.portfolio-item-wrap');    if (portfolioItem.length > 0) {        portfolioItem.forEach(item => {            if (!item.dataset.tiltPerspective) {                return;            }            const tilt = new Hover(item, {                "max": 15,                "reverseTilt": true,                "scale": 1,                "perspective": item.dataset.tiltPerspective            })        });    }    const portfolioGrid = document.querySelector('.portfolio-grid');    const portfolioFilter = document.querySelector('.portfolio-filter');    if (portfolioGrid && portfolioFilter) {        const isActiveClass = 'is-active';        const iso = new Isotope(portfolioGrid, {            itemSelected: '.portfolio-item',            layoutMode: 'fitRows'        });        // Filtering functionality        portfolioFilter.addEventListener('click', (event) => {            event.preventDefault();            if (!event.target.classList.contains('portfolio-filter-button')) {                return;            }            // clear active buttons            portfolioFilter.querySelectorAll('li').forEach(el => {                if (el.classList.contains(isActiveClass)) {                    el.classList.remove(isActiveClass);                }            });            // Update active button            const liEl = event.target.closest('li');            if (!liEl.classList.contains(isActiveClass)) {                liEl.classList.add(isActiveClass);            } else {                liEl.classList.remove(isActiveClass);            }            // Elements filtering function            const filterValue = event.target.dataset.filter            iso.arrange({filter: filterValue});        });    }    // Back to top and Scroll Track    const backToTopContainer = document.getElementById('backToTopWrapper');    if (backToTopContainer) {        // Back to top        const backToTopButton = document.querySelector('.btn-backtotop');        if (backToTopButton) {            ScrollTrigger.create({                start: 'top -200px',                onEnter: () => backToTopContainer.classList.add('show'),                onLeaveBack: () => backToTopContainer.classList.remove('show'),            });        }        // Scroll Tracking        const scrollTrackItem = document.querySelector('.scroll-track-item');        const docHeight = document.documentElement.scrollHeight - window.innerHeight;        gsap.to(scrollTrackItem, {            width: '100%',            ease: 'easeInOut',            scrollTrigger: {                trigger: window.body,                start: 'top top',                end: () => docHeight,                scrub: true,                markers: false,            }        });    }});