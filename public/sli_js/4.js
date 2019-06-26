jQuery(document).ready(function($) {

  $(".hotandnew").slick({
    lazyLoad: 'progressive',
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 6,
    dots: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    ]    
  });
  
  $(".langzeitmiete_topright").slick({
    lazyLoad: 'ondemand',
    infinite: true,
    slidesToShow: 1,
    dots: false,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>'   
  });
  $(".lzmzitate ul").slick({
    infinite: true,
    slidesToShow: 1,
    dots: false,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>'   
  });
  
  $(".lzm_markenslider").slick({
    lazyLoad: 'ondemand',
    infinite: true,
    slidesToShow: 9,
    slidesToScroll: 9,
    dots: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 6
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    ]    
  });
   $(".bigimages").slick({
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    asNavFor: ".smallimages",
    responsive: [
      {
        breakpoint: 480,
        settings: {
          fade: false
        }
      }
    ]
  });
  $(".smallimages").slick({
    lazyLoad: 'ondemand',
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: ".bigimages",
    dots: false,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
    focusOnSelect: true
  });
  $(".voucher_slide").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          fade: false
        }
      }
    ]
  });

  $(".hotnewvouchers").slick({
    lazyLoad: 'ondemand',
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]    
  });
  
});