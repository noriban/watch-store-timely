
<?php
require_once("head.php");
require_once("nav.php");
require_once("login.php");
require_once("config.php");
?>
<div class="shop d-flex justify-content-center">
<div class="shop-dialog-center w-80 wrap justify-content-space-btwn">
<?php
$menwatchquery = "SELECT * FROM watches, watch_details WHERE target_audience = 'Men' && watch_details.watch_id = watches.id";
$menwatchresult = $con->query($menwatchquery);
while($rowwatchresult = $menwatchresult->fetch_row()){

echo('
<div class="shop-dialog ">
   <form method="get" action="productsite.php" class="">
   <button class="product-button d-flex f-direction-col justify-content-center" type="submit" name="product" value="'.$rowwatchresult[0].'">
  
   <div class="product-img d-flex justify-content-center">
       <img class="image-shop" src=" '. $rowwatchresult[3]. ' "  alt="">
   </div>
   <div class="product-name">
       <h1 class=""> '. trim(substr($rowwatchresult[1] ,0,24)) . '...' .' </h1>
   </div>
   <div class="product-price ">
       <p class=""> '. $rowwatchresult[2] . " zł" .'</p>
   </div>
</div>
</button>
</form>
' );
}
?>
</div>
</div>

<?php
require_once("footer.php")
?>
