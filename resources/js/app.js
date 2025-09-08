import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Typed from 'typed.js';
import 'particles.js';

window.Typed = Typed;

AOS.init();




document.addEventListener('DOMContentLoaded', () => {
    new Typed('.typed-name', {
        strings: [document.querySelector('.typed-name')?.dataset.name || ''],
        typeSpeed: 100,
        backSpeed: 40,
        loop: false,
        showCursor: false
    });

    new Typed('.typed-role', {
        strings: ["Desarrollador Laravel", "Frontend Developer", "Apasionado por el código"],
        typeSpeed: 60,
        backSpeed: 40,
        loop: true,
        startDelay: 1200
    });
});

document.addEventListener('DOMContentLoaded', () => {
    window.particlesJS('particles-js', {
        particles: {
            number: {
                value: 60,
                density: { enable: true, value_area: 800 }
            },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.5 },
            size: { value: 3 },
            line_linked: {
                enable: true,
                distance: 150,
                color: "#ffffff",
                opacity: 0.4,
                width: 1
            },
            move: {
                enable: true,
                speed: 2,
                direction: "none",
                straight: false
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" }
            },
            modes: {
                repulse: { distance: 100 },
                push: { particles_nb: 4 }
            }
        },
        retina_detect: true
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggle?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
});
