<?php
$pagg = 1;
include "inc.php";
/*
$lang : get form  inc.php  = arabic || english;
$plang : get form  inc.php for  php file name  = arabic || "";
$clang : get form  inc.php for column name  =  _arabic || "" ;
*/
?>
<section>
    <div class="w-100 about-swe position-relative">
        <div class="container">
            <div class="about-wrap w-100">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-12">
                        <div class="about-desc w-100">
                            <h2 class="mb-0"><span class="thm-clr d-block">About us</span>Masalta construction equipment egypt </h2>
                            <p class="mb-0"> <?= getValue("home_text", $lang) ?></p>
                        </div>
                        <div class="serv-wrap w-100">
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="serv-box w-100">
                                        <i class="thm-clr flaticon-builder"></i>
                                        <div class="serv-box-inner">
                                            <h3 class="mb-0">
                                                <a href="#" title="">Professional <br> Engineers</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="serv-box w-100">
                                        <i class="thm-clr flaticon-car-parts"></i>
                                        <div class="serv-box-inner">
                                            <h3 class="mb-0">
                                                <a href="#" title="">high quality <br> equipment</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-6">
                                    <div class="serv-box w-100">
                                        <i class="thm-clr flaticon-architect"></i>
                                        <div class="serv-box-inner">
                                            <h3 class="mb-0">
                                                <a href="#" title="">competitive <br> prices</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <a class="thm-btn thm-bg" href="<?= $core->getPageUrl("about" . $plang) ?>" title="">About Us<i class="flaticon-arrow-pointing-to-right"></i></a>



                        </div>
                        <!-- Services Wrap -->
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="about-image position-relative w-100">
                            <span>23<sup>+</sup><i class="d-block">Experience</i></span>
                            <img class="img-fluid w-100" src="images/about.jpg" alt="About Image 1" />
                            <a class="rounded-circle spinner" href="<?= getValue("video") ?>" data-fancybox="" title=""><i class="flaticon-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="prod-apo w-100 position-relative">


        <div class="container">


            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <h3 class="mb-0">Our Products</h3>
                </div>
            </div>



            <div class="serv-wrap text-center w-100">
                <div class="row res-caro2">
                    <?php
                    $products = $core->getproducts(array("special" => 1));
                    if ($products)
                        for ($i = 0; $i < count($products); $i++) {
                            if ($products[$i]["level"])
                                continue;
                            $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang);

                    ?>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <a href="<?= $link ?>">
                                <div class="serv-box2 position-relative w-100" style="background-image: url(images/<?= $products[$i]["image"] ?>);">
                                    <img src="images/<?= $products[$i]["image"] ?>">
                                    <div class="serv-box-inner">
                                        <span class="d-block"><?= $products[$i]["name" . $clang] ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <? } ?>

                </div>
            </div>
            <!-- Services Wrap -->
            <div class="facts-wrap thm-layer opc1 text-center position-relative overflow-hidden brd-rd5 w-100">
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
            <!-- Facts Wrap -->
        </div>
    </div>
</section>



