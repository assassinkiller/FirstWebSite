<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$EmailName = $_POST['PersonEmail'];


  require_once 'vendor/autoload.php';

  $m = new PHPMailer(true);
  $m->isSMTP();
  $m->SMTPAuth = true;
  $m->SMTPDebug = 2;
  $m->Host = 'smtp.gmail.com';
  $m->Username = 'cadenanddylan@gmail.com';
  $m->Password= 'dylancaden';
  $m->SMTPSecure = 'tls';
  $m->Port = 587;

  $m->From = 'cadenanddylan@gmail.com';
  $m->FromName = 'Caden Livingston';
  $m->addReplyTo('cadenanddylan@gmail.com', 'Reply Address');
  $m->addAddress($EmailName, 'Random Person');


  $m->subject = 'Test';
  $m->Body= 'This is the body';
  $m->AltBody= 'This is the body';
  $m->send();
 ?>
