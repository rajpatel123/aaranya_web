<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $data['title'] ?? "title" }}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet" />
  <!-- Vendor CSS Files -->
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/new.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body <?php if (Session::has('dark_mode')) {
        echo ("class='dark-solution'");
      } ?>>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top   header-transparent ">
    <div class="container">
      <div class="header justify-content-between d-flex">
        <div class="logo">
          <a href="{{ URL::to('/') }}"><img src="assets/img/arnya/aaranya-logo.svg" /></a>
          <!-- <a href="index.html"><img src="assets/img/arnya/aaranya-logo.svg" /></a> -->
          <a class="top-btn-hover" href="#">For Business</a>
        </div>
        <nav class=" nav-menu d-none d-lg-block">
          <ul>
            <li class="hover-btn-header hover1"><a href="{{url('/book-a-demo')}}">Get A Demo</a></li>
            <li><a href="{{url('/solutions')}}">Solutions</a></li>
            <li><a href="{{url('/plans')}}">Plans</a></li>
            <li><a href="{{url('/about')}}">About Us</a></li>
            <li class="drop-down"><img style="width:25px; margin-top: 6px;" src="assets/img/arnya/settings-icon.svg" />
              <ul>
                <li><button class="light-nave">Light Mode</button></li>
                <li><button class="dark-nave">Dark Mode</button></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main id="main">

    <!--=================================================Section 1 ===================================================================--------------------------->

    <div class="top-img book-a-demo1">
      <div class="container">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
          <h1>Book a Demo</h1>
          <h2>It's the experience that counts.</h2>
          <p>We would be more than happy to give you a<br>presentation of Aaranya's programs that<br>you and your business need.</p>
          <a href="#" class="get-start hover1">GET STARTED</a>
        </div>
      </div>
    </div>

    <!--=================================================Section 1 ends==================================================================--------------------------->

    <div class="graphic1 get-a-day">
      <h2>Get a 5 day trial at your convenience.</h2>
      <p>Aaranya is confident in what we preach. We believe in a need based model.<br>We never force you with problems. We identify the causes of your problems<br>and help you heal with our expertise.</p>

    </div>
    </div>

    <div class="mountains"></div>


    <!--===================================================section 2========================================================================================-->



    <div class="redefine">
      <div class="container">
        <div class="row mart20">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="space-around">
              <div class="left-box1">
                <h2>Healing Redefined</h2>
                <p>Wellness Concepts that<br>involve nature have been<br>always around us, just got<br>redefined.</p>
                <h2 class="paddt70">Nature derived</h2>
                <p class="paddb120">Studies have linked the importance ofspending time around green<br>spaces which positively impacts mental wellbeing.</p>
                <p class="paddb120">Corporate burnouts can be eased awayby taking breaks in the outdoors.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padd-tp30">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padd-none">
                <div class="space-around2">
                  <div class="box-1 common-css">
                    <h2>1. Physical health</h2>
                    <p>Vitamin D: Right amount of<br>sunlight lowers risk of cancers,<br>hypertension, strengthens<br>immunity (kids develop a good<br>immune system outdoors),<br>provides opportunities for<br>fitness exercise, & better diet</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padd-none">
                <div class="space-around2">
                  <div class="box-2 common-css">
                    <h2>2. Physiological</h2>
                    <p>Stress Reduction, Improves<br>mood and reduces depression,<br>good mood helps enhance<br>pleasure, reduces mental fatique</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row ">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padd-none">
                <div class="space-around2">
                  <div class="box-3 common-css">
                    <h2>3. Spiritual</h2>
                    <p>Nature unwinds minds to<br>find a state of calm. This<br>sparks more creativity and<br>interest in the workplace.<br>Children and the old benefit<br>the most for training their<br>fragile minds to be one with<br>nature for their better future</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padd-none">
                <div class="space-around2">
                  <div class="box-4 common-css">
                    <h2>4. Community</h2>
                    <p>Its well known fact that<br>communities in natural<br>settings have less crime<br>than in cities. Strengthens<br>neighborhood ties. Improves<br>childrens social interactions.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="about-p">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 demo-page">
            <h1>Learn</h1>
            <h2>about programs & therapies</h2>
            <p>The demonstration will help understand</p>
            <div class="desc-ul">
              <ul>
                <li><img src="assets/img/demo/icon.png" style="width:4%">The concept of wellness</li>
                <li><img src="assets/img/demo/icon.png" style="width:4%">Why employee wellness enhances productivity.</li>
                <li><img src="assets/img/demo/icon.png" style="width:4%">Why wellness will become a norm in the coming years.</li>
                <li><img src="assets/img/demo/icon.png" style="width:4%">Know how about our rehabilitation programs and processes.</li>
                <li><img src="assets/img/demo/icon.png" style="width:4%">Why many companies have partnered with us succcess stories</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12" style="">
            <div class="inner request-form">
              <form action="{{ url('/send-mail') }}" method="POST">
              @csrf
                <div class="form-wrapper">
                  <input name="first_name" type="text" class="form-control2" placeholder="First Name*" required>
                </div>
                <div class="form-wrapper">
                  <input name="last_name" type="text" class="form-control2" placeholder="Last Name*" required>
                </div>
                <div class="form-wrapper">
                  <input name="email" type="email" class="form-control2" placeholder="Work Email*" required>
                </div>
                <div class="form-wrapper">
                  <input name="mobile" type="number" class="form-control2" placeholder="Phone Number">
                </div>
                <div class="form-wrapper">
                  <input name="company_name" type="text" class="form-control2" placeholder="Company Name*" required>
                </div>
                <div class="form-wrapper">
                  <input name="company_size" type="text" class="form-control2" placeholder="Company Size*" required>
                </div>

                <center> <button type="submit">REQUEST A DEMO</button></center>

                <div class="forn-desc">
                  <p>We will give you a call</p>
                </div>
              </form>

            </div>

          </div>

        </div>
      </div>
    </div>
    <section class="testimonial">
      <div class="container">
        <div id="testimonial4" class="testi-slider carousel slide" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
              <div class="row testimonial-p">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <p><img src="assets/img/quote-symbol.svg">It works! I am thoroughly impressed with the goodwill USP of the company and effective results that has brought to me and mycolleagues. I encourage everyone to use their services for their well-being.</p>
                  <span class="name-and-post">
                    <h1>-Adarsh Mishra</h1>
                    Director & CHRO<br>
                    Panasonic India
                  </span>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <img src="assets/img/image5587.png" class="img-top">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row testimonial-p">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <p><img src="assets/img/quote-symbol.svg">The realities of today has its consequences, hence the need is real. I am glad Aaranya is helping out businesses towards a healthier tomorrow.</p>
                  <span class="name-and-post">
                    <h1>-Rajneesh Gupta</h1>
                    Senior Vice President<br>
                    Honda India Power Products Ltd.
                  </span>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 testi-pic">
                  <img src="assets/img/image5589.png">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row testimonial-p">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <p><img src="assets/img/quote-symbol.svg">Many companies offer scores of different services. Aaranya offers positivity to life. We are glad to have these kind of wellness services at our premises. People really loved it.</p>
                  <span class="name-and-post">
                    <h1>-Sushil Chandra Mishra</h1>
                    Chairman and Managing<br>
                    Director of Oil India Limited
                  </span>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 testi-pic">
                  <img src="assets/img/image5591.png">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row testimonial-p">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <p><img src="assets/img/quote-symbol.svg">Aaranya Wellness has perhaps changed my perspective on wellness, healing and healthy lifestyle without medicine and surgery.</p>
                  <span class="name-and-post">
                    <h1>-R. P. Singh</h1>
                    Director (HR & Legal) at IFFCO<br>
                    Panasonic India
                  </span>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 testi-pic">
                  <img src="assets/img/image5593.png">
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#testimonial4" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>

    </section>
    <!--========================================================================section 5 ends================================================================-->





    <!--main content ends-->


    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: justify; margin: 0px; font-size: 25px; font-style: normal;">Quicklinks</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <h4>Business</h4>
                <li><a href="#">Aaranya for Corporates</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Pricing</a></li>
              </div>
              <div class="col-md-6">
                <h4>Company</h4>
                <li><a href="#">Get a Demo</a></li>
                <li><a href="#">Contact </a></li>
                <li><a href="#">About</a></li>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="socal-media"> <i class="fa fa-facebook-f"></i> <i class="fa fa-instagram"></i> <i style="font-size: 23px;" class="fa fa-youtube-play"></i> </div>
            <br />
            <div class="link-address">
              <img src="assets/img/light-assets/g11983-8.png" width="160px">
              <p class="add-f">F -1/405, DESIGN ARC E-HOME, <br> HRA - 8 INDUSTRIAL AREA SURAJPUR SITE C,<br>GREATER NOIDA <br>Gautam Buddha Nagar - 201306<br> Uttar Pradesh - India</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      $(document).ready(function() {
        $("button.light-nave").click(function() {
          $("body").removeClass("dark-solution");
          $.ajax({
            type: "POST",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('darkmode.unset') }}",
            success: function() {}
          });
        });
        $("button.dark-nave").click(function() {
          $("body").addClass("dark-solution");
          $.ajax({
            type: "POST",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('darkmode.set') }}",
            success: function() {}
          });
        });
        $(".drop-down img").click(function() {
          $(this).parent().toggleClass("active");
        });
      });
    </script>

</body>

</html>