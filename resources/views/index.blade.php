<!DOCTYPE html>
<html lang="en">

<head>

  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Jitdee</title>
  <link rel="icon" type="image/x-icon" href="/images/logo1.1.png">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="logo"><a href="{{ url('/') }}"><img src="images/logo1.png"></a></div>
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <div class="togle_3">
                @if (Route::has('login'))
                <div class="menu_main">

                  <div class="padding_left0">
                    @auth
                    <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/') }}">หน้าแรก</a>
                    <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                    @else
                    <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('login') }}">เข้าสู่ระบบ</a>

                    <span class="padding_left0"></span> @if (Route::has('register'))<a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('register') }}">ลงทะเบียน</a>@endif
                    @endauth
                  </div>



                </div>
                @endif

              </div>
              <div id="myNav" class="overlay w3-hover-blue">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <div class="overlay-content ">
                  <div class="container">
                    @auth
                    <h3 class="w3-text-white">ยินดีตอนรับ</h3>
                    <h5 class="w3-text-white">{{ Auth::user()->username }}</h5>
                    <hr>
                    <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/') }}">หน้าแรก</a>

                    <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/day1') }}">บันทึกความรู้สึก</a>
                    <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('services') }}">ประวัติบันทึกความรู้ศึก</a>
                    <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('about') }}">เกี่ยวกับ</a>

                    <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('team') }}">ทีมผู้พัฒนา</a>
                    <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('contact') }}">ติดต่อสอบถาม</a>
                    <hr>
                    <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                    @else
                    <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('login') }}">เข้าสู่ระบบ</a>

                    <span class="padding_left0"></span> @if (Route::has('register'))<a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('register') }}">ลงทะเบียน</a>@endif
                    @endauth

                  </div>
                </div>
              </div>
              <span class="navbar-toggler-icon"></span>
              <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h1 class="banner_taital">Get to know</h1>
            <h1 class="banner_taital_1">your ideas best</h1>
            <p class="banner_text">Get rid of potential sensation problems.</p>
            <div class="contact_bt"><a href="{{ url('/day1') }}">start <span class="contact_padding"><img src="images/contact-icon.png"></span></a></div>
          </div>
          <div class="col-sm-2">
            <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
          </div>
          <div class="col-sm-5">
            <div><img src="images/1.png" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </div>
  <!-- header section end -->
  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Our</span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Services</span></h1>
      <p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- services section start -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img src="images/img-2.png" class="image_2"></div>
        </div>
        <div class="col-md-6">
          <h1 class="services_taital"><span>About </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Cleaning</span></h1>
          <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
          <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img src="images/contact-icon1.png"></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- choose section start -->
  <div class="choose_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Why </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Choose Us</span></h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
      <div class="choose_section_2 layout_padding">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">12004+</h1>
              <h4 class="client_text">Our clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">10004+</h1>
              <h4 class="client_text">Happy clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">804+</h1>
              <h4 class="client_text">Supports</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">905+</h1>
              <h4 class="client_text">Awards</h4>
            </div>
          </div>
        </div>
        <div class="image_3"><img src="images/img-3.png"></div>
        <div class="get_bt"><a href="#">Get A quote</a></div>
      </div>
    </div>
  </div>
  <!-- choose section end -->
  <!-- team section start -->
  <div class="team_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Our </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Team</span></h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
      <div class="team_section_2 layout_padding">
        <div class="container">
          <div class="images_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="images/img-4.png"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">Consectetur</h2>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
          <div class="images_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">magna aliqua</h2>
                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="images/img-5.png"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="images_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="images/img-6.png"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">Aonsectetur</h2>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
          <div class="images_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">Nonsectetur</h2>
                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="images/img-7.png"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- team section start -->
  <!-- newsletter section start -->
  <div class="newsletter_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="newsletter_text">Newsletter</h1>
          <p class="tempor_text">Tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="col-md-6">
          <div class="mail_bt_main">
            <input type="text" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
            <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="footer_main">
        <div class="footer_left">
          <h1 class="contact_taital"><span>Contact </span> <img src="images/icon-2.png"> <span>Us</span></h1>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">Locations</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_15">+71 9876543210</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">demo@gmail.com</span></a></div>
        </div>
      </div>
      <div class="contact_section">
        <div class="row">
          <div class="col-md-6">
            <div class="mail_section">
              <input type="" class="email_text" placeholder="Name" name="Name">
              <input type="" class="email_text" placeholder="Email" name="Email">
              <input type="" class="email_text" placeholder="Phone Number" name="Phone Number">
              <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
              <div class="send_bt"><a href="#">send</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon1.png"></a></li>
                <li><a href="#"><img src="images/linkden-icon1.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon1.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design">Free html Templates</a></p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function() {

        $(this).addClass('transition');
      }, function() {

        $(this).removeClass('transition');
      });
    });
  </script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>