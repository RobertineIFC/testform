<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
?>
<?php
  $to = "alvar.jolin@gmail.com";
  $subject = "Form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  mail($to, $subject, $body, $headers);
?>
