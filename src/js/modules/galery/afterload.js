function afterload (){
    const lazy = document.getElementsByClassName('lazypage');
 
  
    let i = lazy.length;
    const loading =()=>{
      if(closedChecker){
        lazy=[];
        i=0;
        return 
      }
      const img = lazy[i-1]; 
      if(!img){return}  
      img.src=img.dataset.src;
      img.addEventListener('load' , ()=>{ 
         i--;
       
         if(i<1||closedChecker) {return false};
         loading()
      })
    }
    loading();

    const page = document.querySelectorAll('.page');
    const frontCover = document.querySelector('.page__front-cover');
    const backCover = document.querySelector('.page__back-cover');
  
    function openBookFront(){
      if(frontCover.classList.contains('next')){
        containerFlip.classList.add('shadow');
      }
    }
    function closeBookFront(){
      if(frontCover.classList.contains('prev')){
        containerFlip.classList.remove('shadow');
      }
    }
    function openBookBack(){
      if(backCover.classList.contains('prev')){
        containerFlip.classList.add('shadow');
      }
    }
    function closeBookBack(){
      if(backCover.classList.contains('next')){
        containerFlip.classList.remove('shadow');
      }
    }
         const removeCurrents = () => page.forEach(el => el.classList.remove('current', 'prev'));   
         // click for every pages
        page.forEach((elem, index) => {
          const prevNode = elem.previousSibling;
  
          elem.addEventListener("click", function ( ) {
            removeCurrents();
            containerFlip.classList.remove('end');
            if (elem.classList.contains("next")) {
              elem.classList.remove('next');
              elem.classList.add('prev');
            } else {
              elem.classList.remove('prev');
              elem.classList.add("next");
            }
  
            if (prevNode.classList) prevNode.classList.add('current');
            if (index === 0 && containerFlip.classList.contains('shadow')) {
              setTimeout(() => containerFlip.classList.add('end'), 700);
            }
          });
        }
      );
   

              // add/remove shadow for book
        function clickBackCover(){
          setTimeout(openBookBack, 600);
          setTimeout(closeBookBack, 200);
        }
        function clickFrontCover(){
          setTimeout(openBookFront, 600);
          setTimeout(closeBookFront, 200);
        }
        frontCover.addEventListener('click', clickFrontCover);
        backCover.addEventListener('click', clickBackCover); 

        // click for button "next"
      function nextArrow(){
        if(debounce()){ return false} 
          if(frontCover.classList.contains('next')){
            const pageNext = document.querySelectorAll('.page.next');

            clickFrontCover();
            setTimeout(closeBookBack, 600);
              page[page.length - 1 - pageNext.length].click();
          }else{
            page[page.length - 1].click();
          }
        }
        next.addEventListener('click', nextArrow);

    // click for button "prev"
    function prevArrow(){
      
      if(debounce()){ return false} 
      if(frontCover.classList.contains('next')){
        const pageNext = document.querySelectorAll('.page.next'); 
          page[page.length - pageNext.length].click(); 
      }
    }
    prev.addEventListener('click', prevArrow);
 
  // add class click
  function clickContainer(){
    containerFlip.addEventListener('click', function(e){
      const parent = e.target.closest('.container-flip');
      parent.classList.add('click');
      arrows.classList.add('click');
      setTimeout(removeClick, 1000);
    });
  }
  function removeClick(){
    containerFlip.classList.remove('click');
    arrows.classList.remove('click');
  }
  clickContainer();
  // add zIndex for pages
  const foundMaxZIndex = ()=>{
    const arr = [];
    page.forEach((item)=>{
    arr.push(Number(item.style.zIndex)); 
  });
  return( Math.max(...arr));
  };

  containerFlip.addEventListener('click', (e)=>{
    const targetCard =e.target.closest('.page');
    targetCard.style.zIndex = foundMaxZIndex() + 1;
  });

      // keyboard input click <- -> 
      function keyboardArrows(e){
        e = e || window.event;
      
        if (e.keyCode == '37') {
          if(!(containerFlip.classList.contains('click'))){
        
            prevArrow();
          }
        }
        else if (e.keyCode == '39') {
          if(!(containerFlip.classList.contains('click'))){
            nextArrow();
          }
        }
      }
      document.addEventListener('keydown', keyboardArrows); // keyboard input

  }