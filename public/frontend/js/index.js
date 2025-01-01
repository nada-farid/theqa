const numberOfSlides = function() {
    let windowWidth = window.innerWidth;
  
    if (windowWidth >= 768) {
      return 3;
    } else if (windowWidth >= 500) {
      return 2;
    } else {
      return 1;
    }
  }
  
  const makeDotDiv = function() {
    const dotElement = document.createElement('div');
    dotElement.classList.add('dot');
  
    return dotElement;
  }
  
  const getSlidesContainer = function() {
    return document.getElementById('slider-images');
  }
  
  const getSlidesImages = function() {
    const slidesContainer = getSlidesContainer();
    return slidesContainer.querySelectorAll('.slide'); 
  }
  
  const moveToSelectedSlide = function(movedSlides) {
    let slidesContainer = getSlidesContainer();
    for (slide of movedSlides.reverse()) {
      slidesContainer.removeChild(slide);
      slidesContainer.prepend(slide);
    }
  }
  
  const highlightCurrentDot = function(selectedId) {
    const dots = document.getElementById('slider-dots').querySelectorAll('.dot');
    dots.forEach(dot => dot.classList.remove('active'));
  
    const selectedDot = [...dots].find(dot => dot.getAttribute('data-id') === selectedId);
    selectedDot.classList.add('active');
  }
  
  const fadeSlide = function(slide) {
    slide.querySelector('img').classList.add('fadein');
    setTimeout(function() {
      slide.querySelector('img').classList.remove('fadein');
    }, 5000)
  }
  
  const selectDotSlide = function() {
    const slides = getSlidesImages();
    const selectedDot = this.getAttribute('data-id');
    const selectedSlide = [...slides].find(slide => slide.id === selectedDot);
    
    const movedSlides = [...slides].slice([...slides].indexOf(selectedSlide));
    moveToSelectedSlide(movedSlides);
    fadeSlide(selectedSlide);
    
    highlightCurrentDot(selectedDot);
  }
  
  const pushArrowBack = function() {
    let slidesContainer = getSlidesContainer();
    let imageToMove = [...getSlidesImages()].pop();
  
    slidesContainer.removeChild(imageToMove);
    slidesContainer.prepend(imageToMove);
    fadeSlide(imageToMove);
   
    highlightCurrentDot(imageToMove.id);
  }
  
  const pushArrowForward = function() {
    let slidesContainer = getSlidesContainer();
    let imageToMove = [...getSlidesImages()].shift();
  
    let imageToFade = [...getSlidesImages()][numberOfSlides()];
    fadeSlide(imageToFade);
  
    slidesContainer.removeChild(imageToMove);
    slidesContainer.append(imageToMove);
  
    const dotSelected = [...getSlidesImages()][0];
  
    highlightCurrentDot(dotSelected.id);
  }
  
  let autoScrollSlider = setInterval(pushArrowForward, 5000);
  
  const restartAutoScroll = function() {
    // When a user clicks an arrow or selector-dot, reset the auto-scroll interval
    // so it doesn't immediately scroll after click
    clearInterval(autoScrollSlider);
    autoScrollSlider = setInterval(pushArrowForward, 5000);
  }
  
  const createDots = function() {
    let slidesImages = getSlidesImages();
    const dotsContainer = document.getElementById('slider-dots');
  
    for (slide of slidesImages) {
      const dotElement = makeDotDiv();
      dotElement.setAttribute('data-id', `${slide.id}`);
      dotElement.addEventListener('click', selectDotSlide);
      dotElement.addEventListener('click', restartAutoScroll);
      dotsContainer.append(dotElement);
    }
  
    const startingDot = [...slidesImages][0];
    highlightCurrentDot(startingDot.id);
  }
  
  const setArrowEvents = function() {
    const backArrow = document.getElementById('back-arrow');
    const forwardArrow = document.getElementById('forward-arrow');
  
    backArrow.addEventListener('click', pushArrowBack);
    backArrow.addEventListener('click', restartAutoScroll);
    forwardArrow.addEventListener('click', pushArrowForward);
    forwardArrow.addEventListener('click', restartAutoScroll);
  }
  // IFFE runs at load - creates dots and adds Event Listeners
  // if #slider-container is present
  const launchSlider = function() {
    if (document.getElementById('slider-container')) {
      createDots();
      setArrowEvents();
    }
  }();