<?
$pagg = 2;
include  "inc.php";
?>



<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <div class=" about_row">

            <div class="subtittle">
                <h2><?= $pageTitle ?></h2>
            </div>
            <div class="who_we_area col-md-12 col-sm-12 text che-have">
                <p></p>
                <p><?= getValue("about", $lang) ?></p>

            </div>







        </div>
    </div>
</section>
<!-- End About Us Area -->
<section>
    <div class="w-100 thm-layer opc1 overflow-hidden position-relative">
        <div class="container">
            <div class="facts-wrap shadow-none text-center w-100">
                <div class="parallax-bg zoom-anim back-blend-multiply patern-bg thm-bg" style="background-image: url(images/pattern-bg1.png);"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="fact-box w-100">
                            <h2 class="mb-0"><span class="counter"><?= getValue('experience_count') ?></span><sup>+</sup></h2>
                            <h4 class="mb-0">Experience</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="fact-box w-100">
                            <h2 class="mb-0"><span class="counter"><?= getValue('Clients') ?></span><sup>+</sup></h2>
                            <h4 class="mb-0">Our clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="fact-box w-100">
                            <h2 class="mb-0"><span class="counter"><?= getValue('Employed') ?></span><sup>+</sup></h2>
                            <h4 class="mb-0">Works Employed</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="fact-box w-100">
                            <h2 class="mb-0"><span class="counter"><?= getValue('Products') ?></span><sup>+</sup></h2>
                            <h4 class="mb-0">Our Products</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "inc/footer.php" ?>