<?php
// $to = "somebody@example.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: webmaster@example.com";

// mail($to,$subject,$txt,$headers);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom Mail</title>
</head>
<body>
    <form action="email.php" method="POST">
        To: <input type="email" name="tomail" placeholder="Sender Email" required>
        Subject: <input type="text" name="subject" placeholder="Subject" required>
        Message: <textarea name="message" id="" cols="30" rows="2" placeholder="Message"></textarea>
        From: <input type="email" name="frommail" placeholder="Your Email" required>

        <input type="button" value="Send">
    </form>


    <?php

        $to = $_POST['tomail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $from = $_POST['frommail'];
        $header = "From: $from";

        mail($to , $subject , $message , $header)


    ?>
</body>
</html>