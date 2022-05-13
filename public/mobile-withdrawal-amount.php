<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="mobile">
        <!-- Mobile Head -->
        <?php require 'includes/mobile/mobile-head.html' ?>

        <!-- Body -->
        <main id="mobile-body" class="body homescreen">
            <a href=""><img src="/images/back-arrow.svg" alt="&lsaquo;"></a>
            <p class="instruction-text">
                Enter withdrawal amount
            </p>
            <div>
                <form action="">
                    <input type="text" id="withdrawal-amount" placeholder="P">
                </form>
                <p>
                    Please note that this bank charges <span class="highlight">P18.00</span> for withdrawals from other local banks, and
                    <span class="highlight">P200</span> for international banks
                </p>
            </div>
            <a href="mobile-qr.php" class="button main fixed-action">Proceed</a>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>