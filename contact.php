<?php
// define variables and set to empty values
$nameErrClass = $emailErrClass = $messageErrClass = $errorMsg = "";
$name = $email = $message = "";
$success = $error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_us'])) {
    if (empty($_POST["name"])) {
        $nameErrClass = "error";
        $error = true;
    } else {
        $name = stripslashes($_POST["name"]);
    }
    if (empty($_POST["email_id"])) {
        $emailErrClass = "error";
        $error = true;
    } else {
        $email = stripslashes($_POST["email_id"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $messageErrClass = "error";
        $error = true;
    } else {
        $message = $_POST["message"];
    }

    if (!$error) {
        require './SendMail.php';
        require './db.php';

        //Insert data in database
        $sql = "INSERT INTO enquiry (NAME, EMAIL_ID, MESSAGES) " .
                "VALUES('$name', '$email', '$message')";
        $conn->query($sql);
        $conn->close();


        //Send mail to all customer and site owner.
        $mail = new SendMail();

        $subject = 'Getting in Touch - zipcaptions.com';
        $user_tempate = '<p style="color:#b4b4b2;border-bottom: dotted 1px; padding-bottom:20px;font-weight:normal;font-size:10px;">##- Please type your reply above this line -##</p>' .
                '<p style="color:black; font-weight:bold;font-size:18px;">Jonathan Safa <a href="https://zipcaptions.com" style="font-size:14px;font-weight:normal; color:black !important; text-decoration:none !important;">(zipcaptions.com)</a><br/><span style="font-size:12px;font-weight:normal; color:grey !important;font-weight:bold;">' . date(DATE_COOKIE) . '</span><br><br>' . '</p>' .
                'Hi ' . $name . ',<br/><br/>' .
                'Thanks so much for submitting a ticket on our website. We usually respond in less than 1 day. So we\'ll be in touch shortly.<br/><br/>' .
                'If you want to get in touch immediately, chat with us on our website... click on the bottom right Chat Logo and we\'ll be in touch in a matter of seconds!<br/><br/><br/>' .
                'Have a great day!' .
                '<p style="color:#b4b4b2;padding-bottom:20px;padding-top:50px;line-height:20px;font-weight:normal;font-size:10px;">This email is meant for only the intended recipient, and may be a communication privileged by law. If you received this email in error, any review, use, dissemination, distribution, or copying of this email is strictly prohibited - please notify us immediately of the error and please delete this message from your system. Thank you.</p>';

        $mail->smtpMail($email, $name, $subject, $user_tempate);

        $subject = 'You have new customer inquiry!!!!';
        $user_tempate = 'Hello,<br/><br/><br/>' .
                'Name    : ' . $name . '<br/><br/>' .
                'Email   : ' . $email . '<br/><br/>' .
                'Message : ' . $message . '<br/><br/><br/><br/>' .
                'Have a great day!';

        $mail->smtpMail('jonathan@zipcaptions.com', 'Jonathan', $subject, $user_tempate);



        $success = true;
        $error = false;
        $name = $email = $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="canonical" href="https://zipcaptions.com/contact" />

    <head>
        <meta name="description" content="We’d love to discuss how zipcaptions is the leader in closed captioning your videos.">
        <title>Contact Us</title>
        <?php include_once 'head.php' ?>
    </head>

    <body id="page-top">
        <link href="css/contacts.css" rel="stylesheet">
        <?php include_once 'sidebar-modal.php' ?>
        <div id="main-view">
            <?php include_once 'navbar.php' ?>
            <!-- Header -->
            <header class="contact_masthead masthead">
                <div class="container">
                    <div class="row intro-text">
                        <div class="col-md-12 col-sm-12 col-xs-12 pad-bottom">
                            <div class="contact-head-small">CONTACT US</div>
                            <div class="contact-head-big">Questions or comments?</div>
                            <div class="contact-head-big-sub">We'd love to hear from you.</div>
                            <div class="contact-sub-block">
                                <div class="contact-head-small-sub">Your questions and comment are important to us.</div>
                            </div>
                            <div class="faq-sub-block">
                                <div class="contact-head-small-sub desk-view">Contact our customer support team</div>
                                <div class="contact-head-small-sub desk-view">by submitting the form below or by emailing us</div>
                                <div class="contact-head-small-sub desk-view">at <a class="email-link" href='mail&#116;o&#58;%73%&#55;5pp&#111;r%7&#52;%&#52;&#48;&#122;i&#112;capt&#105;&#37;6F%6Es&#46;%&#54;3om'>support&#64;zipc&#97;ptio&#110;s&#46;co&#109;</a>. We're all ears.</div>
                                <div class="contact-head-small-sub mob-view">Contact our customer support team by submitting the form below or by emailing us at support@zipcaptions.com. We're all ears.</div> 
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- contact-form -->
            <section id="contact-form">
                <div class="container">
                    <?php
                    if ($success) {
                        ?>
                        <div class="alert alert-success">
                            <strong>Success!</strong> We'll be in touch shortly.
                        </div>
                    <?php } ?>
                    <?php
                    if ($error) {
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            if (!empty($errorMsg)) {
                                ?>
                                <?= $errorMsg ?>
                                <?php
                            } else {
                                ?>
                                <strong>Error!</strong> Please fill required details.
                            <?php }
                            ?>
                        </div>
                    <?php } ?>
                    <form class="form-horizontal" method="post">
                        <div class="row form-group">
                            <div class="col-md-6 col-xs-6 col-xs-12 mob-padd">
                                <input type="text" class="<?= $nameErrClass ?> form-control" name="name" id="name" placeholder="NAME" value="<?= $name ?>">
                            </div>
                            <div class="col-md-6 col-xs-6 col-xs-12">
                                <input type="email" class="<?= $emailErrClass ?> form-control" name="email_id" id="email_id" placeholder="EMAIL"  value="<?= $email ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 col-xs-12 col-xs-12">
                                <textarea  class="<?= $messageErrClass ?> form-control"  name="message" id="message" placeholder="MESSAGE" rows="10"><?= $message ?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 col-xs-12 col-xs-12">
                                <button type="submit" name="contact_us" class="btn send-msg form-btn btn-default">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
            <!-- contact-option -->
            <section id="contact-option">
                <div class="container">
                    <div class="row text-center">
                        <div class="col">
                            <a href="javascript:void(0)" onclick="openChat();"> <div><img src="<?= SITE_URL ?>/img/contact/chat-icon.png" width="140px"/></div>
                                <p class="option-p">Chat with Us</p>
                            </a> </div>


                        <div class="col"><a href='mail&#116;o&#58;%73%&#55;5pp&#111;r%7&#52;%&#52;&#48;&#122;i&#112;capt&#105;&#37;6F%6Es&#46;%&#54;3om'>
                                <div><img src="<?= SITE_URL ?>/img/contact/email-icon.png" width="140px"/></div>
                                <p class="option-p">&#115;upp&#111;rt&#64;zip&#99;a&#112;tions&#46;c&#111;&#109;</p>
                            </a>   </div>
                        <div class="col">  <a href="tel:9096825815">
                                <div><img src="<?= SITE_URL ?>/img/contact/phone-icon.png" width="140px"/></div>
                                <p class="option-p">Give Us a Call</p>
                            </a> </div>
                    </div>
                </div>
            </section>


            <?php include_once 'footer.php'; ?>

            <?php include_once './scripts.php'; ?>
        </div>
    </body>

</html>
