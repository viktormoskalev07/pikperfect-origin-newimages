 (
     function(){
              const radiocontainer = document.querySelector('.section-photobooks__sidebar');
              const card = document.querySelectorAll('.filtered-card-js');
              let occasionChecked = 'all';
              let designChecked = 'all';
              if(radiocontainer&&card){
                    radiocontainer.addEventListener('change' , function(e){
                      console.log(e.target.name);
                      if(e.target.name==='byDesign'){
                        designChecked= e.target.value;
                      }
                      if(e.target.name==='byOccasion'){
                        occasionChecked= e.target.value;
                      }

                         card.forEach((item)=>{
                            const occasion = item.dataset.occasion || ' ';
                            const design = item.dataset.design || ' ';
                              const occasionBoolean =occasionChecked!=='all' ?    e.target.value.includes(occasion.trim()) : true;
                              const designBoolean =e.target.value.includes(design.trim());
                              const result  =occasionBoolean  || designBoolean;

                             if(!(result)&&!(e.target.value=='All')){
                                item.classList.add('card-hide'); 
                             } else {
                                item.classList.remove('card-hide') ;
                             }
                         }) ;
                    }) ;
              }

     }()
 );