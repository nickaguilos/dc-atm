<?php require 'includes/terminal/dochead.html' ?>

<body>
    <div class="mobile">
        <!-- Mobile Head -->
        <?php require 'includes/mobile/mobile-head.html' ?>

        <!-- Body -->
        <main id="mobile-body" class="body homescreen">
            <a href="mobile-homescreen.php"><img src="/images/back-arrow.svg" alt="&lsaquo;"></a>
            <p class="instruction-text">
                ATM Locator
            </p>
            
            <!-- Map embed -->
            <div class="map">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=ortigas&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://123movies-to.org">123movies</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }
                        </style><a href="https://www.embedgooglemap.net"></a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/frontend.js"></script>
</body>

</html>