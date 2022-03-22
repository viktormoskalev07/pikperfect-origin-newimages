
    const arrows = document.querySelector('.gallery__controls');

  /////////// flip book ////////////////
  document.body.classList.add('overflow-h');
  container.classList.remove('gallery__d-none'); 
  setTimeout(() => { 
    container.classList.remove('gallery__fade');
  }, 1); 
