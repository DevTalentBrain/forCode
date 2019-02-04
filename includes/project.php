<!DOCTYPE html>
<html>
<head>
  <style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#myVide {
     position: absolute;
     display: block;
    top: 95%;
    width: 150vh; 
    height: 100vh;
    left: 15%;   
}

.conten {
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 150vh;
    padding: 20px;
    display: block;
    position: absolute;
    left:15%;
    top: 175%;
}

.first {
    position: absolute;
    font-family: Work Sans Bold,sans-serif;
    font-size: 60px;
    top:205%;
    text-transform: uppercase;
    font-weight: bolder;
    color: #34495e;
    display: block;
    left: 15%;
}
.al1{
  position: absolute;
  display: block;
  top: 240%;
  left: 15%;
}
.al2{
  position: absolute;
  display: block;
  top: 400%;
  left: 15%;
}
.al3{
  position: absolute;
  display: block;
  top: 320%;
  left: 15%;
}
.al{
  position: absolute;
  display: block;
  top: 480%;
  left: 15%;
}
.shooter{
  position: absolute;
  display: block;
  top: 0;
  width: 100%;
  height: 90vh;
  }
  .tex{
  text-align:center;
  font-size: 80px;
  position: absolute;
  margin-top:-5%;
  left: -10%;
  font-weight:bold;
  color: white;
}
.box {
     left:0;
     width: 215.5vh;
     border: 200px solid black;
     position: absolute;
     margin-top: 270%;
}
.butt {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 25px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  right: 17%;
  margin-top:-3%;
  font-weight:bold;
}
.butt span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color: white;
}

.butt span:after 
{
  content: '\00bb';
  position: absolute;
  opacity: 0;
  right: -20px;
  transition: 0.5s;
  top: 0;
}

.butt:hover span {
  padding-right: 25px;
}

.butt:hover span:after {
  opacity: 1;
  right: 0;
}
.social-media{
position: absolute;
margin-top: -11%;
left:-18%;
}
.social-media .faa .fa{
  text-decoration: none;
  list-style: none;
  color: #fff;
  padding-top: 30px;
  font-size: 26px;
}
.fa:hover {
    opacity: 0.7;
}
.rex ul li span {
    color: #34495e;
    display: block;
}
 .rex li {
    color: #ff6e13;
}
.main-text {
    position: absolute;
    font-size: 25px;
    font-weight: bold;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 235%;
    left: 15%;
}
.main1-text {
    position: absolute;
    font-size: 25px;
    font-weight: bold;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 315%;
    left: 15%;
}
.main2-text {
    position: absolute;
    font-size: 25px;
    font-weight: bold;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 395%;
    left: 15%;
}
.main3-text {
    position: absolute;
    font-size: 25px;
    font-weight: bold;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 475%;
    left: 15%;
}
  </style>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/DevTalBra/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>About</title>
<body>
   <img src="/DevTalBra/New folder/shooter.jpg" class="shooter" >
     <video autoplay muted loop id="myVide">
  <source src="/DevTalBra/New folder/Call of Duty.mp4">
</video>
   <div class="conten">
  <h1>Call of Duty</h1>
</div>

  <div class="load"></div>
  <nav>
        <div class="log">
          <h4>DevTalBra</h4>
        </div>
        <ul class="nav-links">
          <li><a href="header.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="work.php">Work</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="career.php">Career</a></li>
      </ul>     
  </nav>
    <p class="first">First we create</p>
    <div class="rex">
      <ul class="main-text">
        <li>
          <span>Game Review</span>
        </li>
      </ul>
      <ul class="main1-text">
        <li>
          <span>We do design</span>
        </li>
      </ul>
     <ul class="main2-text">
        <li>
          <span>We do code</span>
        </li>
      </ul>
      <ul class="main3-text">
        <li>
          <span>We use Unity </span>
        </li>
      </ul>
    </div>
<img src="/DevTalBra/New folder/call of duty.jpg" class="al1" width="950" height="400">
<img src="/DevTalBra/New folder/front.jpg" class="al" width="950" height="400">
<img src="/DevTalBra/New folder/best.jpg" class="al2" width="950" height="400">
<img src="/DevTalBra/New folder/game-dev.jpg" class="al3" width="950" height="400">

<div class="box">
  <p class="tex">If you are ready?</p>
 <button class="butt" style="vertical-align:middle"><a href="contact.php"><span>Contact Us</span></button></a>
  <div class="social-media">
   <ul>
   <li class="faa"><a href="https://www.facebook.com/profile.php?id=100005136062836" class="fa fa-facebook" aria-hidden="true"> </a></li>
   <li class="faa"><a href="https://www.instagram.com/erajikholiqzoda/?hl=en" class="fa fa-instagram" aria-hidden="true"></a></li>
   <li class="faa"><a href="https://www.linkedin.com/in/eraji-kholiqzoda-3a2ab5172/" class="fa fa-linkedin" aria-hidden="true"></a></li>
 </ul>
 </div> 
</div>
</body>
</html