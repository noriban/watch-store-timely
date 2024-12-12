<?php

require_once("session.php");

if(isset($_SESSION["login"]) && isset($_POST["subject"]) && isset($_POST["body"])){
 $to_email = "zoramexmiki@gmail.com"; // ZMIEN SE NA SWOJ ZEBY DZIAŁCZYŁO
 $subject = $_POST["subject"];
 $body = $_POST["body"];
 $headers = "From: message from " . $_SESSION["username"] . " id: " . $_SESSION["userid"]  . " ";
}

?>
<?php
require_once("head.php");
require_once("nav.php");
require_once("login.php");
require_once("config.php");

?>

<?php


if(!isset($_SESSION["login"])){
    echo '<div class="no_signed d-flex justify-content-center">
    <h1 class="contact-text">You are not signed  </h1>
    <i class="fa-regular fa-face-sad-tear contact-text"></i>
</div>';


}

else{
echo('
<div class="contact-form  d-flex justify-content-center ">
    <div class="w-60">
<form action="" method="post">
   <h1 class="contact-text">Contact with us</h1>
    <div class="d-flex justify-content-center ">
    <div class="inputs d-flex f-direction-col w-60">
    <input type="text" name="subject" class="contact-input" placeholder="subject">
   <textarea name="body" id="" placeholder="" class="contact-input" rows="20" cols="50">Write here</textarea>
   <div class="submit d-flex justify-content-center">
   <button type="submit" class="submit-button navbar-link">Send <i class="fa-regular fa-envelope"></i></button>
    </div>
       </div>
</div>
   </div>
</form>
</div>
' );
if(isset($subject) || isset($body)) {

    if(mail($to_email, $subject, $body, $headers)) {
        echo '<p class="succes">Mail send we will contact you to your email that you dont give anywhere pepega</p>';
}
else {
    echo '<p class="error">something gone wrong</p>';
  
}
}
}
?>
</div>
</div>

<?php
require_once("footer.php")
?>
