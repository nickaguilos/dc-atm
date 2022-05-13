<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="mobile">
        <!-- Mobile Head -->
        <?php require 'includes/mobile/mobile-head.html' ?>

        <!-- Body -->
        <main id="mobile-body" class="body homescreen">
            <a href="mobile-homescreen.php"><img src="/images/back-arrow.svg" alt="&lsaquo;"></a>
            <div>
                <div class="card qr">
                    <strong>Almost there!</strong>
                    <p>
                        Present this QR code at the nearest The Bank ATM to complete your transaction
                    </p>
                    <img src="/images/qr.png" alt="">
                    <a href="">Download</a>
                </div>
            </div>
            <a href="mobile-atm-locator.php" class="button main fixed-action">ATM Locator</a>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>