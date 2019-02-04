<!DOCTYPE html>
<html>
<head>
  <style>
  /*---------About------------*/
.all{
  position: absolute;
  min-width: 100%;
  max-width: 100%;
  min-height: 490px; 
  max-height:  490px;
}

h6{ 
  position: absolute;
font-family: Work Sans,sans-serif;
  margin-block-start: 1em;
  margin-block-end: 0em;
  font-size: 25px;
  position: absolute;
  top: 80%;
  left: 6.5%;
  color: #34495e;
  text-transform: uppercase;
}
.box {
     left:0;
     width: 215.5vh;
     border: 200px solid black;
     position: absolute;
     margin-top: 35%;
}

.about { /*dropdown*/
    position: absolute;
    top: 90%;
    padding: 0 5px;
    font-size: 19px;
    color:  #323234;
    font-family: Work Sans,sans-serif;
    display: block;
    margin-inline-start:40px;
    margin-inline-end: 40px;
    text-indent: 40px;
}


div.gallery img {
  min-height: 150px;
  max-height: 150px;
  min-width:150px; 
  max-width:150px;
  border-radius: 50%;
}
div.desc  {
  position: absolute;
  padding: 5px 40px;
  text-align: center;
  font-weight: bold;
  font-size: 14px;
  color: #34495e;
}
.responsive {
   padding: 0 105px;
   float: left;
   display: block;
   position: relative;
   margin-top: 10%;
   width: 17%;
}

.tex{
  text-align:center;
  font-size: 75px;
  position: absolute;
  margin-top:-6%;
  font-weight:bold;
  color: white;
  left: -10%;
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
  right: 1%;
  margin-top:-4%;
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
.social-media{
position: absolute;
margin-top: -11%;
left:-18%; 
}
.social-media ul .fa{
  text-decoration: none;
  list-style: none;
  color: #fff;
  padding-top: 30px;
  font-size: 26px;
}
.fa:hover{
  opacity: 0.7;
}
#scrollTopButton{
  display: none;
  position: fixed;
  bottom: 40px;
  right: 40px;
  height: 50px;
  width: 50px;
  font-size: 25px;
  border: 0;
  outline: 0;
  background-color:#9A7308;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 50px;
}

#scrollTopButton:hover{
  background: #F9B702;
}

.mov{
  position: absolute;
  margin-top: 50%;
}
/* Panels. */
.splitview {
    position: relative;
    width: 100%;
    min-height: 45vw;
    overflow: hidden;
}

.panel {
    position: absolute;
    width: 100vw;
    min-height: 45vw;
    overflow: hidden;
}

    .panel .content {
        position: absolute;
        width: 100vw;
        min-height: 45vw;
        color: #FFF;
    }

    .panel .description {
        width: 25%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }

    .panel img {
        box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.15);
        width: 35%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }


.bottom {
    background-color: rgb(44, 44, 44);
    z-index: 1;
}

    .bottom .description {
        right: 5%;
    }

.top {
    background-color: rgb(77, 69, 173);
    z-index: 2;
    width: 50vw;

    /*-webkit-clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);
    clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);*/
}

    .top .description {
        left: 5%;
    }

/* Handle. */
.handle {
    height: 100%;
    position: absolute;
    display: block;
    background-color: rgb(253, 171, 0);
    width: 5px;
    top: 0;
    left: 50.3%;
    z-index: 2;
}

/* Skewed. */
.skewed .handle {
    top: 50%;
    transform: rotate(30deg) translateY(-50%);
    height: 200%;
    -webkit-transform-origin: top;
    -moz-transform-origin: top;
    transform-origin: top;
}

.skewed .top {
    transform: skew(-30deg);
    margin-left: -1000px;
    width: calc(50vw + 1000px);
}

.skewed .top .content {
    transform: skew(30deg);
    margin-left: 1000px;
}

/* Responsive. */
@media (max-width: 900px) {
    body {
        font-size: 75%;
    }
}

  </style>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/DevTalBra/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <title>About</title>
<body>
  <img src="/DevTalBra/New folder/office.jpg" class="all">
</video>
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
      <h6>Company overview</h6>
        <code class="about">Our company is DevTalBra and we are picking up developer posobility emplayees with experience create a game 
      we are also giving a chance for middle of software developer student he/she to improve him self. What is the DevTalBra? It is Developer Talent Brain
      we are execude such a code and design. That's why make sure and show your talent in our careers make yourself stronger and create your prospective skills. We are accepting Webdeveloper and Game developer we need to up reputation in the world. Make sure multpalay DevTalBra each nationility citizen.</code><br>  
      <div class="mov">
         <div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1>Nasdaq company</h1>
                    <p>We offer you approach a good vacancy developer.</p>
                    <p>Germany, Berlin</p>
                </div>

                <img src="/DevTalBra/New folder/nasdaq.jpg" alt="Original">
            </div>
        </div>
        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1>Google company</h1>
                    <p>We offer you approach a good vacancy developer.</p>
                    <p>America, New Yourk</p>
                </div>

                <img src="/DevTalBra/New folder/goog.jpg" alt="Duotone">
            </div>
        </div>
                <div class="handle"></div>
      </div>
              <!--<script>
         document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});
       </script>-->
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/DevTalBra/New folder/empl1.jpg">
      <img src="/DevTalBra/New folder/empl1.jpg">
    </a>
    <div class="desc"><p class="nam">Martin John</p>
    Founder</div>
  </div>
  </div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/DevTalBra/New folder/empl1.jpg">
      <img src="/DevTalBra/New folder/wede.jpg">
    </a>
    <div class="desc"><p class="nam">Devid Philipin</p>
    Web Developer</div>
  </div>
  </div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/DevTalBra/New folder/empl1.jpg">
      <img src="/DevTalBra/New folder/menager.jpg">
    </a>
    <div class="desc"><p class="nam">Nancy Almodova</p>
    Human Resources</div>
  </div>
  </div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/DevTalBra/New folder/empl1.jpg">
      <img src="/DevTalBra/New folder/gade.jpg">
    </a>   
    <div class="desc"><p class="nam">Omnic Jou</p>
    Game Developer</div>
  </div>
  </div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/DevTalBra/New folder/empl1.jpg">
      <img src="/DevTalBra/New folder/student.jpg">
    </a>  
    <div class="desc" >
    <p class="nam">Alexander Vladimir</p>
  QA Engineer</div>
  </div>
  </div>
 <div class="box">
   <p class="tex">Want to work with us?</p>
 <button class="button" style="vertical-align:middle"><a href="contact.php"><span>Contact Us</span></button></a>
<div class="social-media">
   <ul>
   <li><a href="https://www.facebook.com/profile.php?id=100005136062836" class="fa fa-facebook" aria-hidden="true"></a></li>
   <li><a href="https://www.instagram.com/erajikholiqzoda/?hl=en" class="fa fa-instagram" aria-hidden="true"></a></li>
   <li><a href="https://www.linkedin.com/in/eraji-kholiqzoda-3a2ab5172/" class="fa fa-linkedin" aria-hidden="true"></a></li>
 </ul>
 </div>
 </div>

</body>
</html>