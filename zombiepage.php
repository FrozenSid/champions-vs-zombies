<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/include.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/menu.php';?>

<title> Champions VS Zombies </title>

<!--Favicon-->
<link href="favicon.png" type="image/x-icon" rel="shortcut icon" />		
<script src="http://code.jquery.com/jquery-1.11.2.min.js"> </script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"> </script>
<!--include the jQuery functions-->

<link href="css/style.css" type="text/css" rel="stylesheet" />


<!--=============================================
	||		ZOMBIES LOGO with CSS styles     ||
	=============================================-->
	
<div class="zmlogo">
<img src="zom/zombies.png" 
     style="display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;" />
</div>

<!--============================================
	||		TOXIC SIGN LOGO with CSS styles       ||
	============================================-->
	
<div class="toxic-icon">
<img src="zom/toxic-logo.jpg" 
	 style="width: 140px;
			height: 118px;
			margin-top: -125px;
			margin-left: 180px;"/>
</div>

<div class="toxic-icon2">
<img src="zom/toxic-logo.jpg" 
	 style="width: 140px;
			height: 118px;
			margin-top: -125px;
			margin-left: 685px;"/>
</div>

<div class="neon-icon">
<img src="zom/neon-icon.png" 
	 style="width: 175px;
			height: 120px;
			margin-top: -130px;
			margin-left: -40px;"/>
</div>

<div class="neon-icon2">
<img src="zom/neon-icon.png" 
	 style="width: 175px;
			height: 120px;
			margin-top: -130px;
			margin-left: 862px;"/>
</div>


<!---=============================================
    ||     	  BODY OF THE PAGE STARTS HERE      ||
	==============================================-->


<div class="champions">
	<div class="zombiesheader"> 
		<h2> Malicious Zombies Of The Game </h2>
		<span id="close"> X </span>
	</div>
	
	<div class="zombiesbody">
	    <img onclick="zombieinfo('Classic Zombie');" src="zom/ClassicZM.jpg"/>
		<img onclick="zombieinfo('Jumper Zombie');" src="zom/JumperZM.jpg"/>
		<img onclick="zombieinfo('Reptile Zombie');" src="zom/ReptileZM.jpg"/>
		<img onclick="zombieinfo('Frozen Zombie');" src="zom/FrozenZM.jpg"/>
		<img onclick="zombieinfo('Raptor Zombie');" src="zm/RaptorZM.jpg"/>
		<img onclick="zombieinfo('Toxic Zombie');" src="zom/ToxicZM.jpg"/>	
		<img onclick="zombieinfo('Plasma Zombie');" src="zom/RockZM.jpg"/>
		<img onclick="zombieinfo('Robot Zombie');" src="zom/RobotZM.jpg"/>
		<img onclick="zombieinfo('Big Zombie');" src="zom/BigZM.jpg"/>	
		<img onclick="zombieinfo('Scanner Zombie');" src="zom/ScannerZM.jpg"/>
		
				
	</div> <!--End of #zombiesbody-->

	<div id="infohere" class="zombieinfo">  </div>
	
</div> <!--End of #zombies using #champions ID-->

<!--============================================================
    ||			CHAMPION LARGE IMAGES AND SQL RESULT		  ||
	============================================================-->

<div class="zmimages">
		<img src="zm/ClassicZM.jpg"/> </br>
		<img src="zm/JumperZM.jpg"/> </br>
		<img src="zm/ReptileZM.jpg"/> </br>
		<img src="zm/FrozenZM.jpg"/> </br>
		<img src="zm/RaptorZM.jpg"/> </br>
		<img src="zm/ToxicZM.jpg"/> </br>
		<img src="zm/RockZM.jpg"/> </br>
		<img src="zm/RobotZM.jpg"/> </br>
		<img src="zm/BigZM.jpg"/> </br>
		<img src="zm/ScannerZM.jpg"/> 
		
