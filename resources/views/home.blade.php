<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>web</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: lightblue;
}

.topnav a {
  float: left;
  color: grey;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: grey;
}

.topnav a.active {
  background-color:lightgreen;
  color: white;
}

.topnav-right {
  float: right;
}
.topnav-top-left
{
    
    margin-left:30px;
}
.bodysection
{
    text-align:center:
}
</style>
</head>
<body>

<div class="topnav">

<div class="top-left">
<a href="">logo</a>
</div>
  <a class="active" href="#home">Home</a>
  <a href="#">About Us</a>
  <a href="#">Services</a>
  <a href="#">Get App</a>
  <a href="#">Contact Us</a>
  <div class="topnav-right">
    <a href="#search"><i class="fab fa-facebook-f"></i></a>
    <a href="#about">Instagram</a>
    <a href="#search">Linkdin</a>
    <a href="#about">Twitter</a>
    
  </div>

      </div>

     <div style="padding-left:16px">
  
  
</div>

<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/resources/views/photos/images.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="/resources/views/photos/images(1).jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="/resources/views/photos/wolf-647528__340.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</body>
</html>
