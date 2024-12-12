<?php
    require('session.php');
      require_once 'head.php';
     require  'nav.php';
        require 'login.php';
        require 'config.php';
        if(isset($_SESSION["login"])){
            $queryshopbag = $con->prepare("SELECT watchid FROM shopbag where usersid = ?");
            $queryshopbag->bind_param('i',$_SESSION["userid"]);
            $queryshopbag->execute();
            $queryshopbag->store_result();
            $queryshopbag->fetch_row();
            $querywatch = $con->prepare("SELECT * FROM watches where id = ?");
            // $querywatch->bind_param("i",)
        }

    ?>
<div class="shop_bag d-flex justify-content-center">
<div class="w-80">



    <?php
if(!isset($_SESSION["login"])){
    echo('<div class="no_signed d-flex justify-content-center">
    <h1 class="contact-text">You are not signed  </h1>
    <i class="fa-regular fa-face-sad-tear contact-text"></i>
</div>');


}else{
    if($queryshopbag->num_rows > 0){
        echo('<div class="no_signed d-flex justify-content-center">
        <h1 class="contact-text">You are not have anything in shopping bag </h1>
        <i class="fa-regular fa-face-sad-tear contact-text"></i>
    </div>');
 }
else{

// while($row = $querywatch->fetch_row()){
//     echo('
    
// <div class="bag d-flex">
//    <div class="item d-flex border-bottom">
//     <div class="image">
// <img class="" src="' .  .  '" alt="">
//     </div>
//     <div class="name w-60">
//         <h1 class="product-text-topic">' .  .  '</h1>
//     </div>
//     <div class="price">
//         <p class="product-text" product-text>' .  .  '</p>
//     </div>
//     <div class="button">
//     <form method="POST">
//     <button class="navbar-link"><i class="fa-solid fa-trash"></i></button>
//     </form>
//     </div>
//    </div>     
// </div>

//     ');
//     }
// }
}
?>
</div>


</div>
<?php 
    require 'footer.php';
    ?>