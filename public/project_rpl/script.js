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

// New code to dynamically update Green Campus Operations numbers
document.addEventListener('DOMContentLoaded', function () {
  // Fetch operasi data from backend API endpoint
  fetch('/api/operasi-data')
    .then(response => response.json())
    .then(data => {
      if (!data) return;

      // Map category names to the ops-item elements by title text
      const mapping = {
        'Setting and Infrastructure': 'Setting and Infrastructure',
        'Energy Conversion': 'Energy Conversion',
        'Water': 'Water',
        'Education and Research': 'Education and Research',
        'Transportation': 'Transportation',
        'Waste': 'Waste'
      };

      // For each ops-item, update the number text
      document.querySelectorAll('.ops-item').forEach(item => {
        const titleElem = item.querySelector('.tittlecon');
        const numberElem = item.querySelector('.totdata');
        if (!titleElem || !numberElem) return;

        const category = titleElem.textContent.trim();
        if (mapping[category] && data[mapping[category]] !== undefined) {
          numberElem.textContent = data[mapping[category]] + '/1500';
        }
      });
    })
    .catch(err => {
      console.error('Failed to fetch operasi data:', err);
    });
});
