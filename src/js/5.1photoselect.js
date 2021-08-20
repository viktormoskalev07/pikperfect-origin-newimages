(function(){
//tab
        const tabsSlected =document.querySelector("#selected__js");
        const tabAll =document.querySelector("#all__js");
        const section = document.querySelector(".photoselect__section");
        tabAll.addEventListener("click", function(){
            section.classList.remove("only-selected");
        })
        tabsSlected.addEventListener("click", function(){
            section.classList.add("only-selected");
        })



    //cards
    const zoomContainer=document.querySelector(".photoselect__zoom__container");
    const zoomFigure = zoomContainer.querySelector(".photoselect__zoom__img");
    zoomContainer.addEventListener("click", function(){
        zoomContainer.style="display:none";
       zoomFigure.innerHTML="";
    })
const imagesParent = document.querySelector("#photoselect-parent");
const add= (item)=>{
    const card = item.closest('.card-parent__js'); 
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
        console.log("card structure was broken , it not  card=type-card");
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
   if(type=="zoom"){
       const img = e.target.closest(".photoselect__card").querySelector(".photoselect__img img");
        zoomContainer.style="display:block";
        const imgClone = img.cloneNode(true);       
        zoomFigure.append(imgClone); 
   }
}) 

//scroll top
const goTop = document.querySelector(".photoselect__go-top");
window.addEventListener("scroll", function(){
  
    if(window.pageYOffset>400){
        goTop.classList.add("fixed-lg");
    } else {
        goTop.classList.remove("fixed-lg");
    }
   
       
})



}())

