<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="mobile">
        <!-- Mobile Head -->
        <?php require 'includes/mobile/mobile-head.html' ?>

        <!-- Body -->
        <main id="mobile-body" class="body homescreen">
            <a href=""><img src="/images/back-arrow.svg" alt="&lsaquo;"></a>
            <p class="instruction-text">
                Please select account of which you wish to withdraw from
            </p>
            <div class="scroller">
                <div class="scrollitem card account">
                    <span class="title">Savings</span> <br>
                    <span class="account-num">123456789</span> <br>
            
                    <span class="amount">P 1,373,000.00</span>
            
                </div>
            
                <div class="scrollitem card account">
                    <span class="title">Savings</span> <br>
                    <span class="account-num">456789123</span> <br>
            
                    <span class="amount">P 72,350.00</span>
            
                </div>
            
                <div class="scrollitem card account">
                    <span class="title">Checking</span> <br>
                    <span class="account-num">987654321</span> <br>
            
                    <span class="amount">P 25,350.00</span>
            
                </div>
            </div>
            <a href="mobile-withdrawal-amount.php" class="button main fixed-action">Proceed</a>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>