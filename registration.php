<?php
		
		$con=mysql_connect("localhost","maheshtolani","soeasy6544.") or die("cant connect");
		$query="use hello";    //hello is dbname and registration is table in it
		mysql_query($query) or die("db not selected");
		
		
		if(isset($_POST['register']))
		{
			//first we ll chck der entry alrdy exist or not to prvnt duplicate entries
			
			$e=$_POST["email"];
			$u=$_POST["username"];
			$p=$_POST["password"];
			$b=$_POST["bdate"];
			
			$query2="select * from registration WHERE email='$e'";
			$result=mysql_query($query2);     //we execute query and str it in result
			
			$count=mysql_num_rows($result);       //nw see dat rsult contains row or not
			
			if($count==0 && $_POST["password"]===$_POST["password2"])  // means no rows fetched means no accnt
			{
				$query3="insert into registration values('$u','$e','$p','$b')";
				mysql_query($query3);  //call on connectin object
				
				echo "<br><br><br><pre>    registration succesful : please login <a href='login.php'>Login</a> </pre>";
				//header("location:login.php");                                           //single quotes here
			}
			else if($_POST["password"]!=$_POST["password2"]){echo "<br><br><br><pre>        please try again : passwords didnt match</pre>";}
			else
			{	
				header("location:already.html");	
				echo "<b>user already exists</b>";
			}
			
			
			
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
	
	<form action="registration.php" method="post" name="form1">
	<fieldset style="padding:30px;margin:10px;width:700px;">
		<legend style="font-size:20px;font-weight:bolder;"> Registration </legend>
		Userame:* <input type="text" name="username" placeholder="enter name here" required/><br><br>
		email:* <input type="email" name="email" placeholder="enter email here" required /><br><br>
		birthdate:* <input type="date" name="bdate" required style="width:130px;" /><br><br>
		Password:* <input type="password" name="password" id="password" placeholder="enter paswd here" required /><br><br>
		Confirm Password:*<input type="password" name="password2" id="password2" placeholder="enter paswd again" required/> <br><br><br>
		<input type="submit" value="Register" name="register" onclick="validate();"/>
		<br> <br>
		 
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

	<script> 
		function validate()
		{ 
			var pwd2 = document.getElementById("password2").value;
			var pwd1 = document.getElementById("password").value;
		
				if(pwd1 === pwd2){ alert('ok');}
				else {alert('passwords do not match');
				pwd1.focus();
				pwd1.select();}
		}
	</script>
	
</body>

</html>