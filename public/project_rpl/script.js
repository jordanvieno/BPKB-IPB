new Swiper('.eventwrap', {
  loop: true,
  spaceBetween: 30,
  centeredSlides: false, // ✅ pastikan tidak muncul dari tengah
  slidesPerGroup: 1,

  // Pagination bullets
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //responsive breakpoint
  breakpoints:{
    0:{
      slidesPerView:1
    },
    768:{
      slidesPerView:2
    },
    1024:{
      slidesPerView:3
    },
  }

});
