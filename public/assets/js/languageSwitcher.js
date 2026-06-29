export function initLanguageSwitcher() {
    const langSwitcher = document.getElementById('langSwitcher');
    if (!langSwitcher) return;

    // Apply localStorage preference immediately (overrides PHP session default)
    const saved = localStorage.getItem('lang');
    if (saved === 'en' && !document.body.classList.contains('lang-en')) {
        document.body.classList.replace('lang-fr', 'lang-en');
        langSwitcher.textContent = 'FR';
    } else if (saved === 'fr' && document.body.classList.contains('lang-en')) {
        document.body.classList.replace('lang-en', 'lang-fr');
        langSwitcher.textContent = 'EN';
    }

    langSwitcher.addEventListener('click', () => {
        const isEn = document.body.classList.contains('lang-en');

        if (isEn) {
            document.body.classList.replace('lang-en', 'lang-fr');
            langSwitcher.textContent = 'EN';
            localStorage.setItem('lang', 'fr');
        } else {
            document.body.classList.replace('lang-fr', 'lang-en');
            langSwitcher.textContent = 'FR';
            localStorage.setItem('lang', 'en');
        }

        // Update PHP session too when a backend is available (local dev)
        fetch('/api/language', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ lang: document.body.classList.contains('lang-en') ? 'en' : 'fr' }),
        }).catch(() => {});
    });
}
