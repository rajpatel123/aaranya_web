<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>{{ $data['title'] ?? "Home: Welcome to home page" }}</title>
  <meta content="" name="descriptison" />
  <meta content="" name="keywords" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
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

  <!-- ======= Header ======= -->
  <main id="main">



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">


        <div class="item slide1 active">
          <div class="right-img">
            <img src="assets/img/banner/right-img-slide1.svg" alt="Los Angeles">
          </div>
          <div class="circle">
            <img src="assets/img/banner/circle.svg" alt="Los Angeles">
          </div>
          <img src="assets/img/banner/slide1-bg.svg" alt="Los Angeles" class="desktop">
          <img src="assets/img/banner/mobile-bg-slide1.svg" alt="Los Angeles" class="mobile">
        </div>

        <div class="item slide2">
          <div class="umbrella">
            <img src="assets/img/banner/umbrella.svg" alt="Los Angeles">
          </div>
          <img src="assets/img/banner/slide2-bg.svg" alt="Los Angeles" class="desktop">
          <img src="assets/img/banner/mobile-bg-slide2.svg" alt="Los Angeles" class="mobile">
        </div>

        <div class="item slide3">
          <div class="animation-img">
            <img src="assets/img/banner/animate-slide3.svg" alt="Los Angeles">
          </div>
          <img src="assets/img/banner/slide3-bg.svg" alt="Los Angeles" class="desktop">
          <img src="assets/img/banner/mobile-bg-slide3.svg" alt="Los Angeles" class="mobile">
        </div>

        <div class="item slide4">
          <div class="women">
            <img src="assets/img/banner/img-women.svg" alt="Los Angeles">
          </div>
          <div class="animation-img">
            <img src="assets/img/banner/animate-slide4.svg" alt="Los Angeles">
          </div>
          <img src="assets/img/banner/slide4-bg.svg" alt="Los Angeles" class="desktop">
          <img src="assets/img/banner/mobile-bg-slide2.svg" alt="Los Angeles" class="mobile">
        </div>

        <div class="item slide5">
          <div class="animation-img">
            <img src="assets/img/banner/animate-slide5.svg" alt="Los Angeles">
          </div>
          <img src="assets/img/banner/slide5-bg.svg" alt="Los Angeles" class="desktop">
          <img src="assets/img/banner/mobile-bg-slide5.svg" alt="Los Angeles" class="mobile">
        </div>


      </div>


    </div>



    <!--</div> </div>-->




    <div class="what-is-arranya home-page-arranya">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img class="what-is-logo" style="display: block;" src="assets/img/light-assets/path27215-0.svg">
          </div>
          <div class="col-md-7">
            <h3 class="hadding-what-is-aarnaya">How can Aaranya help?</h3>
            <p class="text-what-is-arrnya">Aaranya is about healing. Healing that includes wellness packages and provides for rehabilitation through our network of experts for businesses as well as individuals.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="home-c">
      <div class="container">
        <div class="round-sec">

          <div class="row">
            <div class="col-md-12 img-margin">
              <img class="humanity" style="" src="assets/img/cropped-humanity.png">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="text-secround">
                <h2 class="build-a-organization">Build a organization that values humanity</h2>
                <p>Aaranya understands the employees problems and provides solutions for their well-being with modern day therapies for work related problems.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="line2">
              <img src="assets/img/light-assets/path24188.svg">
            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-0 col-md-12 ">

              <div class="white-text-sec-round">
                <h3>App, Library & resources</h3>
                <p>Employees get access to our Knowledge centre. Aaranya offers engagement through its app.<br><br>The app provides One-to-one counselling sessions and more.</p>
              </div>
              <div class="video-blog">
                <div class="sec-img-aa">
                  <img class="width100" src="assets/img/arnya/4-BUILD-20.svg">
                  <p>Blogs</p>
                </div>

                <div class="sec-img-aa">
                  <img class="width100" src="assets/img/arnya/4-BUILD-26.svg">
                  <p>Videos</p>
                </div>

              </div>
              <img class="round-big-girls-img" src="assets/img/arnya/round-video.png">

              <img class="video-sec-color" src="assets/img/arnya/round-video1.png">
            </div>
          </div>

          <div class="year-exp">
            <h3>Years of Expertise</h3>
            <p>Aaranya has been involved with corporates and knows exactly what works. Whats works is trust.</p>
            <p>Expert support with a dedicated team for you.</p>
          </div>


          <div class="costam">
            <h3>Custom Adaptive Techniques</h3>
            <p>Aaranya listens. Take a counselling session. Our experts will figure out what is best for you.</p>
            <p>Multi-disciplinary approach after complete assessment.</p>
          </div>

          <div class="line12">
            <img src="assets/img/arnya/4-BUILD-15.svg">
          </div>

          <img class="white-desi-sec" src="assets/img/arnya/4-BUILD-11.svg">

          <div class="man-down-side">
            <img src="assets/img/arnya/man-dowu-side.png">
          </div>


          <div class="icon-m">
            <div class="aa-service">
              <img class="width100" src="assets/img/arnya/4-BUILD-19.svg">
              <p>Aaranya Service</p>
            </div>



            <div class="aa-service1">
              <div class="sec-img-aa">
                <img width="100%" src="assets/img/light-assets/path11619.svg">
                <p class="font17">Aaranya <br>Service</p>
              </div>

              <div class="sec-img-aa">
                <img class="imglog-img" style="z-index: 9;position: relative;" width="100%" src="assets/img/arnya/4-BUILD-21.svg">
                <p class="font17-2">Aaranya apps</p>
              </div>
            </div>
          </div>


          <div class="last-round-c">
            <h3>Employee <br> experience</h3>
            <p>Employees health, happiness and work <br>productivity are directly linked.</p>
          </div>
          <br><br>
        </div>
      </div>
    </div>


    <div class="making">
      <div class="container">

        <div class="row">
          <div class="col-md-7">
            <h3>Making corporate life healthier</h3>
          </div>
          <div class="col-md-5">
            <p>With our proven and strategic resources, plus engagement programs, We take the stress out of the workplace.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="home-c">
      <div class="container">
        <div class="number">

          <div class="row">
            <div class="col-md-12">
              <h2 class="the-number-speak">The numbers speak</h2>
              <p class="font17-3">Aaranya apps participants report a boost in general wellness and healthier habits.</p>
            </div>
          </div>
          <div class="row box-m">
            <div class="nubmer-sec-scroll">
              <div class="box-level">
                <div class="color-number-box">
                  <p>Saw improvements in mental health</p>
                  <h1 class="num"><span class="counter">95</span><sub>%</sub></h1>

                </div>

              </div>

              <div class="box-level">
                <div class="color-number-box">
                  <p>Decrease in sick leaves beacause of EAP
                  </p>
                  <h1 class="num"><span class="counter">33</span><sub>%</sub></h1>


                </div>

              </div>

              <div class="box-level">
                <div class="color-number-box">
                  <p>Decrease in Medical <br> costs
                  </p>
                  <h1 class="num"><span class="counter">07</span><sub>%</sub></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="trust-by">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 trusted-heading">
            <h1 class="hadding-trusted">Trusted <span class="by-many" style="">by many.</span></h1>

          </div>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 trusted-info">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-4.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-7.svg"></div>

              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-14.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-6.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-9.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-3.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-10.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-11.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-8.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-2.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-5.svg"></div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mobile-img"><img src="assets/img/arnya/7-trust-12.svg"></div>











            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid">

      <section id="about" style="padding: 0px;">
        <div class="about-box">


          <!-- <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div> -->

          <div class="row content" data-aos="fade-up">

            <div class="col-lg-6 therapies-sect">
              <h1 class="hadding-top">Therapies</h1>
              <p class="seriviceshead">& Services</p>


            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 ledi-background">
              <h4>
                Towards a sustainable corporate work culture
              </h4>
              <p>Unlock the most of the workforce potential with the following packages.</p>

            </div>
          </div>

        </div>

      </section>














      <!-- ======= Cta Section ======= -->



    </div>



    <section style="overflow:revert;" id="services" class="services">
      <div class="container">
        <div class="services-box">
          <div class="row">
            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5 mt-lg-0 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/arnya/9-icons-4.svg">
                <h4 class="title">Computer Related Injuries</h4>
                <p>injury-free work habits</p>
              </div>
            </div>


            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5 mt-lg-0 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/arnya/9-icons-7.svg">
                <h4 class="title">Family Happiness & Health</h4>
                <p>Online Counselling, Healthy Child Rearing Practices, Home visit counselling sessions, Lifestyle Advice,Diet and Nutrition, Fitness programs,teenage Counselling</p>
              </div>
            </div>


            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5 mt-lg-0 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/arnya/9-icons-10.svg">
                <h4 class="title">Counseling <br>and EAP</h4>
                <p>Trauma Debriefings Strees Management . Anxiety and
                  Depression Couonselling Anger Management Grief counselling Life Stress Management .Psychological Assessments</p>
              </div>
            </div>

            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5 mt-lg-0 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/arnya/9-icons-11.svg">
                <h4 class="title">Outdoors and Activities</h4>
                <p>Travel and Escape Nature relaxtion therapies Explore forests,mountains by Hiking, Rock Climbing, cycling</p>





              </div>
            </div>

            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/arnya/9-icons-8.svg">
                <h4 class="title">Stress Management</h4>
                <p>Expert Hair and Skin Counsultation, healing by alternative treatments, stress management</p>

              </div>
            </div>

            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/arnya/9-icons-9.svg">
                <h4 class="title">General Health Management </h4>
                <p>Management of Diabetes Cholestrol , BP,Gastrp-intestinal, Fitness Programs and Challenges Diet and Nutrition, Lifestyle Advice</p>

              </div>
            </div>

            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/arnya/9-icons-9.svg">
                <h4 class="title">Senior Professionals Package</h4>
                <p>Core Programs, Fitness Programs, Diet and Nutrition , Persobal Health, Lifestyle Advice</p>

              </div>
            </div>

            <div class="col-xl-3  col-lg-3 col-md-6  col-sm-12 mt-5">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/arnya/9-icons-6.svg">
                <h4 class="title">Women Wellness</h4>
                <p>counselling, stress management, healing by alternative therapies and education</p>

              </div>
            </div>




          </div>
        </div>
      </div>
      <br>
    </section>








    <section style="padding: 0px;" id="cta" class="cta1">



      <div class="testimonial-top">
        <div class="container">




          <section style="padding: 0px; background:none;" class="testimonial text-center">
            <div class="container1">


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




        </div>


        <div class="container">
          <div class="packages-box">
            <div class="row" data-aos="zoom-out">


              <div class="col-lg-7 col-md-7 text-center text-lg-left">
                <h2 class="hadding-Packages" style="    ">Packages</h2>
                <div class="row">
                  <div class="col-md-5">
                    <img class="last-img-icon" width="90px" style="float: right;" src="assets/img/arnya/11-Packages-4.svg">
                  </div>
                  <div class="col-md-7">
                    <h4>Our Plans</h4>
                    <p class="color-hadding-b">For Businesses</p>
                    <p style="fontw700">We provide worldclass wellness programs for companies who value their employees</p>
                    <button class="btn-exp-sec">Explore</button>

                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-5">
                    <img class="last-img-icon" width="90px" style="float: right;" src="assets/img/arnya/11-Packages-5.svg">
                  </div>
                  <div class="col-md-7">
                    <h4>Treatment</h4>
                    <p class="color-hadding-b">For Individuals</p>
                    <p style="fontw700">Our valuable research and expert consultations aren't limited to the industry. Tap into healing now for all.</p>
                    <button class="btn-exp-sec">Explore</button>
                    <br><br><br>
                  </div>
                </div>

              </div>

              <div class="col-lg-5 col-md-5 cta-btn-container text-center">
                <img style="margin-top:120px;" width="100%" src="assets/img/arnya/g13972.svg">

              </div>

            </div>

          </div>
        </div>
    </section>




    <div class="container">
      <div style="background-image: url('assets/img/arnya/g16948.svg');background-repeat: no-repeat;background-position:left bottom; background-color: #fff;">
        <div class="patner-area">
          <div class="col-md-6 patner-sec-margin" style="text-align: center;color: #39695E; ">
            <p class="last-hadding-aran">Partner</p>
            <p class="with_Aaranya_sec">with Aaranya</p>
            <p class="for-business-hadding">for businesses</p>
            <a href="" class="hover1 btn-hover" style="">GET A DEMO</a>
          </div>

          <div class="col-md-6 last-secaa">

            <div class="last-sec-img-text" style="text-align: center;margin: auto;">
              <img width="121px" src="assets/img/arnya/12-Partner-4.svg">
              <p class="tex-last-want">Want to learn more?</p>
              <p>Strategies for a healthier workforce.</p>
              <p>Expert rehabilitation programs</p>
              <p>Employees benefits and community programs</p>
              <p>Making the most of your workforce potential</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main><!-- End #main -->


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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
  <script src='https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js'></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
    $('.counter').addClass('animated fadeInDownBig');
    $('h3').addClass('animated fadeIn');
  </script>

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
  <!-- <script>
      function darkmode() {
        $('body').addClass('dark-solution');
        localStorage.setItem("mode", "button.dark-nave");
      }



      function nodark() {
        $('body').removeClass('dark-solution');
        localStorage.setItem("mode", "button.light-nave");
      }

      if (localStorage.getItem("mode") == "button.dark-nave")
        darkmode();
      else
        nodark();

      $('#mode').change(function() {

        if ($(this).prop('checked')) {
          darkmode();
        } else {
          nodark();
        }

      });
    </script> -->
</body>

</html>