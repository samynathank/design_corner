<?php

$error = $message = '';
// require 'PHPMailer/PHPMailerAutoload.php';
// ini_set('SMTP', 'smtp.gmail.com');
// ini_set('smtp_port', 25);

if (isset($_POST['action']) && $_POST['action'] == 'mail_send') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $subject =  "Enquiry _ Customer _ ( " . $name . " ) ";
    $mail_message .= "Name : " . $name . " \n ";
    $mail_message .= "Email : " . $email . " \n ";
    $mail_message .= "Phone : " . $phone . " \n ";
    $mail_message .= $_POST['message'];

    $mail_message = wordwrap($mail_message);

    $sendMail = mail($email, $subject, $mail_message);

    if ($sendMail) {
        $message = 'send';
    } else {
        $error = "error";
    }

    // $to      = 'vnithyanandhan55@gmail.com';
    // $subject = 'the subject';
    // $message = 'hello';
    // $headers = 'From: webmaster@example.com' . "\r\n" .
    //     'Reply-To: webmaster@example.com' . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();


    // if (mail($to, $subject, $message, $headers)) {
    //   echo "Email successfully sent to $to_email...";
    // } else {
    //   echo "Email sending failed...";
    // // }
    // // header("location:index.php?file=contact");

    // $mail = new PHPMailer;

    // // $name = $_POST['name'];
    // $email = $_POST['email'];
    // // $phone = $_POST['phone'];
    // // $message = $_POST['message'];

    // $mail->SMTPDebug = 4;                               // Enable verbose debug output

    // $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // $mail->Username = 'vnithyanandhan55@gmail.com';                 // SMTP username
    // $mail->Password = '';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to

    // $mail->setFrom('from@example.com', 'Mailer');
    // $mail->addAddress('vnithyanandhan55@gmail.com');     // Add a recipient
    // // //$mail->addAddress('ellen@example.com');               // Name is optional
    // // //$mail->addReplyTo('info@example.com', 'Information');
    // // //$mail->addCC('cc@example.com');
    // // //$mail->addBCC('bcc@example.com');

    // // // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // // // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    // $mail->isHTML(true);                                  // Set email format to HTML

    // $mail->Subject = 'DC mail';
    // $mail->Body    = 'Name:' . $name . 'Email:' . $email . 'Phone:' . $phone . 'Subject:' . $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // if (!$mail->send()) {
    //     $error =  'Mailer Error: ' . $mail->ErrorInfo;
    // } else {
    //     $message = 'Message has been sent';
    // }
} else {
    $message = '';
    $error = "error";
}
echo json_encode(array("msg" => $message, "error" => $error));
