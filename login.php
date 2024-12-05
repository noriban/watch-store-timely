<div id="login-page" class="login-page justify-content-center hidden">
    <div class="mask d-flex justify-content-center"> 
       
    <div class="dialog-body d-flex f-direction-col">
       <div class="dialog-body-close d-flex">
            <button id="login_btn_close" value=""><i class="fa-regular fa-circle-xmark"></i></button>
       </div>
    <div  class="login-text-body border-bottom d-flex justify-content-center">
           <button id="login_btn" class='button '> 
            <h1 id="login-text" class="login-text border-right login-active">
                Login
            </h1>
        </button>
            <button id="register_btn" class='button'>
                <h1 id="register-text" class="login-text">
                    Register
                </h1>
            </button>
        </div>
    <form action="index.php" method="post" class='d-flex f-direction-col form justify-content-center'>
    <div id="form" class='d-flex f-direction-col form justify-content-center'>
        <input class="form-input small-font" required type="text" name="login" id="user" placeholder="Username">
        <input class="form-input small-font" required type="password" name="password" id="pass" placeholder="Password">
    </div>
        <input class="form-submit" type="submit" value="Login" >

    </form>
    </div>
    </div>
</div>



