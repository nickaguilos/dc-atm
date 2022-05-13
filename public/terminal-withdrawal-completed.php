<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <?php require 'includes/terminal/top-border.html' ?>
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body with-constant-action">
            <div class="success-message">
                <h1>Transaction Completed</h1>
                <span>Please get your cash and transaction receipt</span>
            </div>
            <div class="button-grid">
                <!-- R4 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="index.php" class="button secondary"><strong>End</strong></a>
                </div>
                
                <div>
                    <a href="terminal-transaction-selection.php" class="button main"><strong>New</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>