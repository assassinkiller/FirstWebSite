<!DOCTYPE html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
$EmailName = $_POST['PersonEmail'];


  require_once 'vendor/autoload.php';

  $m = new PHPMailer(true);
  $m->isSMTP();
  $m->SMTPAuth = true;
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

  echo '<script language="javascript">';
  echo 'alert("message successfully sent")';
  echo '</script>';


  $file = fopen("Newsletter.txt", "at");
  $txt = "\n" . $EmailName ;
  fwrite($file, $txt);
  fclose($file);


}
 ?>



<html lang="en" dir="ltr">
  <head>
    <script src="script.js"></script>
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content= "Caden Livingston">
    <title>Web Deisn | welcome</title>
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <header>
      <div class="container">
        <div class="branding">
          <h1><span class="highlight">Acme</span> Web Design</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="Index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">services</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Affordable Professional Web Design</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      </div>



    </section>

    <section  id="Newsletter">
      <div class="container">

        <h1>Subscribe To our Newsletter</h1>
        <form action="" method="post">
          <input type="email" name="PersonEmail" placeholder="Enter Email...">
          <button type="submit" name="submit"class="button_1"> subscribe </button>
        </form>

    </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/logo_html.png" alt="">
          <h3>HTML5 Markup</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
        </div>
        <div class="box">
          <img src="./img/logo_css.png" alt="">
          <h3>CSS3 stlying</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
        </div>
        <div class="box">
          <img src="./img/logo_brush.png" alt="">
          <h3>Graphic Design</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
        </div>
      </div>
    </section>

    <footer>
      <p>Acme Web Design, copyrigh &copy 2017</p>
    </footer>

  </body>
</html>
