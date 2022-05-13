<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="terminal">
        <!-- Terminal Head -->
        <?php require 'includes/terminal/terminal-head.html' ?>

        <!-- Terminal Body -->
        <main id="terminal-body" class="body cardless welcome-screen with-constant-action">
            <div class="content full-screen-text">
                <h1>Welcome to THE BANK’S cardless transaction system!</h1>
                <p>
                    This allows you to transact with our ATMs without the need of an ATM card, and in a more secure environment
                    
                    All you need is your smartphone with THE BANK app!
                </p>
            </div>

            <div class="button-grid single">
                <!-- R4 -->            
                <div>
                    <img src="/images/term-left-pointer.svg" alt="">
                    <a href="cardless-qr.php" class="button main"><strong>Proceed</strong></a>
                    <img src="/images/term-right-pointer.svg" alt="">
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>