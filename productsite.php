<?php 
require_once("session.php");
require_once("config.php");
$errorproduct = '';
// $product_id='';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product"])){
    $product_id = $_POST["product"];
   
    }

    
if(isset($_POST["add_cart"])){
    $product_id = $_POST["add_cart"];

    if($_SERVER["REQUEST_METHOD"] =="POST" && isset($_SESSION["login"]))
    {
        $product_id = $_POST["add_cart"];
        if($insertproduct = $con->prepare("INSERT INTO shopbag (userid,watchid) VALUES (? , ?)")){
            $insertproduct->bind_param("ii", $_SESSION["userid"], $product_id);
            $insertproduct->execute();
            $errorproduct = '<p class="succes">sucesfull product add to cart</p>';
    //  var_dump($_POST["add_cart"]);  
    //  var_dump($product_id);
    //  var_dump($productid);

}else{
    $errorproduct = '<p class="error">something gone wrong</p>'; 
}}else{
    $errorproduct = '<p class="error">to add a product to your cart you need to log in</p>'; 
}
}


if(!empty($product_id)){

if($query_product = $con->query("SELECT * FROM watch_details,watches WHERE watch_id = $product_id && watches.id = $product_id;")){
    $result_product = $query_product->fetch_row();
}}

?>

    <?php 
  

    require_once('head.php');
    require_once("nav.php");
    require_once("login.php");
    ?>
<div class="product-site  d-flex f-direction-col justify-content-center">
    <div class="product-dialog d-flex w-80 justify-content-center">
        <div class="product-image">
            <img src="<?php echo($result_product[8]) ?>" alt="" srcset="">
        </div>
        <div class="product-text-dialog d-flex f-direction-col justify-content-center">
        <div class="dialog-product-price">
            <h1><?php echo($result_product[7]);?> zł</h1>
        </div>
        <div class="product-name">
            <p class="price-text"><?php echo($result_product[6]);?> </p>
        </div>
        <form action="" method="post">
        <?php echo('
        <button class="submit-button navbar-link" name="add_cart" value=" ' . $result_product[1] .  ' " type="submit">Add to cart  <i class="fa fa-bag-shopping"></i></button>
       '); 
       echo($errorproduct);
       ?>
       
        </form>
    </div>

    </div>

    <div class="dialog-spec w-80">
    <div class="product-description">
                <h1 class="product-text-topic">Description:</h1>
                
                <p class="product-text"><?php
                
                
                echo($result_product[2]);
                ?>
            </p>
</div>
            <div class="product-specification">
                <h1 class="product-text-topic">Specification:</h1>
                <p class="product-text"><?php
                
                $text = explode(",", $result_product[3]);
               
                   for( $i = 0; $i < count($text); $i++ ){
                echo(' ' .$text[$i]. '  <br>');
                }
                ?>
                </p>
            </div>
            </div>
</div>
<?php require_once("footer.php") ?>
