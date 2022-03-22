/////////// flip book ////////////////

(function(){

  @@include('global.js')
  @@include('activator.js')

const openGallery =function(){
    closedChecker=false;
  const app = document.querySelector('#app');
  if(app) {
  @@include('template.js')
  @@include('beforeload.js')
  @@include('afterload.js')
  @@include('preloader.js')
  }

  };
    if(container&&activator){

        close.addEventListener('click' ,closeGallery);
        document.addEventListener('keydown' , function(event){
            if(event.code ==='Escape'){
              closeGallery();
            } 
        }) ;
        activator.forEach(item => {
          item.addEventListener('click' , openGallery);
        });
    }
}());