</div> <!--End of #zmimages-->


		<div class="info1"> Zombie #1: <span class="green"> Classic Zombie </span>
		<div class="topline"> </div>
		</div>
		
		<div class="info2"> Zombie #2: <span class="green"> Jumper Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info3"> Zombie #3: <span class="green"> Reptile Zombie </span>
		<div class="topline"> </div>  	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info4"> Zombie #4: <span class="green"> Frozen Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info5"> Zombie #5: <span class="green"> Raptor Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info6"> Zombie #6: <span class="green"> Toxic Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info7"> Zombie #7: <span class="green"> Plasma Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info8"> Zombie #8: <span class="green"> Robot Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info9"> Zombie #9: <span class="green"> Big Zombie </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info10"> Zombie #10: <span class="green"> Scanner Zombie </span> 
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
	
	
		
<!--===================================================================
    ||               BEGINNIG OF BODY OF ZOMBIE CARDS  			 ||
	=================================================================== -->
	
<!--========================
	||   ZOMBIE CARD 1   ||
	========================= -->

<div class="champbody1"> 
	<center> What are the features of <span class="green"> Classic Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 2500 </span> </br>
		2) Speed:  <span class="green"> 230 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 1.0 </span> </br>
		5) Special Ability: <span class="green"> Balanced </span> </br> </br>
	
	
	<center>
	<div id="showability"> Show Ability
	</div> <!--End of #showability ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect">
	<center> </br>
	 This zombie has the standard health, speed, </br>
	 gravity, and knockback features.
	</center> 
	</div> <!--End of ID #effect-->
	

</div> <!--End of #champbody1-->


<!--========================
	||   ZOMBIE CARD 2   ||
	========================= -->

<div class="champbody2"> 
	<center> What are the features of <span class="green"> Jumper Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 2200 </span> </br>
		2) Speed:  <span class="green"> 230 </span> </br>
		3) Gravity: <span class="green"> 0.5 </span> </br>
		4) Knockback: <span class="green"> 1.0 </span> </br>
		5) Special Ability: <span class="green"> Low Gravity </span> </br> </br>
	
	
	<center>
	<div id="showability2"> Show Ability
	</div> <!--End of #showability2 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect2">
	<center> </br>
	 The low gravity of this zombie allows it to jump </br>
	 very high in the air compared to other zombies.
	</center> 
	</div> <!--End of ID #effect2-->
	

</div> <!--End of #champbody2-->
	

<!--========================
	||   ZOMBIE CARD 3   ||
	========================= -->

<div class="champbody3"> 
	<center> What are the features of <span class="green"> Reptile Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 2000 </span> </br>
		2) Speed:  <span class="green"> 400 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 1.3 </span> </br>
		5) Special Ability: <span class="green"> Speed </span> </br> </br>
	
	
	<center>
	<div id="showability3"> Show Ability
	</div> <!--End of #showability3 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect3">
	<center> </br>
	 The speed ability of this zombie allows it to be very </br> 
	 fast catching the champions in a matter of milliseconds.
	</center> 
	</div> <!--End of ID #effect3-->
	
</div> <!--End of #champbody3-->


<!--========================
	||   ZOMBIE CARD 4   ||
	========================= -->

<div class="champbody4"> 
	<center> What are the features of <span class="green"> Frozen Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 1500 </span> </br>
		2) Speed:  <span class="green"> 240 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 0.7 </span> </br>
		5) Special Ability: <span class="green"> Freezing </span> </br> </br>
	
	
	<center>
	<div id="showability4"> Show Ability
	</div> <!--End of #showability4 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect4">
	<center> </br>
	 The freezing ability of this zombie allows it to freeze </br>
	 (disable) the pistol and gun of a champion for 5 seconds.
	</center> 
	</div> <!--End of ID #effect4-->
	
</div> <!--End of #champbody4-->


<!--========================
	||   ZOMBIE CARD 5   ||
	========================= -->

<div class="champbody5"> 
	<center> What are the features of <span class="green"> Raptor Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 2000 </span> </br>
		2) Speed:  <span class="green"> 300 </span> </br>
		3) Gravity: <span class="green"> 0.1 </span> </br>
		4) Knockback: <span class="green"> 1.2 </span> </br>
		5) Special Ability: <span class="green"> Flying </span> </br> </br>
	
	
	<center>
	<div id="showability5"> Show Ability
	</div> <!--End of #showability5 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect5">
	<center> </br>
	 This zombie has the ability of flying which helps it easily</br>
	 catch champions that are hiding on top of buildings or any other heights.
	</center> 
	</div> <!--End of ID #effect5-->
	
