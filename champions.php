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
	||		CHAMPIONS LOGO with CSS styles     ||
	=============================================-->
	
<div class="champlogo">
<img src="champs/Champions.jpg" 
     style="display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;" />
</div>

<!--============================================
	||		SWORDS LOGO with CSS styles       ||
	============================================-->
	
<div class="swords">
<img src="champs/swords.jpg" 
	 style="width: 200px;
			height: 100px;
			margin-top: -102px;"/>
</div>

<div class="swords2">
<img src="champs/swords.jpg" 
	 style="width: 200px;
			height: 100px;
			margin-top: -102px;
			margin-left: 800px;"/>
</div>


<!---=============================================
    ||     	  BODY OF THE PAGE STARTS HERE      ||
	==============================================-->


<div class="champions">
	<div class="zombiesheader"> 
		<h2> Reigning  Champions Of The Game </h2>
		<span id="close"> X </span>
	</div>


	<div class="zombiesbody">
		<img onclick="championinfo('Armored Boss');" src="champs/Armored Boss.jpg"/> 
		<img onclick="championinfo('Poison Jade');"src="champs/Poison Jade.jpg"/> 
		<img onclick="championinfo('Gun Master');"src="champs/Gun Master.jpg"/> 
		<img onclick="championinfo('Blade Warrior');"src="champs/Blade Warrior.jpg"/> 
		<img onclick="championinfo('Gravity Elf');"src="champs/Gravity Elf.jpg"/> 
		<img onclick="championinfo('Falcon Arrow');"src="champs/Falcon Arrow.jpg"/>
		<img onclick="championinfo('Plasma Gunner');"src="champs/Plasma Gunner.jpg"/> 
		<img onclick="championinfo('The Bomber');"src="champs/The Bomber.jpg"/> 
		<img onclick="championinfo('General Laser');"src="champs/General Laser.jpg"/> 
		<img onclick="championinfo('Flame Prince');"src="champs/Flame Prince.jpg"/>
		
				
	</div> <!--End of #championsbody-->

	<div id="infohere" class="zombieinfo">
	
	</div> <!--End of #championinfo-->
	
	

</div>

 
<!--============================================================
    ||			CHAMPION LARGE IMAGES AND SQL RESULT		  ||
	============================================================-->

<div class="champimages">
		<img src="champs/Armored Boss.jpg"/> </br>
		<img src="champs/Poison Jade.jpg"/> </br>
		<img src="champs/Gun Master.jpg"/> </br>
		<img src="champs/Blade Warrior.jpg"/> </br>
		<img src="champs/Gravity Elf.jpg"/> </br>
		<img src="champs/Falcon Arrow.jpg"/> </br>
		<img src="champs/Plasma Gunner.jpg"/> </br>
		<img src="champs/The Bomber.jpg"/> </br>
		<img src="champs/General Laser.jpg"/> </br>
		<img src="champs/Flame Prince.jpg"/> 
		
</div> <!--End of #champimages-->
		
		
		<div class="info1"> Champion #1: <span class="green"> Armored Boss </span>
		<div class="topline"> </div>
		</div>
		
		<div class="info2"> Champion #2: <span class="green"> Poison Jade </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info3"> Champion #3: <span class="green"> Gun Master </span>
		<div class="topline"> </div>  	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info4"> Champion #4: <span class="green"> Blade Warrior </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info5"> Champion #5: <span class="green"> Gravity Elf </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info6"> Champion #6: <span class="green"> Falcon Arrow </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info7"> Champion #7: <span class="green"> Plasma Gunner </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info8"> Champion #8: <span class="green"> The Bomber </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info9"> Champion #9: <span class="green"> General Laser </span>
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
		<div class="info10"> Champion #10: <span class="green"> Flame Prince </span> 
		<div class="topline"> </div> 	<!--White Line Under The Champions Name-->
		</div>
		
	
	
		
<!--===================================================================
    ||               BEGINNIG OF BODY OF CHAMPION CARDS  			 ||
	=================================================================== -->
	
<!--========================
	||   CHAMPION CARD 1   ||
	========================= -->
	
