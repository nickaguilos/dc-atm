<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body account-selection">
            <span class="instruction-text">
                Select withdrawal amount
            </span>
            <div class="button-grid">
                <!-- R1 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="" class="button main"><strong>500</strong></a>
                </div>

                <div>
                    <a href="" class="button main"><strong>1000</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>

                <!-- R2 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="" class="button main"><strong>2000</strong></a>
                </div>

                <div>
                    <a href="" class="button main"><strong>5000</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>

                <!-- R3 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="" class="button main"><strong>10000</strong></a>
                </div>

                <div>
                    <a href="" class="button main"><strong>20000</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>

                <!-- R4 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="terminal-transaction-selection.php" class="button secondary"><strong>Back</strong></a>
                </div>
                
                <div>
                    <a href="terminal-withdrawal-amount-input.php" class="button main"><strong>Other Amount</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>