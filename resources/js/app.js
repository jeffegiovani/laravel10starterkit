import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import * as Turbo from "@hotwired/turbo";
Turbo.start();

/**
 * Lenis
 */
import Lenis from '@studio-freight/lenis';
const lenis = new Lenis({
  duration: 1.1,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
  direction: 'vertical', // vertical, horizontal
  gestureDirection: 'both', // vertical, horizontal, both
  smooth: true,
  mouseMultiplier: 1,
  smoothTouch: false,
  touchMultiplier: 2,
  infinite: false
})

//get scroll value
lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
  //console.log({ scroll, limit, velocity, direction, progress });
})

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

function animateElement(progress, element) {
  // Move the element upwards based on scroll progress
  const translateY = progress * -150; // Adjust the multiplier to change the movement speed
  element.style.transform = `translateY(${translateY}px)`;
}

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateElement(entry.intersectionRatio, entry.target);
      }
    });
  },
  {
    threshold: Array.from({ length: 101 }, (_, i) => i / 100), // Creates an array of 101 thresholds from 0 to 1, with a 0.01 step
  }
);

const targetElements = document.querySelectorAll('[data-animate]');

if (targetElements.length > 0) {
  targetElements.forEach((element) => {
    observer.observe(element);
  });
}

/**
 * InstantPage
 */
import "instant.page";


/**
 * Turbo Turn
 */
//import "@domchristie/turn/dist/turn";
import Turn from '@domchristie/turn';
Turn.start();

import Swiper from 'swiper';
const swiper = new Swiper();