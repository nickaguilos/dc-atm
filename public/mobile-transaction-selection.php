<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="mobile">
        <!-- Mobile Head -->
        <?php require 'includes/mobile/mobile-head.html' ?>

        <!-- Body -->
        <main id="mobile-body" class="body homescreen">
            <p class="instruction-text">
                Please select transaction type
            </p>
            <div class="button-stack">
                <a href="mobile-withdrawal-account-selection.php" class="button main">Withdrawal</a>
                <a href="" class="button main">Balance Check</a>
                <a href="" class="button main">Deposit</a>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>