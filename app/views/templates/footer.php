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
            <p>
                <?php echo date('Y'); ?> © Hugo Chichkine
            </p>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="backToTopBtn" aria-label="<?php echo $translations['back_to_top']; ?>"><i class="bi bi-arrow-up"></i></button>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo BASE_URL; ?>/assets/js/app.js" type="module"></script>
</body>
</html>