

let rightarrow = document.getElementById("image-change-right")
let leftarrow = document.getElementById("image-change-left")
let selectimage = document.getElementsByClassName("fa-period")
let images = document.getElementById("images").children



rightarrow.addEventListener('click', nextimg)
leftarrow.addEventListener('click', previusimg)



let previuscount = 0
let counter = 0
function nextimg(){
   previuscount = counter
   counter++

      // images[2].classList.add("hidden")
      // selectimage[2].classList.remove("active-selected-image")
 if(counter == 3){
   counter = 0
 }
     


    images[counter].classList.remove("hidden")
    selectimage[counter].classList.add("active-selected-image")

images[previuscount].classList.add("hidden")
selectimage[previuscount].classList.remove("active-selected-image")
    
}

function previusimg(){

}






