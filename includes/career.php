<?php
// connect to the server 
$db= mysqli_connect('localhost', 'root','','registration');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $position=$_POST['position'];
    $linkid=$_POST['linkid'];
    $partfo=$_POST['partfo'];
    $file=$_POST['file'];

$sql="INSERT INTO users2 (name, surname,email,phone,position,linkid,partfo,file)
      VALUES ('$name','$surname','$email','$phone','$position','$linkid','$partfo','$file')";
    if ($db->query($sql)==TRUE) {echo "";}
    else { echo "Error: " .$db->error;} 
  }
?>
<!DOCTYPE html>
<html>
<head>
  <style>

  .al{
  position: absolute;
  min-width: 100%;
  max-width: 100%;
  min-height: 540px; 
  max-height:  540px;
}
.box {
     left:0;
     width: 215vh;
     border: 200px solid black;
     position: absolute;
     margin-top: 30%;
}

.tex{
 text-align:center;
  font-size: 72px;
  position: absolute;
  top:15%;
  left: 20%; 
  font-weight:bold;
  color: white;
}

.city{
   position: absolute;
 text-align:center;
  font-size: 18px;
  right: 46%;
  top:40%;
  color: white;
}

h6{
  display: block;
  right: 45%;
  font-size: 48px;
  position: absolute;
  top:-25%;
  font-weight:bold;
  color: #34495e;
}

p {
    display: block;
    margin-block-start:1em;
    margin-block-end: 1em;
    margin-inline-start:110px;
    margin-inline-end: 110px;
}
 .content-career{
    font-size: 19px;
    color:  #323234;
    display: block;
    position: absolute;
    top: 100%;
    text-indent: 50px;
}
.part-title {
  position: absolute;
    font-family: Work Sans Bold,sans-serif;
    font-size: 48px;
    text-align: left;
    margin-bottom: 44px;
    top:137%;
    color: #34495e;
    display: block;
    left: 8%;
}
.rex ul li span {
    color: #323234;
    padding-left: 10px;
    display: block;
}
 .rex li {
    color: #ff6e13;
}
 .main-text {
    position: absolute;
    color: #323234;
    font-size: 19px;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 150%;
    left: 8%;
}
.part2-title {
  position: absolute;
    font-family: Work Sans Bold,sans-serif;
    font-size: 48px;
    text-align: left;
    margin-bottom: 44px;
    top:184%;
    color: #34495e;
    display: block;
    left: 8%;
}
 .main2-text {
  position: absolute;
    color: #323234;
    font-size: 19px;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 197%;
    left: 8%;
}
.part3-title {
  position: absolute;
    font-family: Work Sans Bold,sans-serif;
    font-size: 48px;
    text-align: left;
    margin-bottom: 44px;
    top:237%;
    color: #34495e;
    display: block;
    left: 8%;
}
 .main3-text {
  position: absolute;
    color: #323234;
    font-size: 19px;
    font-family: Work Sans,sans-serif;
    text-align: left;
    padding-left: 24px;
    top: 249%;
    left: 8%;
}
.part4-title {
  position: absolute;
    font-family: Work Sans Bold,sans-serif;
    font-size: 48px;
    text-align: left;
    margin-bottom: 44px;
    top:290%;
    color: #34495e;
    display: block;
    left: 8%;
}
.box1
{
  position: absolute;
  top: 300%;
  left: 4%;
  width: 60%;
  padding: 50px;
}
.box2{
  position: absolute;
  top:0%;
  left: 65%;
  width: 95%;
  padding: 50px;
}
 input
{
  width: 65%;
  outline: none;
  border:none;
  border-bottom: 2px solid #999;
}
.box1 input{
  padding: 15px 0;
  margin-bottom: 30px;
}

.box1 form .ne
{
  position: relative;
}
.box1  form .ne label
{
  position: absolute;
  top: 10px;
  left: 0;
  color: #999;
  transition: .3s;
  pointer-events: none;
}
.box1 input:focus ~ label,
.box1 input:valid ~ label
{ 
top: -12px;
left: 0;
color: #f7497d;
font-size: 15px;
font-weight: bold;
}
.box1 input:focus,
.box1 input:valid
{
  border-bottom: 3px solid #f7497d;
}

#custom-button{
  padding: 15px;
  color: white;
  background-color: #009578;
  border:1px solid #000;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}
#custom-button:hover{
  background-color: #00b28f;
}
#custom-text{
  position: absolute;
  font-weight: bold;
  margin-left: -20%;
  top: 90%;
  font-family: sans-serif;
  color: #aaa;
}
#custom-butto{
  position: absolute;
  top: 74%;
  left: 30%;
  padding: 15px;
  color: white;
  background-color: #009578;
  border:1px solid #000;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}
#custom-butto:hover{
  background-color: #00b28f;
}
#custom-tex{
  position: absolute;
  font-weight: bold;
  margin-left: 23%;
  top: 90%;
  font-family: sans-serif;
  color: #aaa;
}
.btn{
  position: absolute;
  display: block;
  top: 100%;
  left:-62%;
  padding: 12px;
  font-weight: bold;
  font-size: 18px;
  width: 22%;
  color: white;
  background: #ff6e13;
  border: 1px;
  border-radius: 5px;
  border-radius: 10px 10px 10px 10px;
}

.btn:hover{
  background-color: #A66F63;
}
.boxx {
     left: -50%;
     width: 271.6vh;
     border: 200px solid black;
     position: absolute;
     margin-top: 30%;
}
.buttonn {
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
  right: -35%;
  margin-top:50%;
  font-weight:bold;
}

.buttonn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color: white;
}

.buttonn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonn:hover span {
  padding-right: 25px;
}

