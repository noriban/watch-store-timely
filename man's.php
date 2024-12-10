
<?php
require_once("head.php");
require_once("nav.php");
require_once("login.php");
require_once("config.php");
?>
<div class="shop d-flex justify-content-center">
<div class="shop-dialog-center w-80 wrap justify-content-space-btwn">
<?php
$menwatchquery = "SELECT watches.name, watches.price, watches.photo_path, watch_details.target_audience FROM watches, watch_details WHERE target_audience = 'Men';";
$menwatchresult = $con->query($menwatchquery);
while($row = $menwatchresult->fetch_row())

echo('
<div class="shop-dialog ">
   <form method="get" action="productsite.php" class="">
   <button class="product-button d-flex f-direction-col justify-content-center" type="submit" name="product" value="'.$row[0].'">
  
   <div class="product-img d-flex justify-content-center">
       <img class="image-shop" src=" '. $row[2]. ' "  alt="">
   </div>
   <div class="product-name">
       <h1 class=""> '. trim(substr($row[0] ,0,24)) . '...' .' </h1>
   </div>
   <div class="product-price ">
       <p class=""> '. $row[1] . " zł" .'</p>
   </div>
</div>
</button>
</form>
' );
?>
</div>
</div>

<?php
require_once("footer.php")
?>