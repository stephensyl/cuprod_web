var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 220,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: false,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  
  var inactivityTime = function () {
    var time;
    var swiperContainer = document.querySelector('.swiper-container');
  
    // Reset timer function
    function resetTimer() {
      clearTimeout(time);
      time = setTimeout(moveToNextSlide, 4000);  // 4 seconds
    }
  
    // Move to the next slide
    function moveToNextSlide() {
      swiper.slideNext();
      resetTimer();  // Reset the timer after moving to the next slide
    }
  
    // Reset the timer on various events
    swiperContainer.addEventListener('mousemove', resetTimer);
    swiperContainer.addEventListener('keydown', resetTimer);
    swiperContainer.addEventListener('click', resetTimer);
    swiperContainer.addEventListener('touchstart', resetTimer);
  
    // Start the timer for the first time
    resetTimer();
  };
  
  // Start the inactivity timer
  inactivityTime();
  