let loginPage = document.getElementById("login-page")
let loginOpenButton = document.getElementById("loginbutton")
let loginCloseButton = document.getElementById("login_btn_close")
let resgisterButton = document.getElementById("register_btn")
let confirmPassInput = document.getElementById("confirm_pass")
let registerText = document.getElementById("register-text")
let loginText = document.getElementById("login-text")
let loginbutton = document.getElementById("login_btn")
let form = document.getElementById("form")
let sumbit_button = document.getElementsByClassName("form-submit")
let shopping_bag = document.getElementById("bag_shopping")



let linkBar = document.getElementById("bars")
let navbarLinks = document.getElementById("navbar-list")

linkBar.addEventListener('click' , changestyle)
// shopping_bag.addEventListener('click' , changeshopbag)
loginOpenButton.addEventListener('click' , changeloginpage)
loginCloseButton.addEventListener("click" , changeloginpage)
resgisterButton.addEventListener("click" , changeregister)
loginbutton.addEventListener("click" , changelogin)
function changeloginpage(){

    if(loginPage.classList[2] == "hidden"){
       loginPage.classList.remove("hidden")
    }else{
       loginPage.classList.add("hidden")
    }
 }
 
 let atribute = ["type",'name','required','placeholder']
 let value = ['password','confirm-password','','ConfirmPassword']
 
 function changeregister(){
    if(loginText.classList[2] == "login-active"){
    loginText.classList.remove("login-active")
    registerText.classList.add("login-active")
    input = document.createElement("input")
    input.classList.add("form-input")
    input.classList.add("small-font")
 
    for (i=0;i< atribute.length;i++){
    input.setAttribute(atribute[i],value[i])
    }
   form.appendChild(input)
   sumbit_button[1].classList.remove("hidden")
   sumbit_button[0].classList.add("hidden")
 }

 }
 function changelogin(){
    
    
       input.remove()
       loginText.classList.add("login-active")
       registerText.classList.remove("login-active")
       sumbit_button[1].classList.add("hidden")
    sumbit_button[0].classList.remove("hidden")
 }

function changestyle(){
 if(navbarLinks.classList[2] == "show"){
    navbarLinks.classList.remove("show")
 }else{
    navbarLinks.classList.add("show")
 }

   

}

// function changeshopbag(){
//    if(shopping_bag.classList[])
// }