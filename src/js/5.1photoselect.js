(function(){

const imagesParent = document.querySelector("#photoselect-parent");
const add= (item)=>{
    const card = item.parentNode;
    if(card&&card.dataset.type=="card"){

        if(card.dataset.selected){ 
            card.removeAttribute("data-selected");
            card.classList.remove("selected");
            card.classList.add("deselected");
        } else{ 
            card.dataset.selected=true;
            card.classList.add("selected");
            card.classList.remove("deselected");
        }  
    } else {
        console.log("card structure was broken , it not right parent node ");
    }
}
imagesParent.addEventListener("click", function(e){
   const type =  e.target.dataset.type;
 
   if(type=="add"){ 
    add(e.target)
   }
   if(type=="image"){
    add(e.target.parentNode)
   }
   if(type=="favorite"){
    e.target.classList.toggle("checked");
   }
}) 
}())

