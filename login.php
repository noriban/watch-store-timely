<?php
require('config.php');


$query = $con->prepare("SELECT * FROM users where username = ?");
$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register_submit"])){
$username = trim($_POST["login"]);
$password = trim($_POST["password"]);
$password_hash = password_hash($password, PASSWORD_BCRYPT);
$confirm_password = $_POST["confirm-password"]; 
if($query){
    
    $query->bind_param('s', $username);
    $query->execute();
    $query->store_result();
    if($query->num_rows > 0){
        
        $error .= '<p class="error">account is arely exist</p>';

} else{
    if(strlen($password) < 6){
        
        $error .= '<p class=error>password must have 6 characters</p>';
}
}
if(empty($confirm_password)){
   
$error .= '<p class="error">confirm password</p>';

}
else{
    if(empty($error) && ($password !== $confirm_password)){
     
        $error .= '<p class="error">password not match</p>';
}}
if(empty($error)){
    
$insertquery = $con->prepare("INSERT INTO users (username,password) VALUES (?,?);");
$insertquery->bind_param("ss", $username, $password_hash);
$result = $insertquery->execute();
        if($result){
    $error .= '<p class="succes">password not match</p>';
        } else {
            
    $error .= '<p class="error">something went wrong</p>';
        }

}
}
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST["login_submit"]))){
    $username = $_POST["login"];
    $password = $_POST["password"];
    
    if(empty($username)){
        $error .= '<p class="error">Please enter username</p>';
    }
    if(empty($password)){
        $error .= '<p class="error">Please enter password</p>';

}
if(empty($error)){
    if($query){
    
        $query->bind_param('s', $username);
        $query->execute();
        $result = $query->get_result();
        $row = $result ->fetch_assoc();

        if($row){
            if(password_verify($password, trim($row['password']))){
                  
          
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['login'] = true;
                    header('location: index.php');

        }else{
            $error .= '<p class="error">The password is not valid</p>';
        }
}else{
    $error .= '<p class="error">user doesnt exist</p>';
}
} 
}
}


?>

<div id="login-page" class="login-page justify-content-center hidden">
    <div class="mask d-flex justify-content-center"> 
       
    <div class="dialog-body d-flex f-direction-col">
       <div class="dialog-body-close d-flex">
            <button id="login_btn_close" value="">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
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
       
    <form target="votar"  method="post" class='d-flex f-direction-col form justify-content-center'>
    <div id="form" class='d-flex f-direction-col form justify-content-center'>
        <?php echo($error) ?>
        <input class="form-input small-font" required type="text" name="login" id="user" placeholder="Username">
        <input class="form-input small-font" required type="password" name="password" id="pass" placeholder="Password">
    </div>
    <input class="form-submit" type="submit" value="Submit" name="login_submit" >
        <input class="form-submit hidden" type="submit" value="Submit" name="register_submit" >
    
    </form>
    </div>
    </div>
</div>