<div class="champbody1"> 
	<center> Who is <span class="green"> Armored Boss? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	A noble warrior trained to become one of the best zombie hunters
	in the world. He has a pretty strong armor that prevents zombies from
	spreading their plague into his flesh. </div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> Five-Seven </span> </br>
		2) Gun:  <span class="green"> Nova </span> </br>
		3) Special Ability: <span class="green"> Metal Erosion </span> </br> </br>
	
	
	<center>
	<div id="showability"> Show Ability
	</div> <!--End of #showability ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	<div id="effect">
	<center> </br>
	Slows down Robot Zombies by eroding their metal. </br>
	Speed of those zombies goes down from 200 to 180.
	</center> 
	</div> <!--End of ID #effect-->
	

</div> <!--End of #champbody1-->


<!--========================
	||   CHAMPION CARD 2   ||
	========================= -->

<div class="champbody2"> 
	<center> Who is <span class="green"> Poison Jade? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	She is well known for dealing with poisonous material. Her superpowers let her
	generate invisible poisonous shields that protect her from the zombies.
	</div> </br>
	Her weapons: </br>
		1) Pistol: <span class="green"> P2000 </span> </br>
		2) Gun:  <span class="green"> SG550 Sniper </span> </br>
		3) Special Ability: <span class="green"> Invisible Poison Shield </span> </br> </br>
	
	
	<center>
	<div id="showability2"> Show Ability
	</div> <!--End of #showability2 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect2">
	<center> </br>
	Generates an invisible poisonous shield that slows </br>
	down the speed of Reptile Zombies from 400 to 300.
	</center>
	</div> <!--End of ID #effect2-->
	
	
</div> <!--End of #champbody2-->
		

		
<!--========================
	||   CHAMPION CARD 3  ||
	========================= -->
	
<div class="champbody3"> 
	<center> Who is <span class="green"> Gun Master? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	Behind the mask hides a swift gun prodigy. His arms let him choose
	and shoot his guns so quickly that the zombies have almost no time to react.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> Dual Berettas </span> </br>
		2) Gun:  <span class="green"> Negev </span> </br>
		3) Special Ability: <span class="green"> Mask Of Torture </span> </br> </br>
	
	
	<center>
	<div id="showability3"> Show Ability
	</div> <!--End of #showability3 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect3">
	<center> </br>
	Removes the deadly ability of Toxic Zombies.
	</center>
	</div> <!--End of ID #effect3-->
	
	
</div> <!--End of #champbody3-->		
		

<!--========================
	||   CHAMPION CARD 4  ||
	========================= -->
	
<div class="champbody4"> 
	<center> Who is <span class="green"> Blade Warrior? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	The five-edged razor sharp blades of this zombie hunter are extremely fast
	that they can penetrate through a wall and several zombies at a time.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> R8 Revolver </span> </br>
		2) Gun:  <span class="green"> Remington 870 </span> </br>
		3) Special Ability: <span class="green"> Razor Blades </span> </br> </br>
	
	
	<center>
	<div id="showability4"> Show Ability
	</div> <!--End of #showability4 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect4">
	<center> </br>
	Hurts Classic Zombies by throwing </br> 
	sharp razor blades.
	</center>
	</div> <!--End of ID #effect4-->
	
	
</div> <!--End of #champbody4-->		
				
		
<!--========================
	||   CHAMPION CARD 5  ||
	========================= -->		
		
<div class="champbody5"> 
	<center> Who is <span class="green"> Gravity Elf? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	This elf is capable of controlling gravitational force with
	the help of his sixth sense. His power can have a negative impact on zombies.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> Colt-45 </span> </br>
		2) Gun:  <span class="green"> AWP Magnum </span> </br>
		3) Special Ability: <span class="green"> Gravity Force </span> </br> </br>
	
	
	<center>
	<div id="showability5"> Show Ability
	</div> <!--End of #showability5 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect5">
	<center> </br>
	Disables the Low Gravity of Jumper Zombies</br>
	for 1 minute.
	</center>
	</div> <!--End of ID #effect5-->
		
</div> <!--End of #champbody5-->		
				
		
<!--========================
	||   CHAMPION CARD 6  ||
	========================= -->	
		
<div class="champbody6"> 
	<center> Who is <span class="green"> Falcon Arrow? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	She is one of the protectors of the sky. Guided by her falcon,
	she is able to shoot her lightning quick arrows to annihilate zombies that
	are invading the sky.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> Desert Eagle </span> </br>
		2) Gun:  <span class="green"> M4A1 Carbine </span> </br>
		3) Special Ability: <span class="green"> Lightning Arrows </span> </br> </br>
	
	
	<center>
	<div id="showability6"> Show Ability
	</div> <!--End of #showability6 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect6">
	<center> </br>
	Disables Raptor Zombies from their </br>
	flying ability for 30 seconds.
	</center>
	</div> <!--End of ID #effect6-->		
		
