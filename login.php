<?php
		$con=mysql_connect("localhost","maheshtolani","soeasy6544.") or die("cant connect");
		
		$quer="use hello";
		mysql_query($quer) or die("cant use db");
		
		if(isset($_POST["login"]))
		{
			$u=$_POST["username"];
			$p=$_POST["password"];
			
			$query1 = "select * from registration WHERE username='$u' AND password='$p'";
			$result=mysql_query($query1);
			
			$count=mysql_num_rows($result);
			
			if($count==1)
			{
				header("location:index.html");
			}
		else {echo "<br><br><br> user doesnt exist pls register";}
			
		}

?>






<!DOCTYPE html>

<html lang="en">
 <head>
	<link rel="stylesheet" type="text/css" href="login.css" / >
	<meta charset="UTF-8" />
 </head>

<body>
	<div id="trendingnowcontainer">
	
	<header></header>
	
	<nav id="nav">
			 <ul>
				<li><a href="../index.html"><img class="image" src="../homeicon.png" height="20" width="20" style="margin:auto;"/></a></li>
		        <li><a href="../trendingnow/trendingnow.html">Trending now</a></li>
				
				<div class="dropdown">
					<li><a href="../music/music.html">Music</a></li>
					
					<div class="ddcontent">
						<ul class="ddlist">
							<li><a href="../music/bollywood/bollywood.html">Bollywood</a></li>
							<li><a href="#">Retro</a></li>
							<li><a href="#">English</a></li>
							<li><a href="#">Coke Studio</a></li>
						</ul>
					</div>
					
				</div>	
				
				<li><a href="../liveradio/liveradio.html">Live Radio</a></li>
				
				<div class="dropdown">
					<li><a href="../videos/videos.html">Videos</a></li>
					
				<div class="ddcontent">
						<ul class="ddlist">
							<li><a href="#">Bollywood</a></li>
							<li><a href="#">Single Albums</a></li>
							<li><a href="#">English</a></li>
							<li><a href="#">Live Concerts</a></li>
						</ul>
					</div>	
					
				</div>	
				<li><a href="../emotionbase/emotionbase.html">Emotion base</a></li>
				<li><a href="../contactus/contactus.html">Contact us</a></li>
			  </ul>
			
			</nav>
				
	<section id="section">
	
	<form action="login.php" method="post" name="form1">
	<fieldset style="padding:30px;margin:10px;width:700px;">
		<legend style="font-size:20px;font-weight:bolder;"> Login </legend>
		Userame:* <input type="text" name="username" placeholder="enter name here" required/><br><br>
		Password:* <input type="password" name="password" placeholder="enter paswd here" required /><br><br>
		<input type="submit" value="Login" name="login" />
		<br> <br>
		Don't have an account ? <a href="registration.php" style="color:#e64805;font-weight:bolder;">Register Now !</a> 
	</fieldset>
	
	
	</form>
	
	</section>
	
	
	
	<aside id="aside">
		<p style="font-size:20px;"><b>Recommended for you: </b> </p><br><br>
			<p> kdjlskjd f <br><br> adlkjakljdfasdfk <br><br> alsdkjfksd jfsdj<br><br> aksjdflkajsdklfj aksdj </p>
																															
	
	</aside>
	
		<footer id="footer">
			  
				<div id="contactusfooter">
					<p class="parafoot">Contact us :</p>
					<p style="opacity:0.5">
					<br>
					Email: tolani.mahesh72@gmail.com<br><br>Phone:9726625556<br>
					</p>
				</div>
				
				<div id="usefullinks">
					<p class="parafoot">Useful LInks</p>
					<p style="opacity:0.5">
					<br><br>radiogroup<br><br>video<br><br>music<br><br>live radio</p>
				</div>
				
				<div id="copyright">
				<p style="opacity:0.5;">copyright www.website.com All Rights Reserved&copy;</p></div>
			</footer>
		
	
	</div>

</body>

</html>