<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <?php require 'includes/terminal/top-border.html' ?>
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body account-selection">
            <span class="instruction-text">
                Please select account of which you wish to withdraw from
            </span>
            <div class="button-grid">
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="terminal-withdrawal-amount.php" class="button main"><strong>Savings</strong> <br> <span>123456789</span></a>
                </div>

                <div>
                    <a href="terminal-withdrawal-amount.php" class="button main"><strong>Savings</strong> <br> <span>987654321</span></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>

                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="terminal-withdrawal-amount.php" class="button main"><strong>Checking</strong> <br> <span>4567890123</span></a>
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>