</div> <!--End of #champbody5-->
	
	
<!--========================
	||   ZOMBIE CARD 6   ||
	========================= -->

<div class="champbody6"> 
	<center> What are the features of <span class="green"> Toxic Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 1500 </span> </br>
		2) Speed:  <span class="green"> 250 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 0.6 </span> </br>
		5) Special Ability: <span class="green"> Deadly </span> </br> </br>
	
	
	<center>
	<div id="showability6"> Show Ability
	</div> <!--End of #showability6 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect6">
	<center> </br>
	 The deadly ability of this zombie kills champions </br>
	 instead of infecting them like other zombies do.
	</center> 
	</div> <!--End of ID #effect6-->
	
</div> <!--End of #champbody6-->

<!--========================
	||   ZOMBIE  CARD 7   ||
	========================= -->

<div class="champbody7"> 
	<center> What are the features of <span class="green"> Plasma Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 2400 </span> </br>
		2) Speed:  <span class="green"> 240 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 1.0 </span> </br>
		5) Special Ability: <span class="green"> Metamorphosis </span> </br> </br>
	
	
	<center>
	<div id="showability7"> Show Ability
	</div> <!--End of #showability7 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect7">
	<center> </br>
	 The metamorphosis of this zombie allows it to transform its body </br>
	 to look like any other zombie in the game which is a trap for champions.
	
	</center> 
	</div> <!--End of ID #effect7-->
	
</div> <!--End of #champbody7-->

<!--========================
	||   ZOMBIE  CARD 8   ||
	========================= -->	

<div class="champbody8"> 
	<center> What are the features of <span class="green"> Robot Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 10000 </span> </br>
		2) Speed:  <span class="green"> 200 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 0.7 </span> </br>
		5) Special Ability: <span class="green"> 10,000 Health Points</span> </br> </br>
	
	
	<center>
	<div id="showability8"> Show Ability
	</div> <!--End of #showability8 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect8">
	<center> </br>
	 This zombie has a metal armor which provides it with </br>
	 10,000 health and this makes it really hard to kill it.
	
	</center> 
	</div> <!--End of ID #effect8-->
	
</div> <!--End of #champbody8-->	
	
<!--========================
	||  	ZOMBIE CARD 9   ||
	========================= -->

<div class="champbody9"> 
	<center> What are the features of <span class="green"> Big Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 4500 </span> </br>
		2) Speed:  <span class="green"> 190 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 0.7 </span> </br>
		5) Special Ability: <span class="green"> Strenght </span> </br> </br>
	
	
	<center>
	<div id="showability9"> Show Ability
	</div> <!--End of #showability9 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect9">
	<center> </br>
	 This zombie is very strong which makes it hard </br>
	 to kill because of its high health points.
	
	</center> 
	</div> <!--End of ID #effect9-->
	
</div> <!--End of #champbody9-->	

<!--========================
	||   ZOMBIE  CARD 10   ||
	========================= -->	
	
	
<div class="champbody10"> 
	<center> What are the features of <span class="green"> Scanner Zombie? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	These are based on the standard features of Classic Zombie.</div> </br>
	<div class= "gold" style="color: #FFEA00;"> Zombie Features: </div>
		1) Health: <span class="green"> 2000 </span> </br>
		2) Speed:  <span class="green"> 230 </span> </br>
		3) Gravity: <span class="green"> 1.0 </span> </br>
		4) Knockback: <span class="green"> 0.8 </span> </br>
		5) Special Ability: <span class="green"> Radar </span> </br> </br>
	
	
	<center>
	<div id="showability10"> Show Ability
	</div> <!--End of #showability10 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect10">
	<center> </br>
	 The radar ability of this zombie allows it to see through walls </br>
	 which helps it determine where the champions are hiding.
	
	</center> 
	</div> <!--End of ID #effect10-->
	
</div> <!--End of #champbody10-->	
	

<!--===============================================================
    ||               END OF BODY OF CHAMPION CARDS  			 ||
	=============================================================== -->
	

<!--==============================
    ||		BACKGROUND MUSIC	||
	============================== -->

<embed src="audio/zombies.mp3" autostart="true" loop="true"
	   width="0" height="0">
</embed> 


<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/copyrightzombies.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/footer.php';?>

