/////////// flip book ////////////////

(function(){

  @@include('global.js');
  @@include('activator.js');

const openGalery =function(){  
  const app = document.querySelector('#app');
  closedChecker=false
  if(app){
    @@include('template.js');
    @@include('beforeload.js');
    @@include('afterload.js');
    @@include('preloader.js');
     
  }
 
  };
    if(container&&activator){ 
      
        close.addEventListener('click' ,closeGalery); 
        document.addEventListener('keydown' , function(event){
            
            if(event.keyCode==27){
              closeGalery();
            } 
        }) ;
        activator.forEach(item => {
          item.addEventListener('click' , openGalery);
        });
    } 

}());
