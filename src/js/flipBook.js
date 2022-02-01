
(function(){
  const images = [
    'yellow-leather/inner-page/inner_page_base_leather_yellow_right.png', //last page

    'complete-album/wedding-timeless-hochzeit-A+A/page-10.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-11.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-8.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-9.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-6.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-7.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-4.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-5.jpg',  // back
    
    'complete-album/wedding-timeless-hochzeit-A+A/page-2.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-3.jpg',  // back

    'yellow-leather/cover/cover.jpg', // first page    
  ]
  const app = document.querySelector('#app');
  if(app){
    let result = ' ';
    images.forEach((img , i)=>{
      if(i ===0){
        result+= `<div class="page page__back-cover">
                    <div class="front">
                        <div class="outer">
                            <div class="content">
                              <img src="images/large-square/${img}">
                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="outer">
                            <div class="content">
                                <div class="helper-class-to-make-bug-visbile">
                                  <img src="images/large-square/yellow-leather/cover/cover.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>`
      }
      if(i ===(images.length - 1) ){
        result+= `
        <div class="page page__front-cover">
          <div class="front">
              <div class="outer">
                  <div class="content">
                    <img src="images/large-square/${img}">
                  </div>
              </div>
          </div>
          <div class="back">
              <div class="outer">
                  <div class="content">
                      <div class="helper-class-to-make-bug-visbile">
                        <img src="images/large-square/yellow-leather/inner-page/inner_page_base_leather_yellow_left.png">
                      </div>
                  </div>
              </div>
          </div>
        </div>`
      } else {

            if(i%2){ 
              result+= ` <div class="page"> <div class="front">
                          <div class="outer">
                              <div class="content">
                                <img src="images/large-square/${img}">
                              </div>
                          </div>
                        </div>`
            } else {
              result+= `<div class="back">
                          <div class="outer">
                              <div class="content">
                                  <div class="helper-class-to-make-bug-visbile">
                                    <img src="images/large-square/${img}">
                                  </div>
                              </div>
                          </div>
                        </div> </div>`
            }  
      }   
    })
    app.innerHTML=result;
  }



}());

const page = document.querySelectorAll('.page');
const container = document.querySelector('.container-flip');
const frontCover = document.querySelector('.page__front-cover');
const backCover = document.querySelector('.page__back-cover');

const shadow = document.querySelector(".box-shadow");

function openBookFront(){
  if(frontCover.classList.contains('next')){
    container.classList.add('shadow');
  }
};
function closeBookFront(){
  if(frontCover.classList.contains('prev')){
    container.classList.remove('shadow');
  }
};

function openBookBack(){
  if(backCover.classList.contains('prev')){
    container.classList.add('shadow');
  }
};
function closeBookBack(){
  if(backCover.classList.contains('next')){
    container.classList.remove('shadow');
  }
};

page.forEach((elem) =>
  elem.addEventListener("click", function () {
    if (this.classList.contains("next")) {
      this.classList.add('prev');
      this.classList.remove('next');
    } else {
      this.classList.add("next");
      this.classList.remove('prev');
    }
  })
);

const foundMaxZIndex = ()=>{
  const arr = []
  page.forEach((item)=>{
  arr.push(Number(item.style.zIndex)); 
})
return( Math.max(...arr));
}

container.addEventListener('click', (e)=>{
  const targetCard =e.target.closest('.page')
  targetCard.style.zIndex = foundMaxZIndex() + 1;
});

(function(){
  if(frontCover){
    frontCover.addEventListener("click" , function(){
      setTimeout(openBookFront, 600);
      setTimeout(closeBookFront, 200);
    });
  };
  if(backCover){
    backCover.addEventListener("click" , function(){
    setTimeout(openBookBack, 600);
    setTimeout(closeBookBack, 200);
  })
  }
}());


