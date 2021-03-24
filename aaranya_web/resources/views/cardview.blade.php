<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card view</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Bad+Script&family=Playball&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');</p>


* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

*::selection{
  background-color:yellowgreen;
  color: black;
}

body {
  background: linear-gradient(to bottom, #0099cc 0%, #003366 100%);
  height: 100vh;
  flex-direction: column;
  display: flex;
  justify-content: center;
  align-items: center;
}

body > p{
  font-family: 'Montserrat', sans-serif;
  color: whitesmoke;
  text-transform: uppercase;
  font-size: 50px;
  border-top:1px solid whitesmoke;
  border-bottom:1px solid whitesmoke;
  text-align: center;
}

.container {
  display: grid;
  grid-template-columns: repeat(4 , 1fr);
  max-width:85vw;
  grid-gap:20px;
  justify-items:center
}



.container > div {
  background-color: white;
  text-align: center;
  border-radius: 5px;
  height: 300px;
  box-shadow: 0 10px 10px 5px rgba(0,0,0,.25);
  transition: all 300ms 50ms ease-in-out;
  color: white;
  position: relative;
  width: 300px;
  max-width:200px;
  min-width:150px;
  overflow: hidden;
}

.content {
  position: absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  transition: all 300ms 50ms ease-in-out;
  /* z-index: 2; */
}

.container > div:first-of-type .content{
  background-image:url("https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/parques-nacionales/vistas-pn-ordesa-monte-perdido-s160022267.jpg_1259223088.jpg");
  background-size: cover;

}

.container > div:nth-of-type(2) .content{
  background-image:url("https://i.pinimg.com/236x/bc/33/b7/bc33b7edaba2034f2aa56432a6fbd3b0.jpg");
  background-size: cover;
}

.container > div:nth-of-type(3) .content{
  background-image:url("https://i.pinimg.com/236x/1d/b6/f0/1db6f092c754d8aff6dfa93bb35399a6.jpg");
  background-size: cover;
}

.container > div:last-of-type .content{
  background-image:url("https://policymix.nina.no/Portals/policymix/NORWAY_3_rev.jpg");
  background-size: cover;
}

.container > div .content::after{
  content: '';
  position: absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  z-index:0;
  background-image: linear-gradient(to bottom,
                    rgba(0,0,0,.01),
                    rgba(0,0,0,.8)
  );
  opacity: .1;
  transition: all 300ms 50ms ease-in-out;
  border-radius:5px;
}

.container > div img {
  border-radius: 5px;
  width: 100%;
  height: 100%;
  transition: all 300ms 50ms ease-in-out;
}

.container > div h3{
/*   border: 2px solid red; */
  font-family: 'Viga', sans-serif;
  text-transform: uppercase;
  margin-bottom:20px;
  transition: all 200ms 50ms ease-in-out;
}

.container > div p{
/*   border: 2px solid blue; */
  font-family: 'Playball', cursive;
  font-size: 20px;
  margin-top: 10px;
  line-height: 1;
  transition: all 200ms 50ms ease-in-out;
  color: transparent;
  opacity: 0;
  width:90%;
  margin:auto;
}

.container > div p ,
.container > div h3{
  position: relative;
  top:250px;
  z-index:1;
}

.container > div:hover{
  box-shadow: 0 20px 15px 10px rgba(0,0,0,.15);
  transform: translateY(-10px);
  cursor: pointer;
}

.container > div:hover .content{
  transform:scale(1.1)
}

.container > div:hover h3,
.container > div:hover p{
  transform: translateY(-200px)
}

.container > div:hover p{
  opacity:1;
  color: white;
}

.container > div .content:hover:after{
  opacity:1;
}

@media(max-width: 1000px) {
  body{
    height:150vh;
  }
  
  .container {
  display: grid;
  grid-template-columns: repeat(2 , 1fr);
  max-width:85vw;
  grid-gap:40px 100px;
  justify-items:center;
  justify-content: center;
  margin-left:0
}
}

@media(max-width: 590px) {
  body{
    height: 300vh;
  }
    .container {
  display: grid;
  grid-template-columns: repeat(1 , 1fr);
  width:80vw;
/*   grid-gap:40px 100px; */
  justify-items:center;
      
}
  
  .container > div{
    min-width: 300px
  }
}

@media(max-height:450px){
  body{
    height: 200vh;
  }
}

@media(max-height:300px){
  body{
    height: 300vh;
  }
}

@media(max-height:200px){
  body{
    height: 300vh;
  }
}

@media(max-height:100px){
  body{
    height: 300vh;
  }
}

</style>

</head>
<body>
<p>Hover On The Cards</p>

<div class="container">
  <div class="box">
    <div class="content">
      <h3>Mountain</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ad corporis laborum obcaecati ipsum id!</p>
    </div>
  </div>
  <div class="box">
    <div class="content">
      <h3>Sky</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ad corporis laborum obcaecati ipsum id!</p>
    </div>>
  </div>
  <div class="box">
    <div class="content">
      <h3>Galaxy</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ad corporis laborum obcaecati ipsum id!</p>
    </div>
  </div>
  <div class="box">
    <div class="content">
      <h3>Forest</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ad corporis laborum obcaecati ipsum id!</p>
    </div>
  </div>
</div>
</body>
</html>