</div> <!--End of #champbody6-->		
						
		
		
<!--========================
	||   CHAMPION CARD 7  ||
	========================= -->	
		
<div class="champbody7"> 
	<center> Who is <span class="green"> Plasma Gunner? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	This warrior has been able to gain control over the fourth state of matter - plasma.
	His genious mind created a plasma gun that he uses to destroy zombies that
	come in his way.
	
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> 228 Compact </span> </br>
		2) Gun:  <span class="green"> AK-47 </span> </br>
		3) Special Ability: <span class="green"> Toxic Plasma Balls </span> </br> </br>
	
	
	<center>
	<div id="showability7"> Show Ability
	</div> <!--End of #showability7 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect7">
	<center> </br>
	Generates toxic plasma balls from the Plasma Gun </br>
	that disallows Plasma Zombies to use their next </br>
	Metamorphosis ability for 1 minute.
	</center>
	</div> <!--End of ID #effect7-->		

</div> <!--End of #champbody7-->		
				
		
<!--========================
	||   CHAMPION CARD 8  ||
	========================= -->		
		
<div class="champbody8"> 
	<center> Who is <span class="green"> The Bomber? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	The biggest and strongest champion of them all. With his nuclear chemistry background
	this man is capable of creating big explosive bombs and throwing them at zombies.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> Tec-9 </span> </br>
		2) Gun:  <span class="green"> Famas </span> </br>
		3) Special Ability: <span class="green"> 3 Bombs </span> </br> </br>
	
	
	<center>
	<div id="showability8"> Show Ability
	</div> <!--End of #showability8 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect8">
	<center> </br>
	Shoots 3 explosive bombs towards Big Zombies </br>
	and reduces their Strength ability.
	</center>
	</div> <!--End of ID #effect8-->		

</div> <!--End of #champbody8-->		
					
		
<!--========================
	||   CHAMPION CARD 9  ||
	========================= -->
		
<div class="champbody9"> 
	<center> Who is <span class="green"> General Laser? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	Leaving the airforce he decides to go on a quest to kill zombies with his
    special LED laser gun that is able to generate and deploy laser mines.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> Glock-18 </span> </br>
		2) Gun:  <span class="green"> Leone Super </span> </br>
		3) Special Ability: <span class="green"> Laser Mines </span> </br> </br>
	
	
	<center>
	<div id="showability9"> Show Ability
	</div> <!--End of #showability9 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect9">
	<center> </br>
	Deploys 2 LED laser mines towards Frozen Zombies </br>
	and freezes them for 3 seconds instead of the Champion.
	</center>
	</div> <!--End of ID #effect9-->		

</div> <!--End of #champbody9-->		
					
		
<!--========================
	||   CHAMPION CARD 10  ||
	========================= -->		
	
<div class="champbody10"> 
	<center> Who is <span class="green"> Flame Prince? </span> </center> </br>
	
	<div class="gold" style="color: #FEEA00;">
	He is all about the flames. Fire is burning in his veins.
	This </br> master of fire is able to kill zombies by using 
	his special flame thrower that burns the flesh of zombies.
	</div> </br>
	His weapons: </br>
		1) Pistol: <span class="green"> USP </span> </br>
		2) Gun:  <span class="green"> Gearbox M60 </span> </br>
		3) Special Ability: <span class="green"> Flame Thrower </span> </br> </br>
	
	
	<center>
	<div id="showability10"> Show Ability
	</div> <!--End of #showability10 ID-->
	</center>
	
	<center> (see what the special ability does!) </center> 
	</br> </br>
	
	
	
	<div id="effect10">
	<center> </br>
	Throws flames at Scanner Zombies and disables </br>
	their Radar ability for 40 seconds.
	</center>
	</div> <!--End of ID #effect10-->
	
</div> <!--End of #champbody10-->		


<!--===============================================================
    ||               END OF BODY OF CHAMPION CARDS  			 ||
	===============================================================-->
	

<!--==============================
    ||		BACKGROUND MUSIC	||
	==============================-->

<embed src="audio/champions.mp3" autostart="true" loop="true"
	   width="0" height="0">
</embed>


<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/copyrightchamps.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/footer.php';?>
