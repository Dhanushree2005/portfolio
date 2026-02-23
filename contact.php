<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "yourmail@gmail.com";   // Change this
    $subject = "Portfolio Contact Message";

    $body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body);

    echo "<script>alert('Message Sent Successfully!'); window.location='index.html';</script>";
}

?>