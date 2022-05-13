<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body cardless welcome-screen with-constant-action">
            <div class="content full-screen-text">
                <h1>QR Code</h1>
                <p>
                    Please place the transaction QR Code from the app in front of the camera
                    
                    This allows us to verify your transaction
                </p>
            </div>

            <div class="button-grid">
                <!-- R4 -->
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="index.php" class="button secondary"><strong>End</strong></a>
                </div>
            
                <div>
                    <a href="cardless-transaction-completed.php" class="button main"><strong>Proceed</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>