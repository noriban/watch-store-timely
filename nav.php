
<div class="nav w-100 d-flex justify-content-center f-direction-col">
<div class="navbar-logo-top col-sm-3 d-flex justify-content-center">

<a href="index.php">
            <img src="./img/image2vector.svg" alt="">
            </a>
        </div>
   <div class="navbar d-flex  w-80 ">

        <div class="navbar-search col-sm-3 d-flex">
        <a class="navbar-link" href="#">
        <i class="fa fa-search "></i>
        </a>    
        </div>
        <div class="navbar-button col-sm-3 d-flex">
        <a class="navbar-link" href="#">
        <i  class="fa-solid fa-bars" id="bars"></i>
        </a>
        </div>
        <div class="navbar-logo col-sm-3 d-flex justify-content-center">
          <a href="index.php">
            <img src="./img/image2vector.svg" alt="">
            </a>
        </div>
        <div class="navbar-store d-flex col-sm-3">
        <div class="navbar-search-store col-sm-3  d-flex">
        <a class="navbar-link" href="#">
        <i class="fa fa-search "></i>
        </a>    
        </div>
            <a class="navbar-link " href="#">
            <i class="fa fa-bag-shopping "></i>
            </a>
    
            <?php 
// 
if(!isset($_SESSION['login']) || $_SESSION["login"] === false ) {
echo('<button class="navbar-link small-font border-left" id="loginbutton">log in</button>');

}if(isset($_SESSION["username"])){

    echo('<form action=""  method="POST"><button class="navbar-link small-font border-left" name="log_out" value="log_out" type="submit"> ' .$_SESSION["username"] .'</button></form> ');
}

   
if(array_key_exists('log_out',$_POST)){
    logout();
}
function logout(){

    session_destroy();
    header('location: index.php');
}

?>
    </div>
        </div>    
 
   <div class="navbar-links d-flex justify-content-center w-100">
        <ul class="navbar-list d-flex show" id="navbar-list">
            <li class="navbar-item">
                <a class="navbar-link"  href="womens.php">Women's</a> 
            </li>
            <li class="navbar-item">
                <a class="navbar-link"  href="man's.php">Men's</a> 
     </li>
             <li class="navbar-item">
                <a class="navbar-link"  href="#">Sale</a> 
            </li>
            <li class="navbar-item">
                <a class="navbar-link"  href="#">Contact</a> 
            </li>
        </ul>
   </div>
</div>
