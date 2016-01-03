<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="../js/script.js"></script>
</head>
<body>
<!--Fixed menu with logo-->		
	<header class="large">
	<!--begin div Logo-->
		<div id="logo">
			<a href="#"><h1>
			Just<span class="acolor">A</span>
			<span class="salt"><p>name<p></span>
			</h1></a>
		</div>
	<!--end of div logo-->
	<nav id="topmenu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	</header>
<!--After menu-->
	<section>
		<article>
			<div id="box1">
				<video width="799px" height="469px" controls id="videot">
					<source src="../daynight.mp4" type="video/mp4">
					Sorry, your browser does not support this video.
				</video>
				<button type="button" onclick="videoprog()">Teste</button>
				<p class="dur"></p>
			</div>

		</article>
	</section>

</body>
</html>