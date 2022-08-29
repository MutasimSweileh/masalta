<?php if (isset($_POST["subscribe"])) {
    $text =  $_POST["name"] . "<br>" . $_POST["email"];
    require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.sherktk.net";

    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Port = 587;
    $mail->Username = "mail@sherktk.net";
    $mail->Password = "JCrS%^)qc!eH";

    $mail->From = "mail@sherktk.net";

    $mail->FromName = $name;
    $info_media["code"] = "email";
    $contents = $core->getinfo_media($info_media);
    $emaills = $contents[0]["link"];
    $mail->AddAddress($emaills);
    //$mail->AddReplyTo("mail@mail.com");
    $mail->IsHTML(true);
    $mail->Subject = "Subscribe";
    $mail->Body = $text;

    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $core->addemail(array("email" => $_POST["email"]));
    if ($mail->Send()) {
?>

        <script type="text/javascript">
            alert("Thank you !!");
        </script>

    <?php
    } else { ?>
        <script type="text/javascript">
            alert("<?= trim(htmlspecialchars_decode(str_replace("</p>", " ", str_replace("<p>", " ", $mail->ErrorInfo)))) ?>");
        </script>
<?php  }
} ?>

<div class="footer">

    <div class="footer-static-middle">
        <div class="container">
            <div class="footer-logo-wrap pt-20 pb-15">
                <div class="row">
                    <!-- Begin Footer Logo Area -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-logo">
                            <img src="images/logo.png" alt="Footer Logo">
                        </div>


                        <div class="footer-block">
                            <ul class="social-link list-unstyled">
                                <li class="twitter">
                                    <a href="<?= getValue("Twitter") ?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="<?= getValue("Facebook") ?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="<?= getValue("Youtube") ?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="<?= getValue("Instagram") ?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Footer Logo Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-4 col-md-3 col-sm-6">
                        <div class="footer-block">
                            <h3 class="footer-block-title"><?= plang('روابط سريعة', 'quick links') ?></h3>
                            <ul class="qq-links list-unstyled">
                                <li><a href="<?= $core->getPageUrl("index" . $plang) ?>" title=""><?= getTitle("index" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("about" . $plang) ?>" title=""><?= getTitle("about" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("products" . $plang) ?>" title=""><?= getTitle("products" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("services" . $plang) ?>" title=""><?= getTitle("services" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("gallery" . $plang) ?>" title=""><?= getTitle("gallery" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("video" . $plang) ?>" title=""><?= getTitle("video" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("order" . $plang) ?>" title=""><?= getTitle("order" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("contact" . $plang) ?>" title=""><?= getTitle("contact" . $plang) ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Block Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-4">
                        <!-- Begin Footer Newsletter Area -->
                        <div class="footer-newsletter">
                            <div class="footer-block">
                                <h3 class="footer-block-title"><?= plang('النشرة الإخبارية', 'newsletter') ?></h3>
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" novalidate="">

                                    <p><?= plang('تابعنا للحصول على آخر الأخبار والتحديثات', 'Follow us to get the latest news and updates') ?></p>

                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form form-group">
                                            <input id="mc-email" name="email" type="email" autocomplete="off" placeholder="<?= plang("أدخل بريدك الإلكتروني", "Enter your email") ?>">
                                            <button class="btn thm-btn thm-bg" type="submit" name="subscribe" value="subscribe" id="mc-submit"><?= plang('الإشتراك', 'Subscribe') ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Footer Newsletter Area End Here -->
                    </div>
                    <!-- Footer Block Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Middle Area End Here -->
    <!-- Begin Footer Static Bottom Area -->
    <div class="footer-static-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright copy-txt">
                        <span><a target="_blank" href="#">Copyright© 2022 all rights reserved Erasoft</a></span>
                    </div>
                    <!-- Copyright Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Bottom Area End Here -->
</div>




</main>
<!-- Main Wrapper -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/perfect-scrollbar.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particle-int.js"></script>
<script src="js/custom-scripts.js"></script>
<script src="js/venobox.min.js"></script>
<script>
    jQuery(document).ready(function($) {

        $('.venobox,.image-popup-vertical-fit').venobox({
            bgcolor: '',
            framewidth: '500px', // default: ''
            spinner: 'cube-grid', // default: ''
            frameheight: '400px', // default: ''
            overlayColor: 'rgba(6, 12, 34, 0.85)',
            closeBackground: '',
            closeColor: '#fff',
            titleattr: 'data-title',
            share: ['facebook', 'twitter', 'download'] // default: []
        });
    });
</script>
</body>

</html>