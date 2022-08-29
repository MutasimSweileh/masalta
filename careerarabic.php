<?
$pagg = 2;
include  "inc.php";
$id = isv("id");
if (isv("send")) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($imageFileType != "pdf") {
        $contactmessage = plang("عذرا ، يسمح فقط بملفات PDF.", "Sorry, only PDF files are allowed.");
    } else {
        unset($_POST["send"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            $_POST["cv"] = $PUr . $target_file;
        $text = '<strong>' . getTitle($name) . '</strong> : <br>';
        $text .= '<style>td, th {
     border: 1px solid;
         padding: 5px;
 }</style><table style="width: 100%;direction: ltr;
 text-align: left;">
 ';
        $_POST["career"] = $core->getData("job_opportunities", "where id=" . $id)["name" . $clang];
        foreach ($_POST as $x => $v) {
            $text .= '<tr>
         <td>' . ucfirst($x) . '</td>
         <td>' . $v . '</td>
     </tr>';
        }
        $text .= '</table>';
        require("class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "mail.redex-eg.com";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->Username = "mail@redex-eg.com";
        $mail->Password = "i&xRkDl~z1)6";
        $mail->From = "mail@redex-eg.com";
        $mail->FromName = $alt;
        $info_media["code"] = "email";
        $contents = $core->getinfo_media($info_media);
        $emaills = $contents[0]["link"];
        $mail->AddAddress($emaills);
        $mail->IsHTML(true);
        $mail->Subject = $name;
        $mail->Body = $text;
        if (!$mail->Send()) {
            $core->SqlIn("career_form", $_POST);
            $contactmessage = plang("فشل في إرسال الرسالة الرجاء إعادة الإرسال لاحقًا", "Failed to send message Please resend later");
        } else {
            $contactmessage = plang("شكرا لك. سوف نتصل بك في غضون 24 ساعة", "Thank you. We will contact you within 24 hours");
        }
    }
}
?>
<style>
    section.job_section {
        margin-bottom: 70px;
    }
</style>






<?
$prodpram = array("active" => 1);
if ($id)
    $prodpram = array("id" => $id);
$products = $core->getData("job_opportunities", $prodpram);

if (!$id) {
?>

    <section class="latest-blog latest_blog_area blog-section blog-wrapper">

        <div class="container">

            <div class="row latest_blog blog-grids clearfix ">

                <?php

                if ($products != null)

                    for ($i = 0; $i < count($products); $i++) {

                        $date = getDateTime($products[$i]["date"], $lang);

                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item blog_card">
                            <div class="post-img"> <img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>">
                                <div class="posted_on" style="    border-radius: 5px;"> <span class="date"><?= $date[0] ?></span> <span class="month"><?= $date[1] ?></span> </div>
                            </div>
                            <div class="post-detail">
                                <h5><a href="career<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><?= $products[$i]["name" . $clang] ?></a></h5>

                                <div class="description">

                                    <a style="width: 100%;
    border-radius: 3px;" href="career<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" class="theme-button-one bttn color-one" data-text=" <?= plang("التقدم للوظيفة", "Apply to Job") ?>"><span> <?= plang("التقدم للوظيفة", "Apply to Job") ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>
<? } else { ?>
    <section class="job_section">
        <div class="container">
            <div class="row contact_info">
                <?php if ($contactmessage) { ?>
                    <div class="col-md-12" style="text-align: center">
                        <?= $contactmessage ?>
                    </div>
                <?php } ?>
                <div class="col-12 contact_form">

                    <h5 style="color: red">
                    </h5>
                    <div class=" justify-content-center qdash-from">
                        <p>
                            <?= $products[0]["description" . $clang] ?>
                        </p>
                        <h3 class="d-block w-100 ar-font "><?= plang("من فضلك املأ البيانات الآتية للتقدم لوظيفة...", "Please fill in the following information to apply for a job...") ?> </h3>

                        <form action="" method="POST" id="contactForm" enctype="">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="contact-page__input-box">
                                        <label for="name"><?= plang("الاسم بالكامل", "Name") ?> <span style="color: #ff0000"> * </span></label>
                                        <input type="text" name="fullname" id="name" class="form-control col-md-9 col-12" required="required">
                                        <div class="contact_error offset-md-3 col-md-9 col-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="contact-page__input-box">
                                        <label for="name"><?= plang("الجوال", "Mobile") ?> <span style="color: #ff0000"> * </span></label>
                                        <input type="text" name="mobile" id="mobile" class="form-control col-md-9 col-12" required="required">
                                        <div class="contact_error offset-md-3 col-md-9 col-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="contact-page__input-box">
                                        <label for="name"><?= plang("البريد الالكتروني", "Email") ?> <span style="color: #ff0000"> * </span></label>
                                        <input type="email" name="email" id="email" class="form-control col-md-9 col-12" required="required">
                                        <div class="contact_error offset-md-3 col-md-9 col-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="contact-page__input-box">
                                        <label for="name"><?= plang("السيرة الذاتية", "CV") ?> <span style="color: #ff0000"> * </span>(PDF Only)</label>
                                        <input type="file" id="cv" name="cv" class="form-control col-md-9 col-12">
                                        <div class="contact_error offset-md-3 col-md-9 col-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="contact-page__input-box">
                                        <label for="name"><?= plang("معلومات اضافية", "additional information") ?></label>
                                        <textarea id="message" name="message" class="form-control col-md-9 col-12" rows="3"></textarea>
                                        <div class="contact_error offset-md-3 col-md-9 col-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 text-center mx-auto">
                                    <div class="form-group contact_div">
                                        <div>
                                            <button type="submit" name="send" value="send" id="send" class="thm-btn contact-page__btn theme-button-one cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-skincolor" required="required"><?= plang("أرســـال", "Send") ?></button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? } ?>


<?php include "inc/footer.php" ?>