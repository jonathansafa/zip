<?php
// define variables and set to empty values
$nameErrClass = $emailErrClass = $messageErrClass = $errorMsg = "";
$name = $email = $message = "";
$success = $error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $sql = "INSERT INTO ENQUIRY (NAME, EMAIL_ID, MESSAGES) " .
                "VALUES('$name', '$email', '$message')";
        $conn->query($sql);
        $conn->close();


        //Send mail to all customer and site owner.
        $mail = new SendMail();

        $subject = 'Greating from zipcaptions.com';
        $user_tempate = 'Hi ' . $name . ',<br/><br/>' .
                'Thanks so much for submitting a ticket on our website. We usually respond in less than 1 day. So we\'ll be in touch shortly.<br/><br/>' .
                'If you want to get in touch immediately, chat with us on ower website... click on the bottom right Chat Logo and we\'ll be in touch in a matter of seconds!<br/><br/><br/>' .
                'Have a great day!';

        $mail->smtpMail($email, $name, $subject, $user_tempate);

        $subject = 'You get new customer inquiry!!!!';
        $user_tempate = 'Hello,<br/><br/>' .
                'Name    : ' . $name . '<br/><br/>' .
                'Email   : ' . $email . '<br/><br/>' .
                'Message : ' . $message . '<br/><br/><br/>' .
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

    <?php include_once 'head.php' ?>

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
                                <div class="contact-head-small-sub desk-view">at support@zipcaptions.com. We're all ears.</div>
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
                                <button type="submit" class="btn send-msg form-btn btn-default">SEND MESSAGE</button>
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
                            <div><img src="img/contact/chat-icon.png" width="140px"/></div>
                            <p class="option-p">Chat</p>
                        </div>
                        <div class="col">
                            <div><img src="img/contact/email-icon.png" width="140px"/></div>
                            <p class="option-p">hello@zipcaptions.com</p>
                        </div>
                        <div class="col">
                            <div><img src="img/contact/phone-icon.png" width="140px"/></div>
                            <p class="option-p">give us a call</p>
                        </div>
                    </div>
                </div>
            </section>
            <?php include_once './scripts.php'; ?>
        </div>
    </body>

</html>
