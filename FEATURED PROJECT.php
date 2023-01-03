<?php include('header.php')?>
   
         <div class="services_01">
            <div class="container">
               <div class="row">
                  <div class="tt-title text-left" style="text-align: left;">FEATURED PROJECT</div>
                  <div class="simple-text">
                    
                  </div>
               </div>
               
            </div>
         </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css'>

<div class="container-fluid pad_0">

      <div class="slider center">       
          <div class="slide">
            <div class="cl ">
               <img src="assets/images/slider/project/1/1.jpg">
               <div class="slide_content">
                  <h4>Project name: <b>Cement Concrete Road at Muralkhurd Stood Distt. Raisen</b></h4>
               </div>
            </div>
          </div>
          <div class="slide">
            <div class="cl ">
               <img src="assets/images/slider/project/1/2.jpg">
                <div class="slide_content">
                  <h4>Project name: <b>Construction of 12 NGO & 48 Constable Quarters in rajghat</b></h4>
               </div>
            </div>
          </div>
            <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/12.jpeg">
               <div class="slide_content">
                  <h4>Project name: <b>Construction of Devi Mandir Salkanpur Distt. Sehore</b></h4>
               </div>
            </div>
          </div>
          <div class="slide">
            <div class="cl ">
               <img src="assets/images/slider/project/1/3.jpg">
               <div class="slide_content">
                  <h4>Project name: <b>Construction of Devi Mandir Salkanpur Distt. Sehore</b></h4>
               </div>
            </div>
          </div>
            <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/10.jpeg">
               <div class="slide_content">
                  <h4>Project name: <b>Construction of Devi Mandir Salkanpur Distt. Sehore</b></h4>
               </div>
            </div>
          </div>
        <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/4.jpg">
                 <div class="slide_content">
                  <h4>Project name: <b>Construction of Geetanjali College in Bhopal</b></h4>
               </div>
            </div>
          </div>
          <div class="slide">
            <div class="cl ">
               <img src="assets/images/slider/project/1/5.jpg">
                <div class="slide_content">
                  <h4>Project name: <b>Construction of Hamidia Arts & Commerce Degree College in Bhopal</b></h4>
               </div>
            </div>
          </div>
          <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/6.jpg">
                <div class="slide_content">
                  <h4>Project name: <b>Construction of Model School 100 Seater Girls Hostel at Amarwara</b></h4>
               </div>
            </div>
          </div>
            <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/11.jpeg">
               <div class="slide_content">
                  <h4>Project name: <b>Construction of Devi Mandir Salkanpur Distt. Sehore</b></h4>
               </div>
            </div>
          </div>
            <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/7.jpg">
               <div class="slide_content">
                  <h4>Project name: <b>Construction & Upgradation work of 100 Bedded civil hospital building with 4F, 6G & 6H type quarter at Begamganj Distt. Raisen</b></h4>
               </div>
            </div>
          </div>
            <div class="slide">
            <div class="cl ">
              <img src="assets/images/slider/project/1/9.jpeg">
               <div class="slide_content">
                  <h4>Project name: <b>Construction of Devi Mandir Salkanpur Distt. Sehore</b></h4>
               </div>
            </div>
          </div>
          
      </div>
      <div class="pagination"></div>
</div>
    
   
<br>


         <!--================ End Our Customer Saying Section =================-->
         
         <!--================ Footer Strip =================-->
         
       
      </div>
      <!--js -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.shuffle.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/global.js"></script>
      <script src="assets/js/swiper.jquery.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
     <script src="assets/js/jquery.barfiller.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js'></script>
<script>
var $st = $('.pagination');
var $slickEl = $('.center');

$slickEl.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  var i = (currentSlide ? currentSlide : 0) + 1;
  $st.text(i + ' of ' + slick.slideCount);
});

$slickEl.slick({
  centerMode: true,
  centerPadding: '200px',
  slidesToShow: 1,
  focusOnSelect: true,
  dots: false,
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});           
</script>


   </body>
</html>