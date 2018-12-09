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
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content= "Caden Livingston">
    <title>Web Deisn | About</title>
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
            <li class="current"><a href="about.php">About</a></li>
            <li><a href="services.php">services</a></li>
          </ul>
        </nav>
      </div>
    </header>







    <section  id="Newsletter">
      <div class="container">

        <h1>Subscribe To our Newsletter</h1>
        <form action="" method="post">
          <input type="email" name="PersonEmail" placeholder="Enter Email...">
          <button type="submit" name="submit" class="button_1"> subscribe </button>
        </form>

    </div>
    </section>

    <section id="Main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-tile">About Us</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id nulla sit amet risus congue eleifend non congue sem. Nunc feugiat justo felis, et ullamcorper sem lobortis quis. Proin tempor nisl diam, et mollis lectus rutrum non. Phasellus tempor elit nec dolor luctus, non pretium ante pretium. Nulla dignissim eleifend orci, porttitor viverra metus pulvinar a. Duis consectetur pharetra justo, condimentum scelerisque erat dictum non. In placerat vehicula mattis. Donec porttitor, augue sed vehicula dictum, metus turpis ornare ante, vitae gravida ligula lectus quis odio. Proin sit amet libero in lacus hendrerit cursus a id mauris. Sed ac semper orci. Phasellus tortor dui, malesuada sit amet mauris eu, porta gravida sem.
            </p>
            <p class="dark">
            Integer vulputate nisl sed luctus consectetur. Sed eu semper est. Quisque ipsum velit, elementum in sodales nec, pharetra eu odio. Nullam purus lectus, vestibulum sed velit nec, aliquet aliquam nulla. Fusce ultrices, arcu eu congue eleifend, sem dui placerat est, vel sollicitudin massa justo sed nulla. Pellentesque sed posuere risus. Sed eros nibh, volutpat quis elementum non, eleifend sed neque. Ut sollicitudin est eu libero viverra pellentesque. Vivamus at nibh in diam tempus blandit. Vivamus blandit nec felis ac sagittis. Nulla gravida, quam vel feugiat porttitor, nibh mi semper ligula, dapibus laoreet nibh orci vitae est. Cras non scelerisque mi. Proin at dui fringilla, fermentum nibh nec, malesuada quam.
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark"
            <h3>What we do</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id nulla sit amet risus congue eleifend non congue sem. Nunc feugiat justo felis, et ullamcorper sem congue eleifend non congue sem. Nunc feugiat justo felis, et ullamcorper sem congue eleifend non congue sem. Nunc feugiat justo felis, et ullamcorper sem</p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Acme Web Design, copyrigh &copy 2017</p>
    </footer>

  </body>
</html>
