<?php
// define variables and set to empty values
$emailErrClass = $errorMsg = "";
$email = "";
$success = $error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['footer-submit'])) {

    if (empty($_POST["footer_email"])) {
        $emailErrClass = "error";
        $error = true;
    } else {
        $email = stripslashes($_POST["footer_email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg = "Invalid email format";
        }
    }


    if (!$error) {
        require './SendMail.php';
        require './db.php';

//        //Insert data in database
//        $sql = "INSERT INTO enquiry (NAME, EMAIL_ID, MESSAGES) " .
//                "VALUES('$name', '$email', '$message')";
//        $conn->query($sql);
//        $conn->close();
        //Send mail to all customer and site owner.
        $mail = new SendMail();

        $subject = 'Getting in Touch - zipcaptions.com';
        $user_tempate = '<p style="color:#b4b4b2;border-bottom: dotted 1px; padding-bottom:20px;font-weight:normal;font-size:10px;">##- Please type your reply above this line -##</p>' .
                '<p style="color:black; font-weight:bold;font-size:18px;">Jonathan Safa <a href="https://zipcaptions.com" style="font-size:14px;font-weight:normal; color:black !important; text-decoration:none !important;">(zipcaptions.com)</a><br/><span style="font-size:12px;font-weight:normal; color:grey !important;font-weight:bold;">' . date(DATE_COOKIE) . '</span><br><br>' . '</p>' .
                'Hi,<br/><br/>' .
                'Thanks so much for submitting a ticket on our website. We usually respond in less than 1 day. So we\'ll be in touch shortly.<br/><br/>' .
                'If you want to get in touch immediately, chat with us on our website... click on the bottom right Chat Logo and we\'ll be in touch in a matter of seconds!<br/><br/><br/>' .
                'Have a great day!' .
                '<p style="color:#b4b4b2;padding-bottom:20px;padding-top:50px;line-height:20px;font-weight:normal;font-size:10px;">This email is meant for only the intended recipient, and may be a communication privileged by law. If you received this email in error, any review, use, dissemination, distribution, or copying of this email is strictly prohibited - please notify us immediately of the error and please delete this message from your system. Thank you.</p>';

        $mail->smtpMail($email, '', $subject, $user_tempate);

        $subject = 'You have new customer inquiry!!!!';
        $user_tempate = 'Hello,<br/><br/><br/>' .
                'Email   : ' . $email . '<br/><br/>' .
                'Have a great day!';

        $mail->smtpMail('jonathan@zipcaptions.com', 'Jonathan', $subject, $user_tempate);

        $success = true;
        $error = false;
        $email = "";
    }
}
?>

<!-- Complince -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 pad-bottom">
                <div class="footer-head">About</div>
                <div class="footer-head-text"><a href="./faq">FAQ</a></div>
                <div class="footer-head-text"><a href="#">Term of Service</a></div>
                <div class="footer-head-text"><a href="#">Privacy Policy</a></div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 pad-bottom">
                <div class="footer-head">USERS</div>
                <div class="footer-head-text"><a href="#">Sign In</a></div>
                <div class="footer-head-text"><a href="tel:800-495-0251">Support-Call</a></div>
                <div class="footer-head-text"><a href='m&#97;&#105;l&#116;o&#58;su%70&#37;70o%72t&#64;zip%63%&#54;1p%7&#52;%69on&#37;&#55;3&#46;c&#111;%6D'>Support-Email</a></div>
                <div class="footer-head-text"><a href="javascript:void(0)" onclick="openChat();">Support-Chat</a></div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 ">
                <div class="footer-right-head">Stay in the loop.</div>
                <div class="footer-right-head-text">Join our subscribers and get </div>
                <div class="footer-right-head-text">quarterly updates on everything zipcaptions.com.</div>
                <div class="footer-right-head-text">No spam, we promise.</div>
                <form class="form-inline footer-form" method="post" action="<?= $_SERVER['PHP_SELF'] ?>#footer_email">
                    <div class="form-group col-md-8 col-xs-8 col-sm-8">
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
                    </div>
                    <div class="form-group col-md-8 col-xs-8 col-sm-8">
                        <input type="email" class="<?= $nameErrClass ?> form-control" id="footer_email" name="footer_email" placeholder="Enter email address" value="<?= $email ?>">
                    </div>
                    <input type="submit" name="footer-submit" class="btn form-btn btn-default col-md-4 col-xs-4 col-sm-4" value="SIGN UP"/>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="footer-sub">
    <div  class="container">
        <div class="text-center">Our mission is to provideo quality services to help fund the Gospel. Find our more  <a href="https://nejattv.org">here</a></div>
    </div>
</section>


