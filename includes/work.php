<!DOCTYPE html>
<html>
<style>
  .al{
  position: absolute;
  min-width: 100%;
  max-width: 100%;
  min-height: 450px; 
  max-height:  450px;
}
.bd {
  position: absolute;
  top: 75%;
  font-family: Arial;
  margin: 0 auto; /* Center website */
  width: 1000px; /* Max width */
  padding: 20px;
}

.heading {

  font-size: 25px;
  margin-right: 25px;
}

.fa {

  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}
/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}
/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 15%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 20%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}
/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 760px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
.name{
    position: absolute;
    color: #323234;
    font-size: 18px;
    font-family: Work Sans,sans-serif;
}
.exx{
  left:-9%;
  font-size: 75px;
  position: absolute;
  margin-top:-5%;
  font-weight:bold;
  color: white;
}
.boxx {
     left: 0%;
     width: 215vh;
     border: 200px solid black;
     position: absolute;
     margin-top: 10%;
}
.social-media{
position: absolute;
left:-18%;
margin-top: -10%;
}
.social-media .faa .fa{
  text-decoration: none;
  list-style: none;
  color: #fff;
  padding-top: 30px;
  font-size: 26px;
}
.fa:hover{
  opacity: 0.7;
}
.button {
  display: inline-block;
  border-radius: 5px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 25px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  right: 0%;
  margin-top:-3%;
  font-weight:bold;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color: white;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/DevTalBra/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Work</title>
</head>
<body>
   <img src="/DevTalBra/New folder/im1.jpg" class="al">
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
  </div>
  </nav>
  <div class="bd">
  <span class="heading">Employers Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div class="name">Game Developer</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right ">
    <div>150</div>
  </div>
  <div class="side">
    <div  class="name">Unity</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div  class="name">Web Developer</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div  class="name">Web Design</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div class="name">QA Engineer</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
<div class="boxx">
 <span class="exx">Want to work with us?</span>
 <button class="button" style="vertical-align:middle"><a href="contact.php"><span>Contact Us</span></button></a>
  <div class="social-media">
   <ul>
<li class="faa"><a href="https://www.facebook.com/profile.php?id=100005136062836" class="fa fa-facebook" aria-hidden="true"></a></li>
   <li class="faa"><a href="https://www.instagram.com/erajikholiqzoda/?hl=en" class="fa fa-instagram" aria-hidden="true"></a></li>
   <li class="faa"><a href="https://www.linkedin.com/in/eraji-kholiqzoda-3a2ab5172/" class="fa fa-linkedin" aria-hidden="true"></a></li>
 </ul>
 </div>
 </div>
</body>
</html>