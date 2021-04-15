<!doctype html>
<html lang="en">
  <head>
  
  <!-- this is link for any type of logo--> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-acol-sm-3.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>web</title>
  </head>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
<style>
.headmenu
{
  margin-left:350px;
}
.headright
{
  margin-left:400px;

}

.imglogo
{
  margin-left:280px;
  
}
.card  
{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border: px solid #dddddd;
  text-align: left;
  padding: 15px;
}
/* Make the image fully responsive */
.carousel-inner img {
    width: 100%;
    height: 100%;
  }
  *,
::after,
::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  line-height: 1.5;
  font-size: 0.875rem;


}
ul {
  list-style-type: none;
}
a {
  text-decoration: none;
  cursor: pointer;
}

.nav-center {
  padding: 1em;
  background:#e8e8e8;
  width: 100%;
  /*   align-items:center; */
  /*   justify-content: space-between; */
  width: 100%;
}

.nav-header {
  display: flex;
  justify-content: space-between;
}

.nav-header img {
  cursor: pointer;
  height: 50px;
  float: left;
  margin: 1em;
}

.links {
  display: flex;
  flex-direction: column;
  /*   height: 80vh; */
  transition: all 1s ease-in-out;
  height: 0;
  overflow: hidden;
}

.show-links {
  height: 80vh;
  transition: all 1s ease-in-out;
}
.links li {
  font-size: 1.5rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 1em 1em;
  margin: auto;
}
.links li a {
  color: #121212;

  transition: 0.1s border linear;
}
.links li a:hover {
  border-bottom: black 4px solid;
}
.social-icons {
  display: flex;
  height: 0vh;
  overflow: hidden;
}

.show-icons {
  height: 10vh;
  align-items: center;
  border-top: 2px solid black;
  overflow: visible;
}
.social-icons li {
  margin: auto;

  font-size: 1.5rem;
  transition: all 0.5s linear;
}

.social-icons li a {
  padding: 0.4em;
  color: black;
  transition: all 0.5s ease;
  border-radius: 50%;
}

.social-icons li a:hover {
  background: black;
  color:green;
}

.nav-toggle {
  font-size: 1.5rem;
  color:lightblue;
  background:black;
  border-color: transparent;
  transition: 1s all linear;
  cursor: pointer;
  justify-self: flex-end;
  outline: none;
}
.nav-toggle:hover {
  color: black;
  transform: rotate(90deg);
  outline: none;
}

