<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="mobile">
        <!-- Mobile Head -->
        <?php require 'includes/mobile/mobile-head.html' ?>

        <!-- Body -->
        <main id="mobile-body" class="body homescreen">
            <h1>
                Good day! Here are the latest updates for your account
            </h1>

            <div class="scroller">
                <div class="scrollitem card account">
                    <span class="title">Savings</span> <br>
                    <span class="account-num">123456789</span> <br>

                    <span class="amount">P 1,373,000.00</span>

                    <a href="">Transact</a>
                </div>

                <div class="scrollitem card account">
                    <span class="title">Savings</span> <br>
                    <span class="account-num">456789123</span> <br>
                
                    <span class="amount">P 72,350.00</span>
                
                    <a href="">Transact</a>
                </div>

                <div class="scrollitem card account">
                    <span class="title">Checking</span> <br>
                    <span class="account-num">987654321</span> <br>
                
                    <span class="amount">P 25,350.00</span>
                
                    <a href="">Transact</a>
                </div>
            </div>

            <div class="loan-update">
                <span class="">Car Loan Due On <span class="highlight">June 2, 2022</span></span> <br>
                <div>
                    <span class="amount">P8,990.00</span>
                    <a href="" class="button secondary">Pay</a>
                </div>
            </div>

            <a href="mobile-cardless-welcome.php" class="button main fixed-action">Make A Transaction</a>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>