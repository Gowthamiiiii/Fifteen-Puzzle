<?php 
session_start();
$_SESSION['players'] = '';
?><!doctype unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
   
<div class="headingDiv">
	<marquee behavior="scroll" direction="right">Reach MileStone</marquee>
</div>
<div class="headingDiv2">
	<a href="http://www.twitter.com" target="_blank">
	<img class="headingDiv2IMG" alt="T" src="images/t.png"/>
	</a>
	
	<a href="http://www.facebook.com" target="_blank">
	<img class="headingDiv2IMG" alt="T" src="images/f.png"/>
	</a>
	
	<a href="http://www.youtube.com" target="_blank">
	<img class="headingDiv2IMG" alt="T" src="images/y.png"/>
	</a>
	
	<a href="http://www.pinterest.com" target="_blank">
	<img class="headingDiv2IMG" alt="T" src="images/p.png"/>
	</a>
</div>
<div class="menu">
	<img class="imgB1" src="images/success.png" />
	<ul>  
	 <li class="li0"><a class = "a1" ></a></li>
	  <li class="li1"><a class = "a1" class="active" href="index.php">HOME</a></li>
	  <li class="li2"><a class = "a2" href="about.php">ABOUT</a></li>	
	  <li class="li3"><a class = "a5" href="milestone.php">GAME</a></li>
	</ul>
</div>
    
    
<div style = "padding-top:5%; text-align:center" class="mainBodyDiv">
	
  <h1 >Welcome to the Dice Rolling Game!</h1>
  
  <p>Roll the dice and test your luck in this exciting game. See if you can roll the perfect combination and win big!</p>

  <h2>How to Play</h2>
  

  <p>Are you ready to roll the dice and take your chances? Start playing now and see if you can become the ultimate dice roller!</p>

  <button class="li3"><a class = "a5" href="milestone.php">GAME</a></button>
</div>

</div>


</body>
</html>
<?php
?>