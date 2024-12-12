<?php
    require('session.php');
      require_once 'head.php';
     require  'nav.php';
        require 'login.php';
        require 'config.php';
        if(isset($_SESSION["login"])){
            $user = $_SESSION['userid'];
            if(isset($_POST["trash"])){
                $trashproduct = $_POST["trash"];
               $deletequery = $con->prepare("DELETE FROM shopbag WHERE userid = ? && watchid = ?;");
                $deletequery->bind_param('ii', $user, $trashproduct);
            $deletequery->execute();
            }
            // $queryshopbag = $con->prepare("SELECT watchid FROM shopbag where usersid = ?");
            // $queryshopbag->bind_param('i',$_SESSION["userid"]);
            // $queryshopbag->execute();
            // $queryshopbag->store_result();
            // $watchid = $queryshopbag->fetch_row();
            // if($queryshopbag->num_rows > 0){
            // $querywatch = $con->prepare("SELECT * FROM watches where id = ?");
            // $querywatch->bind_param("i", $watchid[1]);



            
        //  $queryshopbag = $con->prepare("SELECT * FROM shopbag, watches WHERE shopbag.watchid = watches.id = ? && userid;");
        //     $queryshopbag->bind_param('i',$_SESSION["userid"]);
        //     $queryshopbag->execute();
            // $queryshopbag->store_result();
            
            $queryshopbag = $con->query("SELECT * FROM shopbag, watches WHERE shopbag.watchid = watches.id && $user = userid;");
       
            // var_dump($queryshopbag);

          
        }

    ?>
<div class="shop_bag d-flex justify-content-center">
<div class="w-80">


<div class="bag d-flex f-direction-col">
    <?php
if(!isset($_SESSION["login"])){
    echo('<div class="no_signed d-flex justify-content-center">
    <h1 class="contact-text">You are not signed  </h1>
    <i class="fa-regular fa-face-sad-tear contact-text"></i>
</div>');


}else{
    if($queryshopbag->num_rows > 0){

    while($row = $queryshopbag->fetch_row()){
        echo('
        
    
       <div class="item d-flex border-bottom">
        <div class="image">
    <img class="" src="' . $row[6] .  '" alt="">
        </div>
        <div class="name w-60">
            <h1 class="product-text-topic">' . $row[4]  .  '</h1>
        </div>
        <div class="price">
            <p class="product-text" product-text>' . $row[5]  .   ' zł</p>
        </div>
        <div class="button">
        <form method="POST">
        <button type="submit" name="trash" value="'. $row[3] .'" class="navbar-link"><i class="fa-solid fa-trash"></i></button>
        </form>
        </div>
       </div>     
 
    
        ');
        }
 }
else{
    echo('<div class="no_signed d-flex justify-content-center">
    <h1 class="contact-text">You are not have anything in shopping bag </h1>
    <i class="fa-regular fa-face-sad-tear contact-text"></i>
</div>');

}
}

?>
</div>
</div>

</div>
<?php 
    require 'footer.php';
    ?>