@media screen and (min-width: 800px) {
  .nav-toggle {
    display: none;
  }

  .nav-header {
    display: block;
  }

  .links {
    flex-direction: row;
    height: auto;
    display: flex;
  }
  .links li {
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 1em 1em;
    margin: auto;
  }
  .social-icons {
    display: flex;
    height: 100%;
    align-items: center;
    border: none;
    padding:1em;
  }

  .social-icons li {
    margin: auto;

    font-size: 1.2rem;
  }

  .nav-center {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
}

</style>
<body>
<!-- header start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

<nav>
  <div class="nav-center">
    <!-- nav header -->
    <div class="nav-header">
      <img src="https://i.postimg.cc/76jNr6VY/1982637.jpg" class="logo" alt="logo" />
      <button class="nav-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <!-- links -->
    <ul class="links">
      <li>
        <a href="index.html">home</a>
      </li>
      <li>
        <a href="about.html">about</a>
      </li>
      <li>
        <a href="projects.html">projects</a>
      </li>
      <li>
        <a href="contact.html">contact</a>
      </li>
    </ul>
    <!-- social media -->
    <ul class="social-icons">
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
      <li><a href="https://www.instagram.com">
      <i class="fab fa-instagram"></i>
      </a>
      </li>
      
    </ul>
  </div>
</nav>


<!-- header end-->


<!-- slider start-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/svg/manishlogo.jpg" alt="Los Angeles" width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="/svg/manishlogo.jpg" alt="Chicago" width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="/svg/manishlogo.jpg" alt="New York" width="800" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- slider end-->

<!-- about aarayna start-->
<div style="background-color:#fbfbfb38; padding-top:40px; padding-bottom:60px;">
<div class="container">
<div class="row">
<div class=" col-lg-6 col-xl-6">
<h1>About  Aaranya</h1><p>Left aligned text on viewports sized SM (small) or wider.</p>
<p>Left aligned text on viewports sized MD (medium) or wider.</p>
<p>Left aligned text on viewports sized LG (large) or wider.</p>
<p>Left aligned text on viewports sized XL (extra-large) or wider.</p>
</div>
<div class=" col-lg-6 col-xl-6">
<img src="/svg/manishlogo.jpg"   width="250" height="150" alt="...">
</div>
</div>
</div>
</div>
<!-- about aarayna end-->
<!-- services  section start-->
<div style="background-color:#9d9fa0; padding-top:40px; padding-bottom:60px;">
<div class="jumbotron text-center">
  <h1>Services</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
<p>incididunt ut labore et dolore magna aliqua</p>
</div>

<div class="container">
<div class="row">
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">
 
<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
<div class="col-sm-3">

<div class="card" style="width: 16rem;">
  <img class="card-img-top" src="/svg/manishlogo.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-text">Women wellness </h6>
   </div>
   </div>
</div>
</div>
</div>
</div>

<!-- services  section end-->
<!-- why you need us section start-->

<div style="background-color:lightgreen;">
<div claas="container">
<div class="row">
<div class="col-md-12">

<div style="text-align:center; padding-top:40px; padding-bottom:60px;">
<h1>Why you need us</h1>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
</p>
<iframe src="/svg/201209_02_Covid Headlines_4k_007.mp4" width=400px; heigth=200px;  title="W3Schools Free Online Web Tutorials">
</iframe>
</div>
</div>
</div>
</div>
</div>

<!-- why you need us section end-->
<!-- featured video  section start-->
<div class="container">
<div class="row">
<div claas="col-md-12">
</div>
</div>
</div>
<!-- featured video  section end-->
<!-- inspiring   section start-->
<div style="background-color:#acb0b1;">
<div claas="container">
<div class="row">
<div class="col-md-12">

<div style="text-align:center; padding-top:60px; padding-bottom:60px;">
<h1>Inspiring for your life</h1>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do adipiscing elit, sed do</p>
<p><button style="color:white;background-color:black; margin:0px; border:none; width:150px;">View More</button></p>
</div>
</div>
</div>
</div>
</div>
<!-- inspiring   section end-->
<!-- meet our customer   section start-->
<br>
<br>

 <h1 class="text-center">Meet Customer Satifaction</h1>
 <br>
 <br>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
<p class="text-center">incididunt ut labore et dolore magna aliqua</p>
<br>
<br>
<!-- meet our customer   section end-->
<!-- download app section start-->
<div style="background-color:#dbe4db;">
<div claas="container">
<div class="row">
<div class="col-md-12">

<div style="text-align:center; padding-top:60px; padding-bottom:60px;">
<h1>Download APP</h1>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do adipiscing elit, sed do</p>
<p><button style="color:white;background-color:black;  border:none; width:200px;">Play Store</button></p>
<img src="/svg/iphone-12-vector-body-01.png" alt="">
</div>
</div>
</div>
</div>
</div>
<!-- download app section end-->
<!-- Experencenced healer to save you best start-->

<div style="background-color:lightgreen;">
<div claas="container">
<div class="row">
<div class="col-md-12">

<div style="text-align:center; padding-top:60px; padding-bottom:60px;">
<h1>Expericenced Healer To Serve You Best</h1>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do adipiscing elit, sed do</p>

</div>
</div>
</div>
</div>
</div>
<!-- Experencenced healer to save you best start-->

<!--  Frequently Ask Question start  section-->
<div style="background-color:#acb3b5; padding:60px">
<div class="container"> 
<div class="row">
<div class="col-md-6">

<h5>
Do you have any quesiton?</h5>
 <h5>Please
ask here we ready to support</h5>
<p>If your question is not list here, please feel</p>
<p>free to make a manual support.</p>
</div>
<div class="col-md-6">
<p>1.How much does it cost to be a credit card merchant?</p>

<p>2.How can I open a merchant account?</p>

<p3>.How much does it cost to be a credit card merchant?</col-sm-3.How much does it cost to be a credit card merchant?</p>

<p>5.How much does it cost to be a credit card merchant?</p>

</div>
</div>
</div></div>

<!--  Frequently Ask Question end  section-->
<!-- subsciber news section start -->
<div style="background-color:#7f8288; padding:60px;">
<div class="container">
<div class="row">
<div class="col-md-9">
<h2>Subscribe to our weekly news Subscribe letter</h2>
</div>
<div class="col-sm-3">
<button style="color:white; background-color:black;  padding:8px; border:none; width:200px;">Subscribe</button>
</div>
</div>
</div></div>

<!-- subs news end-->

<div style="background-color:#a6b9a6; padding:60px;">
<div class="container"> 
<div class="row">
<div class="col-md-8">
<h3>Contact  US </h3>
<p>123 Mockup Street</p>
<p>San Francisco, CA 10000
</p>
<p>(555) 555-555</p>
<p>Copyright © Date Name. All rights reserved.</p>
<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Jpr technosoft</a></p>
</div>
<div class=col-md-3>
<ul class="social-icons">
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
      <li><a href="https://www.instagram.com">
      <i class="fab fa-instagram"></i>
      </a>
      </li>
    </ul>
</div>
</div>
</div>
</div>
<!--footer section end-->
</body>
<script>
const navToggle = document.querySelector(".nav-toggle");
const links = document.querySelector(".links");
const socialIcons = document.querySelector(".social-icons");

navToggle.addEventListener("click", function () {
  console.log(links.classList);
  links.classList.toggle("show-links");
  socialIcons.classList.toggle("show-icons");
});
</script>
</html>