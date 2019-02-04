<?php
// connect to the server 
$db= mysqli_connect('localhost', 'root','','registration');
if(isset($_POST['name']))
{
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];
    $study=$_POST['study'];
    $specialist=$_POST['specialist'];
    $message=$_POST['message'];
  //if no errors have been created carry on
  if(!isset($error)){
    
  try{
    $pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
    die("ERROR: Could not connect. ". $e->getMessage());
    }
  
    try {

      //insert into database with a prepared statement
 $sql ="INSERT INTO users1 (name,surname,email,phone,country,study,specialist,message) 
 VALUES ('$name','$surname','$email','$phone','$country','$study','$specialist','$message')";
    
          $pdo->exec($sql);
            echo "New record created successfully";
            
    //else catch the exception and show the error.
    } catch(PDOException $e) {
        $error[] = $e->getMessage();
    }
  }
}
    
?>
<head>
<style> 
nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100px;
  padding: 10px 100px;
  box-sizing: border-box;
  transition: .3s;
}
.logo{
   font-family: 'Poppins', sans-serif;
  font-weight: bold;
  position: absolute;
  color: white;
  width: 13%;
  background: #ff6e13;
  border-radius: 10px 0px 10px 0px;
  text-transform: uppercase;
  letter-spacing: 3.5px;
  padding: 24px 18px;
  height: 10px;
  float: left;
  top: 27%;
  font-size: 24px;
  transition: .3s;
}
nav ul{
  list-style: none;
  float: right;
  margin: 0;
  display: flex;
}
nav ul li {
  list-style:none;
}
nav a {
  letter-spacing: 1px;
  font-weight: bold;
  line-height: 80px;
  color: white;
  padding: 12px 30px;
  text-decoration: none;
  font-size: 20;
  transition: .3s;
}

a{
  width: 22%;
  background: #ff6e13;
  border-radius: 10px 10px 10px 10px;
}
a:hover{
  background-color: #A66F63;
}
body
{
  margin:0;
  padding: 0;
}
.box
{
  position: absolute;
  left: 50%;
  transform: translate(-50%,10%);
  width: 400px;
  background: #fff;
  padding: 40px;
  box-sizing: border-box;
  border:1px solid rgba(0,0,0,,1);
  box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
.box h2{
  margin:0 0 40px;
  padding: 0;
  color: #f7497d;
  text-transform: uppercase;
}
.box input{
  padding: 10px 0;
  margin-bottom: 30px;
}
.box textarea{
  height: 80px;
  padding: 10px 0;
  margin-bottom:40px;
}
.box input,
.box textarea
{
  width: 100%;
  box-sizing: border-box;
  box-shadow: none;
  outline: none;
  border:none;
  border-bottom: 2px solid #999;
}
.box textarea
{
  margin-bottom: 20px;
}
.box input[type="submit"]
{
border-bottom: none;
cursor: pointer;
background: #f7497d;
color: #fff;
margin-bottom: 0;
text-transform: uppercase;
}
.box form div
{
  position: relative;
}
.box form div label
{
  position: absolute;
  top: 10px;
  left: 0;
  color: #999;
  transition: .5s;
  pointer-events: none;
}
.box input:focus ~ label,
.box textarea:focus ~ label,
.box input:valid ~ label,
.box textarea:valid ~ label
{ 
top: -12px;
left: 0;
color: #f7497d;
font-size: 12px;
font-weight: bold;
}
.box input:focus,
.box textarea:focus,
.box input:valid,
.box textarea:valid
{
  border-bottom: 2px solid #f7497d;
}
</style>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<body>
  <div class="wrapper">
    <nav>
      <div class="logo">DevTalBra</div>
      <ul>
        <li><a href="header.php">Home</a></li>
      </ul>
    </nav>
  </div>
  <div class="box">
    <h2>Contact Us</h2>
    <form role="form" method="POST" action="" autocomplete="off">
      <div>
        <input type="text" name="name" required="">
        <label>Name</label>
      </div>
      <div>
        <input type="text" name="surname" required="">
        <label>Surname</label>
      </div>
      <div>
        <input type="email" name="email" required="">
        <label>E-mail</label>
      </div>
      <div>
        <input type="text" name="phone" required="">
        <label>Number Phone</label>
      </div>
      <div>
        <input type="text" name="country" required="">
        <label>Country</label>
      </div>
      <div>
        <input type="text" name="study" required="">
        <label>Study</label>
      </div>
      <div>
        <input type="text" name="specialist" required="">
        <label>Specialist</label>
      </div>
      <div>
        <textarea required="" name="message"></textarea>
        <label>Message</label>
      </div>
      <input type="submit" name="submit" value="submit">
    </form>
  </div>
</body>
</html>

