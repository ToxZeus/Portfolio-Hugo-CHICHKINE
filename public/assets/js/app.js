import { initLanguageSwitcher } from './languageSwitcher.js';
import { initNavigationHighlight } from './navigation.js';
import { initBackToTop } from './backToTop.js';

// Must run synchronously before DOMContentLoaded so CSS animations
// don't flash invisible content while the module loads.
document.documentElement.classList.add('js-ready');

document.addEventListener('DOMContentLoaded', () => {
    initLanguageSwitcher();
    initNavigationHighlight();
    initBackToTop();
    initReveal();
});

const STAGGER_SELECTORS = [
    '.projects-grid',
    '.skills-categories',
    '.qualities-grid',
    '.contact-grid',
    '.lang-list',
    '.interests-wrap',
    '.timeline-v',
];

function initReveal() {
    // Inject stagger transition-delays onto children before observing
    STAGGER_SELECTORS.forEach(sel => {
        document.querySelectorAll(sel).forEach(container => {
            Array.from(container.children).forEach((child, i) => {
                child.style.transitionDelay = `${i * 0.07}s`;
            });
        });
    });

    const els = document.querySelectorAll('.reveal');
    if (!els.length || !('IntersectionObserver' in window)) {
        els.forEach(el => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.06, rootMargin: '0px 0px -30px 0px' });

    els.forEach(el => observer.observe(el));
}
