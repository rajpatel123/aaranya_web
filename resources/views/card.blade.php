<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Dosis', sans-serif;
  line-height: 1.5rem;
  background-color:white;
}

header {
  text-align: center;
  padding: 1.5rem;
  margin: 0.7rem;
  font-size: 1.2rem;
  line-height: 2.3rem;
  color: #cccccc;
}

a {
  text-decoration: none;
  color: #ffffff;
}

.container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  max-width: 1100px;
  margin: auto;
}

.card {
  position: relative;
  min-width: 250px;
  max-width: 25%;
  height: 350px;
  color: #ffffff;
  margin: 0.5rem auto;
  border-radius: 20px;
}

.card-content {
  display: flex;
  flex-direction: column;
  position: relative;
  top: 8%;
  padding: 1rem;
  margin: auto;
  line-height: 1.6;
}

.card-content h3 {
  font-size: 1.8rem;
  text-align: center;
  line-height: 2rem;
  padding: 1rem;
  transition: all 0.5s ease;
}

.card-content p,
.card-content .btn {
  display: none;
}

/* Card image */
.container .card-1 {
  background: url(https://source.unsplash.com/tpXhecfsGVg/1000x1500) no-repeat center center/cover;
}

.container .card-2 {
  background: url(https://source.unsplash.com/qmnpqDwla_E/800x450) no-repeat center center/cover;
}

.container .card-3 {
  background: url(https://source.unsplash.com/sPPIyVH1DHk/873x1310) no-repeat center center/cover;
}



/* Add a dark overlay for text visibility */
.card::before {
  content: '';
  position: absolute;
  background: rgba(0, 0, 0, 0.4);
  height: 100%;
  width: 100%;
  border-radius: 20px;
  transition: all 0.5s ease;
}

/* Tags */
.card .card-tags {
  position: absolute;
  display: flex;
  flex-wrap: wrap;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto
}

.card .card-tags {
  padding: 1rem;
  justify-content: center;
  margin: 1rem auto;
}

/* Button */
.btn {
  text-decoration: none;
  color: #ffffff;
  font-weight: bold;
  border-bottom: 1px dotted;
  border-top: 1px dotted;
  margin: 1.2rem auto;
}
.btn:hover {
  border-top: 1px solid;
  border-bottom: 1px solid;
}

/* Hover */
.card-content:hover {
  padding: 1rem;
}

.card:hover::before {
  content: '';
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  height: 100%;
  width: 100%;
  border-radius: 20px;
  box-shadow: 4px 4px 4px #535353;
  transition: all 0.5s ease;
}

.card-content:hover + div {
  display: none;
}

.card-content:hover p,
.card-content:hover .btn {
  display:block;
  transform: translateY(-30px);
}

.card-content:hover h3 {
  transform: scale(0.8) translateY(-30px);
}
    </style>
</head>
<body>

  <div class="container">
    
    
    
    <div class="card card-2">
      <div class="card-content">
        <h3><a href="#">First: Weight loss management</a></h3>
        <p>A network of collaborating peers is a powerful multiplier of your positive impact in a Company. Build it early!</p>
        <a href="#" class="btn">Read Now</a>
      </div>
      <div class="card-tags">
        <a href="#" class="btn">Design Culture</a>
        <a href="#" class="btn">UX Research</a>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-content">
        <h3><a href="#"> Transform a Public Mistake in a Great Opportunity</a></h3>
        <p>After being victim of a shitstorm in 2015, BVG enacted a winning communication strategy.</p>
        <a href="#" class="btn">Read Now</a>
      </div>

      <div class="card-tags">
        <a href="#" class="btn">Marketing</a>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-content">
        <h3><a href="#"> Transform a Public Mistake in a Great Opportunity</a></h3>
        <p>After being victim of a shitstorm in 2015, BVG enacted a winning communication strategy.</p>
        <a href="#" class="btn">Read Now</a>
      </div>

      <div class="card-tags">
        <a href="#" class="btn">Marketing</a>
      </div>
    </div>
  </div>
  
  <div class="container">
    
    
    <div class="card card-2">
      <div class="card-content">
        <h3><a href="#">First: Weight loss management</a></h3>
        <p>A network of collaborating peers is a powerful multiplier of your positive impact in a Company. Build it early!</p>
        <a href="#" class="btn">Read Now</a>
      </div>
      <div class="card-tags">
        <a href="#" class="btn">Design Culture</a>
        <a href="#" class="btn">UX Research</a>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-content">
        <h3><a href="#"> Transform a Public Mistake in a Great Opportunity</a></h3>
        <p>After being victim of a shitstorm in 2015, BVG enacted a winning communication strategy.</p>
        <a href="#" class="btn">Read Now</a>
      </div>

      <div class="card-tags">
        <a href="#" class="btn">Marketing</a>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-content">
        <h3><a href="#"> Transform a Public Mistake in a Great Opportunity</a></h3>
        <p>After being victim of a shitstorm in 2015, BVG enacted a winning communication strategy.</p>
        <a href="#" class="btn">Read Now</a>
      </div>

      <div class="card-tags">
        <a href="#" class="btn">Marketing</a>
      </div>
    </div>
  </div>
  
  <div class="container">
    
    
    <div class="card card-2">
      <div class="card-content">
        <h3><a href="#">First: Weight loss management</a></h3>
        <p>A network of collaborating peers is a powerful multiplier of your positive impact in a Company. Build it early!</p>
        <a href="#" class="btn">Read Now</a>
      </div>
      <div class="card-tags">
        <a href="#" class="btn">Design Culture</a>
        <a href="#" class="btn">UX Research</a>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-content">
        <h3><a href="#"> Transform a Public Mistake in a Great Opportunity</a></h3>
        <p>After being victim of a shitstorm in 2015, BVG enacted a winning communication strategy.</p>
        <a href="#" class="btn">Read Now</a>
      </div>

      <div class="card-tags">
        <a href="#" class="btn">Marketing</a>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-content">
        <h3><a href="#"> Transform a Public Mistake in a Great Opportunity</a></h3>
        <p>After being victim of a shitstorm in 2015, BVG enacted a winning communication strategy.</p>
        <a href="#" class="btn">Read Now</a>
      </div>

      <div class="card-tags">
        <a href="#" class="btn">Marketing</a>
      </div>
    </div>
  </div>
  

</body>
</html>