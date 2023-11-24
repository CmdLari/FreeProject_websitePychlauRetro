<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/Favicon.ico">
    <link rel="stylesheet" type=text/css href="hello.css">
    <title>Larissa Pychlau</title>
</head>
<body>

<div class="toplayer">
    <img src="assets/toplayer.png" alt="Birds" style="transform: scale(1)">
</div>

<div class="box">

    <br>

    <a href="welcome.html"> <img src="assets/logo.png" alt="Logo" style="width: 65px; height: 90px; transform: scale(1)"></a>

    <h1>Larissa Pychlau</h1>

    <h2><a href="https://www.pychlau.com/design/" target="_blank">Design</a> |
        <a href="https://www.pychlau.com/photography/" target="_blank">Photography</a> |
        <a href="https://www.pychlau.com/illustration/" target="_blank">Illustration</a></h2>
</div>

<div class="box">
    <?php

    echo "Thank you for contacting me!";


    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $msg = $_POST["message"];
    $to = "larissapychlau@gmail.com";
    $subject = "Contact via Website";

    //headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From: <studio-lp@gmx.de>" . "\r\n";
    $headers .= "Cc: studio-lp@gmx.de" . "\r\n";

    echo (sprintf("<br><br><br><br>Name: %s <br><br> Email: %s <br><br> Date: %s <br><br> Message: %s <br><br>", $name, $email, $date, $msg));

    $contacts = fopen("contacts.txt", "a") or die("Unable to open file!");
    $towrite = "Name: $name \nEmail: $email \nDate: $date \nMessage: $msg\n\n";

    fwrite($contacts, $towrite);

    mail($to, $subject, $towrite, $headers)
    ?>

</div>


