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


if(isset($_POST['button_1'])){
  




}


 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content= "Caden Livingston">
    <title>Web Deisn | Services</title>
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
            <li><a href="Index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="current"><a href="services.php">services</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section  id="Newsletter">
      <div class="container">

        <h1>Subscribe To our Newsletter</h1>
        <form action="" method="post">
          <input type="email" placeholder="Enter Email...">
          <button type="submit" name="submit" class="button_1"> subscribe </button>
        </form>

    </div>
    </section>

    <section id="Main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-tile">Services</h1>
          <ul id="services">
            <li>
              <h3>Website Design</h3>
              <p>obortis quis. Proin tempor nisl diam, et mollis lectus rutrum non. Phasellus tempor elit nec dolor luctus, non pretium ante pretium. Nulla dignissim eleifend orci, porttitor viv</p>
              <p>Pricing: $1,000 - $3,000</p>
            </li>
            <li>
              <h3>Website maintence</h3>
              <p>obortis quis. Proin tempor nisl diam, et mollis lectus rutrum non. Phasellus tempor elit nec dolor luctus, non pretium ante pretium. Nulla dignissim eleifend orci, porttitor viv</p>
              <p>Pricing: $250 per month</p>
            </li>
            <li>
              <h3>Website hosting</h3>
              <p>obortis quis. Proin tempor nisl diam, et mollis lectus rutrum non. Phasellus tempor elit nec dolor luctus, non pretium ante pretium. Nulla dignissim eleifend orci, porttitor viv</p>
              <p>Pricing: $25 per month</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark"
            <h3>Get a quote</h3>
            <form class="quote" action="">
              <div>
                <label>Name</label>
                <input type="text" name="Name" placeholder="Name">
              </div>
              <div>
                <label>Email</label>
                <input type="email" name="Email1" placeholder="Email Address">
              </div>
              <div>
                <label>Message</label> <br>
                <textarea placeholder="Message" name="Message"></textarea>
              </div>
              <button class="button_1" name="Submit_Button" type="submit">Send</button>
            </form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Acme Web Design, copyrigh &copy 2017</p>
    </footer>

  </body>
</html>
