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
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Sora:wght@300;400;600;700&display=swap" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" />
</head>
<body class="lang-<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
    <!-- Header / Hero -->
    <header>
        <button id="langSwitcher" class="lang-switcher" data-current-lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
            <?php echo $_SESSION['lang'] === 'fr' ? 'EN' : 'FR'; ?>
        </button>

        <div class="container">
            <h1>Hugo Chichkine</h1>
            <p>
                <span class="lang-fr">Étudiant en <strong>ingénierie web</strong> à l'ESGI Paris</span>
                <span class="lang-en">Web Engineering student at ESGI Paris</span>
            </p>
        </div>

        <?php include 'navigation.php'; ?>
    </header>