<section>
    <div class="w-100 pt-100 paralx-70 blue-layer opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(images/parallax1.jpg);"></div>
        <div class="particles-js" id="prtcl"></div>
        <div class="container">
            <div class="sec-title w-100">
                <div class="sec-title-inner d-inline-block">
                    <h3 class="mb-0">Our Gallery</h3>
                </div>
            </div>
        </div>
        <div class="proj-wrap px-70 w-100">
            <div class="row proj-caro">
                <?php
                $prodpram = array();
                $products2 = $core->getmGallery($prodpram);
                if ($products2 != null)
                    for ($ii = 0; $ii < count($products2); $ii++) {
                ?>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="proj-box position-relative w-100">
                            <div class="proj-thumb overflow-hidden w-100"><a href="images/<?= $products2[$ii]['image'] ?>" data-fancybox="gallery-outet" title="<?= $products2[$ii]['name' . $clang] ?>"><img class="img-fluid w-100" src="images/<?= $products2[$ii]['image'] ?>" alt="1"></a></div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div><!-- Projects Wrap -->
    </div>
</section>

<section>
    <div class="w-100 faq-ser position-relative">
        <div class="container">
            <div class="sec-title w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">OUR FAQ</span>
                    <h3 class="mb-0">Freequently Ask Questions</h3>
                </div>
            </div>
            <div class="faq-wrap w-100">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 order-md-1">
                        <img class="img-fluid" src="images/KG_Img_6.png" alt="Faq Mockup" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="toggle w-100" id="toggle">
                            <div class="toggle-item w-100">
                                <h4 class="mb-0"><span>01.</span>How can I order spare parts?</h4>
                                <div class="toggle-content w-100">
                                    <p class="mb-0">


                                        - Masalta could offer fast moving spare partslist

                                        - Customer can select the parts they need inMasalta’s parts manuals

                                        - Customer to provide machine’s model no.,part’s no., part’s name, and qty, then Masalta will issue P/I to customer

                                    </p>
                                </div>
                            </div>

                            <div class="toggle-item w-100">
                                <h4 class="mb-0"><span>03.</span>Which engine should I select?</h4>
                                <div class="toggle-content w-100">
                                    <p class="mb-0">


                                        - You may choose according to your ownexperience

                                        - You may choose to your local market’spreference

                                        - You may choose by studying the differentspecifications of engines

                                        - You may choose according to differentservices provided by the engine companies in your local market

                                        - Masalta could offer you suggestionsaccording to its knowledge in your market

                                    </p>
                                </div>
                            </div>
                            <div class="toggle-item w-100">
                                <h4 class="mb-0"><span>04.</span>How can I be an exclusive dealer?</h4>
                                <div class="toggle-content w-100">
                                    <p class="mb-0">


                                        - An exclusive dealer must firstly be aMasalta dealer

                                        - Masalta will calculate the dealer’s salesvolume in history, and estimate its growth potential

                                        - Masalta will estimate the dealer’s abilityin sales, service, and brand publicity

                                        - Both parties confirm annual volume targetsand brand publicity plans

                                        - Both parties sign the exclusive agreement

                                        - Exclusive delear is not allowed to selllight construction machines under other Chinese brands

                                    </p>
                                </div>
                            </div>
                            <div class="toggle-item w-100">
                                <h4 class="mb-0"><span>05.</span>How can I be a dealer?</h4>
                                <div class="toggle-content w-100">
                                    <p class="mb-0">


                                        Masalta dealer is expected to have:

                                        - Physical stores

                                        - Sales team

                                        - Capability to provide customer service

                                        - Adequate stocks of spare parts

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faq Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-100 blue-layer opc85 position-relative">
        <div class="fixed-bg" style="background-image: url(images/parallax3.jpg);"></div>
        <div class="particles-js" id="prtcl4"></div>
        <div class="container">
            <div class="banner-wrap position-relative text-center w-100">
                <div class="banner-inner d-inline-block">
                    <h2 class="mb-0">Masalta construction equipment egypt </h2>
                    <p class="mb-0">A leading Egyptian company in the field of selling, exporting and manufacturing construction equipment</p>
                    <a class="thm-btn thm-bg" href="<?= $core->getPageUrl("about" . $plang) ?>" title="">Read More<i class="flaticon-arrow-pointing-to-right"></i></a>
                </div>
            </div>
            <!-- Banner Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 nsae-blog position-relative">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <h3 class="mb-0">Our News</h3>
                </div>
            </div>
            <div class="blog-wrap w-100">
                <div class="row post-caro">
                    <?php
                    $products = $core->getevents(array("special" => 1));
                    if ($products)
                        for ($i = 0; $i < count($products); $i++) {
                            if ($products[$i]["level"])
                                continue;
                            $date = getDateTime($products[$i]["date"], $lang);
                    ?>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="post-box w-100 text-center">
                                <div class="post-img overflow-hidden w-100">
                                    <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><img class="img-fluid w-100" src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>" /></a>
                                </div>
                                <div class="post-info w-100">
                                    <h3 class="mb-0"><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><?= $products[$i]["name" . $clang] ?></a></h3>

                                    <div class="post-info-bottom d-flex flex-wrap w-100">

                                        <ul class="post-meta mb-0 list-unstyled d-inline-flex">
                                            <li><i class="far fa-calendar-alt"></i><?= $date[0] ?>, <?= $date[1] ?> <?= $date[2] ?></li>
                                        </ul>
                                        <span class="d-inline-block"><i class="flaticon-arrow-pointing-to-right"></i><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title="">Read More</a></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>

                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="w-100 clients-ser position-relative">
        <div class="container">


            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <h3 class="mb-0">Our clients</h3>
                </div>
            </div>



            <div class="clients-wrap w-100">
                <div class="owl-carousel client-slider">


                    <? $variable = $core->getData("clients", ["active" => 1]);
                    foreach ($variable as $k => $v) { ?>
                        <div class="client-box w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="images/<?= $v["image"] ?>" alt="Client Image 1" /></a>
                        </div>
                    <? } ?>

                </div>
            </div>
            <!-- Clients Wrap -->
        </div>
    </div>
</section>

<?php
include "inc/footer.php";
?>