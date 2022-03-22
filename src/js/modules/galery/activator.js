const container = document.querySelector('.gallery__container');

if(!container || !containerFlip){  return      } 
const preloader = document.querySelector('.preloader');
const activator = document.querySelectorAll('.gallery__activator-js');
const close = document.querySelector('.gallery__close'); 

  activator.forEach(i => {
    const figure =  i.querySelector('.thumb__place__figure');
    const img =  i.querySelector('.thumb__img');
    i.classList.add('cursor-pointer'); 
  if(  img.width /img.height<0.8){
    figure.classList.add('portrait')
  }
  figure.style.opacity=1;
  });