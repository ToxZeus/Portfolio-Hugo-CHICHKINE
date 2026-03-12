    <?php
    // Safe defaults if translations are not provided
    if (!isset($translations) || !is_array($translations)) {
        $translations = [
            'contact_me' => 'Contact',
            'back_to_top' => 'Back to top',
        ];
    }
    ?>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <p><?php echo date('Y'); ?> © Hugo Chichkine</p>
                <p>
                    <span class="lang-fr">Portfolio MVC modernisé avec TypeScript, animations légères et génération statique pour GitHub Pages.</span>
                    <span class="lang-en">MVC portfolio modernized with TypeScript, lightweight animations, and static generation for GitHub Pages.</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="backToTopBtn" class="back-to-top" aria-label="<?php echo $translations['back_to_top']; ?>">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo BASE_URL; ?>/assets/js/app.js" type="module"></script>
</body>
</html>