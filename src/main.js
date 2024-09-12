import './styles.scss'import gsap from 'gsap';import ScrollTrigger from 'gsap/ScrollTrigger';import {Hover} from "perspective.js/src";gsap.registerPlugin(ScrollTrigger);window.addEventListener("DOMContentLoaded", () => {    lucide.createIcons();    let header = document.getElementById('masthead');    if (header) {        ScrollTrigger.create({            start: 'top top',            end: 'bottom bottom',            onUpdate: (self) => {                const scrollDirection = self.direction; // 1 for down, -1 for up                console.log(scrollDirection);                if (scrollDirection === 1) {                    gsap.to(header, {yPercent: -100});                } else if (scrollDirection === -1) {                    gsap.to(header, {yPercent: 0});                }            }        });    }    const portfolioItem = document.querySelectorAll('.portfolio-item-wrap');    if (portfolioItem.length > 0) {        portfolioItem.forEach(item => {            if (!item.dataset.tiltPerspective) {                return;            }            const tilt = new Hover(item, {                "max": 20,                "reverseTilt": true,                "scale": 1,                "perspective": item.dataset.tiltPerspective            })        });    }});