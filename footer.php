<?php 
        $topic = "thanks for subcription";
        $body_sub ="we will informajt you if new update coming";
        $headers_sub ="watchtimely";
        if(isset($_POST["submit_sub"])){
           
            $email = $_POST["email"];
            if(isset($email)){
                mail($email,$topic,$body_sub,$headers_sub);
            }
        }
      

        ?>
<div class="fotter">
    <div class="w-80 d-flex">
        <div class="fotter_dialog navbar-logo">
        <img src="./img/image2vector.svg" alt="" srcset="">
        </div>
        <div class="fotter_dialog d-flex f-direction-col">
            <p class="fotter-text">Links</p>
            <a class="navbar-link " href="./man's.php">men's</a>
            <a class="navbar-link " href="./womens.php">women's</a>
            <a class="navbar-link " href="./contact.php">contact</a>
        </div>
        <div class="fotter_dialog d-flex f-direction-col">
            <p class="fotter-text">Socials</p>
            <a class="navbar-link " href="./man's.php"><i class="fa-brands fa-facebook"></i></a>
            <a class="navbar-link " href="./womens.php"><i class="fa-brands fa-github"></i></a>
            <a class="navbar-link " href="./contact.php"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="fotter_dialog">
        <form action="index.php" class="f-direction-col d-flex" method="POST">
            <p class="fotter-text">Newsletter Subscription</p>
            <div class="d-flex">
            <input class="contact-input" type="email" name="email" id="" placeholder="type your email">
            <button class="sub_button" value="submit_sub" name="submit_sub" type="submit">Subscribe</button>
            </div>
        </form>

        </div>
    </div>
</div>
</div>
</div>
</body>
<script src="login.js"></script>
</html>