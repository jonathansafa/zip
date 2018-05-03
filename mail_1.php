<?php
require './SendMail.php';

$mail = new SendMail();

$mail->smtpMail('godhanihaitik@gmail.com', 'Haitik', 'Nice one', 'Msg Body');

