<section>
    <section class="main-slider style-two">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <?php

            $sliderpram = array();
            $sliders = $core->getslider($sliderpram);
            $ie = 0;
            foreach ($sliders as $slider) {  ?>
                <div class="slide">
                    <img src="images/<?= $slider["image"] ?>" alt="<?= $slider["title" . $clang] ?>" />
                    <div class="decrepation-sl">
                        <div class="container">
                            <div class="content alternate">
                                <h1 class=""><span>Masalta</span>construction equipment egypt</h1>
                                <p class="title">
                                    <?= $slider["title" . $clang] ?>
                                </p>

                                <a class="thm-btn thm-bg" href="<?= $core->getPageUrl("about" . $plang) ?>" title="">About Us<i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </section>
</section>