.buttonn:hover span:after {
  opacity: 1;
  right: 0;
}
.exx{
  right:-5%;
  font-size: 75px;
  position: absolute;
  top:183%;
  font-weight:bold;
  color: white;
}
.social-media{
position: absolute;
left:-4%;
top: 170%;
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
#scrollTopButton{
  z-index: 1000;
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
  background: #F5B204;
}
.cl{
  color: #682F11;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/DevTalBra/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <title>Career</title>
</head>
<body>
    <img src="/DevTalBra/New folder/cover.jpg" class="al">
    <p class="tex">Software Developer</p>
    <div class="city">Kaunas</div>
  <nav id="top">
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
<button id="scrollTopButton" onclick="topFunction()" title="Go to top"><i class="fa fa-chevron-up"></i></button>
     <div class="rex">
        <h1 class="part-title">What would you do</h1>
      <ul class="main-text">
        <li>
          <span>Upgrade, configure and debug existing systems</span>
        </li>
        <li>
          <span>Write clean, scalable C# code</span>
        </li>
        <li>
          <span>Help us design and implement modern RESTful APIs using ASP.NET Core</span>
        </li>
        <li>
          <span>Proactively find ways of improving code quality and stability</span>
        </li>
        <li>
          <span>Participate in group learning workshopsWork in a self-organizing Agile team and participate in Scrum events</span>
        </li>
        <li>
          <span>Interact with various stakeholders such as other developers, product owners and architects</span>
        </li>
      </ul>

       <h1 class="part2-title">We expect from you</h1>
      <ul class="main2-text">
        <li>
          <span>2+ years of experience with C#, ASP.NET and MSSQL</span>
        </li>
        <li>
          <span>Experience with HTML, JavaScript and CSS</span>
        </li>
        <li>
          <span>Familiarity with engineering best practices</span>
        </li>
        <li>
          <span>Desire to work in an open and informal environment where freedom comes with responsibility</span>
        </li>
        <li>
          <span>Goal oriented mindset and methodical thinking</span>
        </li>
        <li>
          <span>To be able to communicate clearly and constructively</span>
        </li>
        <li>
          <span>Good English skills</span>
        </li>
        <li>
          <span>Experience in telecommunications sector would be an advantage</span>
        </li>
      </ul>
      <h1 class="part3-title">We Offer</h1>
      <ul class="main3-text">
        <li>
          <span>Dynamic scene of interesting and challenging projects</span>
        </li>
        <li>
          <span>Opportunity to take ownership and influence early technical decisions</span>
        </li>
        <li>
          <span>Professional team to work with and have fun after work</span>
        </li>
        <li>
          <span>Flexibility and freedom to express and implement your ideas</span>
        </li>
        <li>
          <span>Great opportunities to grow professionally (trainings, business trips)</span>
        </li>
      </ul>
      <article class="content-career">
        <div><h6>Career</h6>
        <p>DevTalBra is always looking for like-minded professionals who can help us improve, and we promise to return the favor. We are looking for people who are able to think outside the box and are not afraid to experiment. We value people who have their own ideas and are willing to do whatever it takes to execute bring them to life. We value passion for work!</p>
          <p>
       If your passion is technology and you are highly skilled in certain hard skills (iOS, Android, php, C#, C++, JavaScript development, QA or other), check what current job openings would fit you or send us an open application to <a class="cl">jobs@devtalbra.com</a> telling your story and reasons to join DevTalBra team..</p><br>  
      </div>
      </article>
</div>
     </div>
<h1 class="part4-title">Apply Now </h1>
<div class="box1">
  <form method="Post">
      <div class="ne">
        <input type="text" name="name" required="">
        <label>First name</label>
      </div>
      <div class="ne">
        <input type="email" name="email" required="">
        <label>E-mail</label>
      </div>
      <div class="ne">
        <input type="text" name="position" required="">
        <label>Position</label>
      </div>
      <div class="ne">
        <input type="text" name="linkid" required="">
        <label>Linkedin profile</label>
      </div>
    <div class="box2">
  <form method="Post">
      <div class="ne">
        <input type="text" name="surname" required="">
        <label>Second name</label>
      </div>
      <div class="ne">
        <input type="phone" name="phone" required="">
        <label>Phone</label>
      </div>
       <div class="ne">
        <input type="text" name="partfo" required="">
        <label>Partfolio URL</label>    
</div>
<div>
       <input type="file" id="real-file" name="file" hidden="hidden" />
      <button type="button" id="custom-button">Attach resume/CV</button>
      <span id="custom-text">No file chosen, yet.</span>
      
      <script type="text/javascript">
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");
  
        customBtn.addEventListener("click", function() {
          realFileBtn.click();
  });
  
        realFileBtn.addEventListener("change", function() {
          if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.split('\\').pop();
          } else {
            customTxt.innerHTML = "No file chosen, yet.";
    }
  });
 </script>
<button type="submit" name="submit"  class="btn">Send</button>
 </div>
      </div>
      </form>
      <div class="boxx"></div>
 <span class="exx">Want to work with us?</span>
 <button class="buttonn" style="vertical-align:middle"><a href="contact.php"><span>Contact Us</span></button></a>
 <div class="social-media">
   <ul>
   <li class="faa"><a href="https://www.facebook.com/profile.php?id=100005136062836" class="fa fa-facebook" aria-hidden="true"></a></li>
   <li class="faa"><a href="https://www.instagram.com/erajikholiqzoda/?hl=en" class="fa fa-instagram" aria-hidden="true"></a></li>
   <li class="faa"><a href="https://www.linkedin.com/in/eraji-kholiqzoda-3a2ab5172/" class="fa fa-linkedin" aria-hidden="true"></a></li>
 </ul>
 </div>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("scrollTopButton").style.display = "block";
  } else {
    document.getElementById("scrollTopButton").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>


    