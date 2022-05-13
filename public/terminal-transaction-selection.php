<!-- Transaction Selection Screen -->

<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body transaction-selection">
            <span class="instruction-text">
                Select Transaction Type
            </span>

            <div class="button-stack">
                <!-- Withdrawal -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="terminal-withdrawal-account-selection.php" class="button main">Withdrawal</a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
                <!-- Balance Check -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="" class="button main">Balance Check</a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
                <!-- Deposit -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="" class="button main">Deposit</a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
                <!-- Cardless -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="cardless-welcome-screen.php" class="button secondary">Cardless Transaction</a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>