<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" />
</head>
<body class="lang-<?php echo $_SESSION['lang'] ?? 'fr'; ?>" data-default-lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>" data-base-url="<?php echo BASE_URL; ?>">
    <!-- Header / Hero -->
    <header class="hero" id="top">
        <button id="langSwitcher" class="lang-switcher" type="button" data-current-lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>" aria-label="Switch language">
            <?php echo $_SESSION['lang'] === 'fr' ? 'EN' : 'FR'; ?>
        </button>

        <div class="hero-glow hero-glow-one"></div>
        <div class="hero-glow hero-glow-two"></div>

        <div class="container hero-shell">
            <div class="hero-copy" data-reveal>
                <p class="hero-kicker">
                    <span class="lang-fr">Portfolio 2026 • Produit, code, exécution</span>
                    <span class="lang-en">Portfolio 2026 • Product, code, execution</span>
                </p>

                <h1>Hugo Chichkine</h1>

                <p class="hero-lead">
                    <span class="lang-fr">J’imagine et je développe des expériences web lisibles, rapides et prêtes pour la production, avec une préférence nette pour les interfaces qui ont une vraie personnalité.</span>
                    <span class="lang-en">I design and build web experiences that are readable, fast, and production-ready, with a clear preference for interfaces that have real personality.</span>
                </p>

                <div class="hero-rotator">
                    <span class="lang-fr">Focus actuel</span>
                    <span class="lang-en">Current focus</span>
                    <strong id="roleRotator" data-roles-fr="Alternant développement logiciel|Étudiant en ingénierie web|Constructeur d'interfaces fiables" data-roles-en="Software development apprentice|Web engineering student|Reliable interface builder"></strong>
                </div>

                <div class="hero-actions">
                    <a class="hero-btn hero-btn-primary" href="#projets">
                        <span class="lang-fr">Voir les projets</span>
                        <span class="lang-en">View projects</span>
                    </a>
                    <a class="hero-btn hero-btn-secondary" href="#contact">
                        <span class="lang-fr">Me contacter</span>
                        <span class="lang-en">Contact me</span>
                    </a>
                    <a class="hero-link" href="<?php echo BASE_URL; ?>/CV_CHICHKINE_HUGO.pdf" target="_blank" rel="noopener">
                        <span class="lang-fr">Télécharger le CV</span>
                        <span class="lang-en">Download resume</span>
                    </a>
                </div>

                <ul class="hero-highlights">
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <span class="lang-fr">Paris • ESGI • spécialisation Ingénierie Web</span>
                        <span class="lang-en">Paris • ESGI • Web Engineering major</span>
                    </li>
                    <li>
                        <i class="bi bi-building"></i>
                        <span class="lang-fr">Alternance chez Technicatome</span>
                        <span class="lang-en">Work-study program at Technicatome</span>
                    </li>
                    <li>
                        <i class="bi bi-lightning-charge"></i>
                        <span class="lang-fr">Frontend moderne, backend pragmatique, livraison propre</span>
                        <span class="lang-en">Modern frontend, pragmatic backend, clean delivery</span>
                    </li>
                </ul>
            </div>

            <aside class="hero-panel" data-reveal>
                <div class="hero-panel-card">
                    <p class="panel-label">
                        <span class="lang-fr">Stack actuel</span>
                        <span class="lang-en">Current stack</span>
                    </p>
                    <div class="stack-cloud">
                        <span>TypeScript</span>
                        <span>JavaScript</span>
                        <span>PHP MVC</span>
                        <span>Bootstrap</span>
                        <span>React</span>
                        <span>Node.js</span>
                        <span>SQL</span>
                        <span>Docker</span>
                    </div>
                </div>

                <div class="hero-panel-grid">
                    <article class="metric-card">
                        <strong>3x1</strong>
                        <span class="lang-fr">rythme alternance</span>
                        <span class="lang-en">work-study cadence</span>
                    </article>
                    <article class="metric-card">
                        <strong>4+</strong>
                        <span class="lang-fr">écosystèmes maîtrisés</span>
                        <span class="lang-en">ecosystems covered</span>
                    </article>
                    <article class="metric-card">
                        <strong>FR / EN</strong>
                        <span class="lang-fr">communication fluide</span>
                        <span class="lang-en">fluent communication</span>
                    </article>
                    <article class="metric-card">
                        <strong>2026</strong>
                        <span class="lang-fr">version modernisée du portfolio</span>
                        <span class="lang-en">modernized portfolio release</span>
                    </article>
                </div>
            </aside>
        </div>

        <?php include 'navigation.php'; ?>
    </header>