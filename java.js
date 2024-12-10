

let rightarrow = document.getElementById("image-change-right")
let leftarrow = document.getElementById("image-change-left")
let selectimage = document.getElementsByClassName("fa-period")
let images = document.getElementById("images").children


leftarrow.addEventListener('click', previusimg)
rightarrow.addEventListener('click', nextimg)




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
 
     

changeimage(counter,previuscount)

}

function previusimg(){
   
   previuscount = counter
   counter--
    if(counter == -1){
      counter = 2
    }

   changeimage(counter,previuscount)
}

function changeimage(counter,previuscount){
   images[counter].classList.remove("hidden")
   selectimage[counter].classList.add("active-selected-image")
   
   images[previuscount].classList.add("hidden")
   selectimage[previuscount].classList.remove("active-selected-image")
       
}






