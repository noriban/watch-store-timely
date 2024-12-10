let linkBar = document.getElementById("bars")
let navbarLinks = document.getElementById("navbar-list")
let loginPage = document.getElementById("login-page")
let loginOpenButton = document.getElementById("loginbutton")
let loginCloseButton = document.getElementById("login_btn_close")
let resgisterButton = document.getElementById("register_btn")
let confirmPassInput = document.getElementById("confirm_pass")
let registerText = document.getElementById("register-text")
let loginText = document.getElementById("login-text")
let loginbutton = document.getElementById("login_btn")
let form = document.getElementById("form")
let periods = document.getElementsByClassName("fa-period")
let rightarrow = document.getElementById("image-change-right")
let leftarrow = document.getElementById("image-change-left")

rightarrow.addEventListener("click" , nextimg)

linkBar.addEventListener('click' , changestyle)
loginOpenButton.addEventListener('click' , changeloginpage)
loginCloseButton.addEventListener("click" , changeloginpage)
resgisterButton.addEventListener("click" , changeregister)
loginbutton.addEventListener("click" , changelogin)

function nextimg (){
   
}
let input
function changestyle(){
 if(navbarLinks.classList[2] == "show"){
    navbarLinks.classList.remove("show")
 }else{
    navbarLinks.classList.add("show")
 }

   

}

function changeloginpage(){

   if(loginPage.classList[2] == "hidden"){
      loginPage.classList.remove("hidden")
   }else{
      loginPage.classList.add("hidden")
   }
}

function changeregister(){
   if(loginText.classList[2] == "login-active"){
   loginText.classList.remove("login-active")
   registerText.classList.add("login-active")
   input = document.createElement("input")
   input.classList.add("form-input")
   input.classList.add("small-font")
   input.setAttribute('type', 'password')
   input.setAttribute("name","confirm-password")
   input.setAttribute("id","confirm_pass")
   input.setAttribute("required" ,"")
   input.setAttribute("placeholder","Confirm Password")
   
  form.appendChild(input)
}
}
function changelogin(){
   
   
      input.remove()
      loginText.classList.add("login-active")
      registerText.classList.remove("login-active")
   
}


