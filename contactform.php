<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'poojajagtap181@gmail.com';

  $email_subject = 'New Form Submission';

  $email_body = "USER NAME: $name.\n". "USER EMAIL: $visitor_email.\n". "USER MESSAGE: $message.\n";

  $to = "jagtapaarti85@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");
?>
