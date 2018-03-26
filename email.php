<?php

if ((isset($_POST['email'])) && (isset($_POST['email'])) && (isset($_POST['message'])))  {
  
  //Email information
  $admin_email = "sales@peerlessventure.com";
  $email = $_POST['email'];
  $subject= "peerless web massage from".$_POST['name'];
  $message = $_POST['message'];
  //send email
  mail($admin_email, $subject, $message, "From:" . $email);
  header('Location: index.html');
  exit;
  
  }
  header('Location: index.html');
  exit;
?>