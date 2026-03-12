type SupportedLanguage = 'fr' | 'en';

const body = document.body;
const html = document.documentElement;

function resolveLanguage(): SupportedLanguage {
    const stored = window.localStorage.getItem('portfolio-language');
    if (stored === 'fr' || stored === 'en') {
        return stored;
    }

    const fallback = body.dataset.defaultLang;
    return fallback === 'en' ? 'en' : 'fr';
}

function applyLanguage(language: SupportedLanguage): void {
    body.classList.toggle('lang-en', language === 'en');
    body.classList.toggle('lang-fr', language === 'fr');
    html.lang = language;

    const switcher = document.getElementById('langSwitcher');
    if (switcher instanceof HTMLButtonElement) {
        switcher.dataset.currentLang = language;
        switcher.textContent = language === 'fr' ? 'EN' : 'FR';
    }

    window.localStorage.setItem('portfolio-language', language);
    window.dispatchEvent(new CustomEvent<SupportedLanguage>('portfolio:language-change', { detail: language }));
}

function initLanguageSwitcher(): void {
    applyLanguage(resolveLanguage());

    const switcher = document.getElementById('langSwitcher');
    if (!(switcher instanceof HTMLButtonElement)) {
        return;
    }

    switcher.addEventListener('click', () => {
        const nextLanguage: SupportedLanguage = body.classList.contains('lang-en') ? 'fr' : 'en';
        applyLanguage(nextLanguage);
    });
}

function initRoleRotator(): void {
    const roleRotator = document.getElementById('roleRotator');
    if (!(roleRotator instanceof HTMLElement)) {
        return;
    }

    let index = 0;

    const readRoles = (language: SupportedLanguage): string[] => {
        const attribute = language === 'fr' ? roleRotator.dataset.rolesFr : roleRotator.dataset.rolesEn;
        return (attribute ?? '')
            .split('|')
            .map((entry) => entry.trim())
            .filter(Boolean);
    };

    const render = (language: SupportedLanguage) => {
        const roles = readRoles(language);
        if (roles.length === 0) {
            return;
        }

        index = index % roles.length;
        roleRotator.textContent = roles[index];
        index += 1;
    };

    const currentLanguage = () => (body.classList.contains('lang-en') ? 'en' : 'fr') as SupportedLanguage;

    render(currentLanguage());
    window.setInterval(() => render(currentLanguage()), 2800);
    window.addEventListener('portfolio:language-change', ((event: Event) => {
        const customEvent = event as CustomEvent<SupportedLanguage>;
        index = 0;
        render(customEvent.detail);
    }) as EventListener);
}

function initNavigation(): void {
    const navLinks = Array.from(document.querySelectorAll<HTMLAnchorElement>('nav a.nav-link[href^="#"]'));
    const sections = navLinks
        .map((link) => {
            const sectionId = link.getAttribute('href');
            return sectionId ? document.querySelector<HTMLElement>(sectionId) : null;
        })
        .filter((section): section is HTMLElement => section instanceof HTMLElement);

    const setActive = (id: string) => {
        navLinks.forEach((link) => {
            const isCurrent = link.getAttribute('href') === `#${id}`;
            link.classList.toggle('active', isCurrent);
            if (isCurrent) {
                link.setAttribute('aria-current', 'page');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            const visibleEntry = entries
                .filter((entry) => entry.isIntersecting)
                .sort((left, right) => right.intersectionRatio - left.intersectionRatio)[0];

            if (visibleEntry?.target instanceof HTMLElement) {
                setActive(visibleEntry.target.id);
            }
        },
        {
            rootMargin: '-20% 0px -55% 0px',
            threshold: [0.2, 0.4, 0.6],
        },
    );

    sections.forEach((section) => observer.observe(section));

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('href');
            if (!targetId) {
                return;
            }

            const target = document.querySelector<HTMLElement>(targetId);
            if (!target) {
                return;
            }

            const yOffset = 96;
            const top = target.getBoundingClientRect().top + window.scrollY - yOffset;
            window.scrollTo({ top, behavior: 'smooth' });
        });
    });
}

function initProjectFilters(): void {
    const buttons = Array.from(document.querySelectorAll<HTMLButtonElement>('[data-filter]'));
    const cards = Array.from(document.querySelectorAll<HTMLElement>('.project-card[data-category]'));

    if (buttons.length === 0 || cards.length === 0) {
        return;
    }

    const applyFilter = (filter: string) => {
        buttons.forEach((button) => button.classList.toggle('is-active', button.dataset.filter === filter));

        cards.forEach((card) => {
            const category = card.dataset.category ?? '';
            const shouldDisplay = filter === 'all' || category.split(' ').includes(filter);
            card.classList.toggle('is-hidden', !shouldDisplay);
        });
    };

    buttons.forEach((button) => {
        button.addEventListener('click', () => applyFilter(button.dataset.filter ?? 'all'));
    });
}

function initReveal(): void {
    const revealables = Array.from(document.querySelectorAll<HTMLElement>('[data-reveal]'));
    if (revealables.length === 0) {
        return;
    }

    const observer = new IntersectionObserver(
        (entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting || !(entry.target instanceof HTMLElement)) {
                    return;
                }

                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            });
        },
        {
            threshold: 0.2,
            rootMargin: '0px 0px -10% 0px',
        },
    );

    revealables.forEach((element, index) => {
        element.style.transitionDelay = `${Math.min(index * 40, 220)}ms`;
        observer.observe(element);
    });
}

function initBackToTop(): void {
    const button = document.getElementById('backToTopBtn');
    if (!(button instanceof HTMLButtonElement)) {
        return;
    }

    const toggle = () => {
        button.classList.toggle('is-visible', window.scrollY > 420);
    };

    window.addEventListener('scroll', toggle, { passive: true });
    button.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    toggle();
}

function initHeroSpotlight(): void {
    const hero = document.querySelector<HTMLElement>('.hero');
    if (!hero) {
        return;
    }

    hero.addEventListener('pointermove', (event) => {
        const bounds = hero.getBoundingClientRect();
        const x = ((event.clientX - bounds.left) / bounds.width) * 100;
        const y = ((event.clientY - bounds.top) / bounds.height) * 100;

        hero.style.setProperty('--spotlight-x', `${x}%`);
        hero.style.setProperty('--spotlight-y', `${y}%`);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initLanguageSwitcher();
    initRoleRotator();
    initNavigation();
    initProjectFilters();
    initReveal();
    initBackToTop();
    initHeroSpotlight();
});