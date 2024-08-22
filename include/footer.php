<footer class="an-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <img src="assets/img/light-logo.png" class="an-footer-logo">
        </div>
        <div class="col-lg-2">
          <h4>Company</h4>
          <ul>
            <li>
              <a href="about-us.php">About us</a>
            </li>
            <li>
              <a href="javascript:;"> Privacy policy</a>
            </li>
            <li>
              <a href="javascript:;">Terms of service</a>
            </li>
            <li>
              <a href="javascript:;">How it works</a>
            </li>
            <li>
              <a href="javascript:;">Features</a>
            </li>
            <li>
              <a href="javascript:;">Pricing</a>
            </li>
            <li>
              <a href="javascript:;">Become affiliate</a>
            </li>
            <li>
              <a href="javascript:;">Student discount</a>
            </li>
            <li>
              <a href="javascript:;">Reviews</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h4>Product</h4>
          <ul>
            <li>
              <a href="javascript:;">Windows</a>
            </li>
            <li>
              <a href="javascript:;">macOS</a>
            </li>
            <li>
              <a href="javascript:;">iOS</a>
            </li>
            <li>
              <a href="javascript:;">Android</a>
            </li>
            <li>
              <a href="javascript:;">Chrome extension</a>
            </li>
            <li>
              <a href="javascript:;">Firefox extension</a>
            </li>
            <li>
              <a href="javascript:;">Edge extension</a>
            </li>
            <li>
              <a href="javascript:;">Opera extension</a>
            </li>
            <li>
              <a href="javascript:;">Safari extension</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4>Help & Resources</h4>
          <ul>
            <li>
              <a href="javascript:;">Contact us</a>
            </li>
            <li>
              <a href="javascript:;">Help center</a>
            </li>
            <li>
              <a href="javascript:;">Blog</a>
            </li>
            <li>
              <a href="javascript:;">What is password manager</a>
            </li>
            <li>
              <a href="javascript:;">Free password manager</a>
            </li>
            <li>
              <a href="javascript:;">200 worst passwords</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h4>Tools</h4>
          <ul>
            <li>
              <a href="javascript:;">Username generator</a>
            </li>
            <li>
              <a href="javascript:;">Password generator</a>
            </li>
            <li>
              <a href="javascript:;">Password strength checker</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="an-bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <p>© 2024 Lockmypass</p>
        </div>
        <div class="col-lg-3">
          <div class="an-social">
            <span>Follow us on</span>
            <a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="javascript:;"><i class="fa-brands fa-instagram"></i></a>
            <a href="javascript:;"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="javascript:;"><i class="fa-brands fa-linkedin"></i></a>
            <a href="javascript:;"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="app-warp">
          <span>
            <img src="assets/img/apple-icon.png" > Download on the App Store
          </span>
          <span>
            <img src="assets/img/play-icon.png" > Get it on Google Play
          </span>
        </div>
        </div>
        <div class="col-lg-2">
          <div class="an-footer-select-wrap">
            <i class="fa fa-angle-down"></i>
          <select class="an-footer-select">
            <option>Middle East</option>
            <option>Asia</option>
            <option>Europe</option>
            <option>North America</option>
            <option>South America</option>
          </select>
        </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script>
    
$('.testi-about').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
});
    $('.an-testimonial-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
      nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>"
    });

    $('#navbarSupportedContent').collapse('hide');


$('.navbar-toggler').click(function(){
    $('.menu-ovalay').toggleClass('active')
  })
  $('.menu-ovalay').click(function(){
    $(this).removeClass('active')
    $('.navbar-collapse').removeClass('show')
  })

  </script>
</body>

</html>