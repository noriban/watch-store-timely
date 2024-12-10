<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep z Zegarkami</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="https://kit.fontawesome.com/66e4cac288.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="main d-flex f-direction-col">
    <?php require  'nav.php';
        require 'login.php';
    ?>
    <div class="article d-flex f-direction-col w-100 justify-content-center">
        <div class="image-body f-direction-col d-flex w-80 ">
            <div class="image-dialog d-flex justify-content-center ">
                <img class="image-article hidden" src="./img/1.png" alt="">
                <img class="image-article hidden" src="./img/2.png" alt="">
                <img class="image-article " src="./img/3.png" alt="">
            </div>
</div>
        <div class="buttons w-80">            
            <div class="image-buttons d-flex">
                <div class="col-sm-3 btn-left d-flex">
                        <button  class='button navbar-link'
                    id="image-change-left">
                    <i class="fa fa-solid fa-arrow-left"></i>
                </button>

                </div>
                <div class="col-sm-3 d-flex justify-content-center ">
                    <div class="selected-img">
                    <i class="fa-solid fa-period selected-image-active"></i>
                    <i class="fa-solid fa-period"></i>
                    <i class="fa-solid fa-period"></i>
                    </div>
                </div>
                <div class="col-sm-3 btn-right d-flex">
                    <button   class='button  navbar-link ' 
                    id="image-change-right">
                    <i class="fa fa-solid fa-arrow-right"></i>
                    </button>
                
                </div>
            </div>
            </div>
        </div>
                      <div class="shop wrap d-flex justify-content-center">
                        <div class="product-dialog d-flex flex-direction-col w-80 ">
                            <div class="product_img">
                                <img src="./img/Zegarek-Meski-Adriatica-A8326-S1G6QF-szary.webp" alt="">
                            </div>
                        <div class="product-name">

                        </div>
                        <div class="product_price">

                        </div>
                        </div>
                     </div>


    </div>

</div>
</body>
<script src="java.js"></script>
</html>