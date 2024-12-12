<?php require('session.php');?>

    <?php
      require_once 'head.php';
     require  'nav.php';
        require 'login.php';
        require 'config.php';
      
    ?>
    <div class="article d-flex f-direction-col w-100 justify-content-center">
        <div class="image-body f-direction-col d-flex w-80 ">
            <div id="images" class="image-dialog d-flex justify-content-center ">
                <img class="image-article " src="./img/1.png" alt="">
                <img class="image-article hidden" src="./img/2.png" alt="">
                <img class="image-article hidden" src="./img/3.png" alt="">
            </div>
</div>
        <div class="buttons w-80">            
            <div class="image-buttons d-flex">
                <div class="col-sm-3 btn-left d-flex">
                        <button class="navbar-link"
                    id="image-change-left">
                    <i class="fa fa-solid fa-arrow-left"></i>
                </button>

                </div>
                <div class="col-sm-3 d-flex justify-content-center ">
                    <div class="selected-img">
                            <i class="fa-solid fa-period active-selected-image"></i>
                            <i class="fa-solid fa-period"></i>
                            <i class="fa-solid fa-period"></i>
                    </div>
                </div>
                <div class="col-sm-3 btn-right d-flex">
                    <button  class="navbar-link"
                    id="image-change-right">
                    <i class="fa-solid fa-arrow-right"></i>
             
                    </button>
                
                </div>
             </div>
            </div>
        </div>
        <div class="shop d-flex justify-content-center">
            <div class="shop-dialog-center w-80 wrap justify-content-space-btwn">
   
           <?php
        $query = "SELECT * from watches";
        $result = $con->query($query);
            while($row = $result->fetch_row()){
               
            
                echo('
                <div class="shop-dialog ">
                   <form method="get" action="productsite.php" class="">
                   <button class="product-button d-flex f-direction-col justify-content-center" type="submit" name="product" value="'.$row[0].'">
                  
                   <div class="product-img d-flex justify-content-center">
                       <img class="image-shop" src=" '. $row[3]. ' "  alt="">
                   </div>
                   <div class="product-name">
                       <h1 class=""> '. trim(substr($row[1] ,0,24)) . '...' .' </h1>
                   </div>
                   <div class="product-price ">
                       <p class=""> '. $row[2] . " zł" .'</p>
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
    require 'footer.php';
    ?>
       
    <script src="java.js"></script>
  