
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/DevTalBra/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<title>Home</title>
</head>
<body>
<div class="slider">
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
	</div>
	</nav>
	<div class="content">
		<div class="principal">
			<h1>Are you ready?</h1>
			<p>Employee have to make sure execude your positive talent in our company.</p>
		</div>
	</div>

<!-- The video -->
<div class="video">
	<video autoplay muted loop id="myVideo">
	  	<source src="/DevTalBra/New folder/Sartup.mp4" type="video/mp4">	  	
	</video>

	    <!-- Optional: some overlay text to describe the video -->
	<div class="tt">
	  <h4>Startup</h4>
	  <p>We are progressing...</p>
	  <!-- Use a button to pause/play the video with JavaScript -->
	  <button id="myBtn" onclick="myFunction()">Pause</button>
	</div>
</div>

<script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}
</script>
<butto class="butto" style="vertical-align:middle"><a href="contact.php"><span>Contact us</span>
</button></a>
</body>
</html>