<?php
 $name = $_POST["name"];
 //print_r($_POST);
try {
    $db = new PDO("mysql:host=localhost;dbname=champs_vs_zombies", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 
$name = $db->quote($_POST["name"]);
$query = "SELECT name, ability, health, speed, gravity, knockback, model, clawmodel
		  FROM newzombies 
		  WHERE name = $name;";
$rows = $db->query($query);?>

 
 <?php  $i = 1; 
		
		foreach ($rows as $row) { 
	
			list($name, $ability , $health, $speed,
				 $gravity, $knockback, $model, $clawmodel) = $row; 
				
			$i++;?>
			
	
<div class="group">
Name of Zombie: <span class="lime"> <?php echo $name;?> </span> </br>
Ability: <span class="lime"> <?php echo $ability;?> </span> </br> 
Health: <span class="lime"> <?php echo $health;?> </span> </br>
Speed: <span class="lime"> <?php echo $speed;?> </span> </br> 
Gravity: <span class="lime"> <?php echo $gravity;?> </span> </br>
Knockback: <span class="lime"> <?php echo $knockback;?> </span> </br>
Model: <span class="lime"> <?php echo $model;?> </span> </br>
Clawmodel: <span class="lime"> <?php echo $clawmodel;?> </span> 
</div> <!--END of #group-->


<div id="image1"> 
<img src= "zom/zombiezone.png" /> 
</div>	

<div id="image2"> 
<img src= "zom/warning.jpg" /> 
</div>	

 <!--End of .z# features-->



<?php   }}
 catch(PDOException $ex)
    {
    echo "Connection failed: " . $ex->getMessage();
    } ?>