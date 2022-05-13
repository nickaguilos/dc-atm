<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <?php require 'includes/terminal/top-border.html' ?>
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body withdrawal-amount-input with-constant-action">
            <span class="instruction-text">
                Enter withdrawal amount
            </span>
            <div class="content">
                <form action="">
                    <input type="text" id="withdrawal-amount">
                </form>
                <p>
                    Please note that this bank charges <span class="highlight">P18.00</span> for withdrawals from other local banks, and
                    <span class="highlight">P200</span> for international banks
                </p>
            </div>
            <div class="button-grid">
                <!-- R4 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="terminal-transaction-selection.php" class="button secondary"><strong>Back</strong></a>
                </div>
                
                <div>
                    <a href="terminal-withdrawal-completed.php" class="button main"><strong>Proceed</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>