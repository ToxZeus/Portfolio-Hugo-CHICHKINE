<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title; ?></title>

    <!-- SEO -->
    <meta name="description" content="Portfolio de Hugo Chichkine — alternant développement logiciel chez Technicatome, étudiant en Ingénierie Web à l'ESGI Paris. PHP, React, Python, Docker." />
    <meta name="author" content="Hugo Chichkine" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo BASE_URL; ?>/" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo BASE_URL; ?>/" />
    <meta property="og:title" content="Hugo Chichkine — Ingénierie Web" />
    <meta property="og:description" content="Alternant développement logiciel chez Technicatome · Étudiant ESGI Paris · PHP, React, Python, Docker" />
    <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:locale:alternate" content="en_US" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Hugo Chichkine — Ingénierie Web" />
    <meta name="twitter:description" content="Alternant développement logiciel chez Technicatome · Étudiant ESGI Paris" />
    <meta name="twitter:image" content="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" />

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://cdn.jsdelivr.net" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Sora:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" />
</head>
<body class="lang-<?php echo $_SESSION['lang'] ?? 'fr'; ?>">

    <header>
        <button id="langSwitcher" class="lang-switcher" data-current-lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
            <?php echo ($_SESSION['lang'] ?? 'fr') === 'fr' ? 'EN' : 'FR'; ?>
        </button>

        <div class="container">
            <div class="hero-avatar">
                <img src="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" alt="Hugo Chichkine" />
            </div>
            <h1>Hugo Chichkine</h1>
            <p class="hero-role">
                <span class="lang-fr">Ingénierie Web · ESGI Paris</span>
                <span class="lang-en">Web Engineering · ESGI Paris</span>
            </p>
            <p>
                <span class="lang-fr">Alternant développement logiciel chez <strong>Technicatome</strong></span>
                <span class="lang-en">Software Development Apprentice at <strong>Technicatome</strong></span>
            </p>
            <div class="hero-social">
                <a href="https://www.linkedin.com/in/hugo-chichkine/" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://github.com/toxzeus" target="_blank" rel="noopener" aria-label="GitHub">
                    <i class="bi bi-github"></i>
                </a>
                <a href="mailto:chichkinehugo@gmail.com" aria-label="Email">
                    <i class="bi bi-envelope"></i>
                </a>
            </div>
        </div>

        <?php include 'navigation.php'; ?>
    </header>
