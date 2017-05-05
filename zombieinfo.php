<?php
 $name = $_POST["name"];
 //print_r($_POST);
try {
    $db = new PDO("mysql:host=localhost;dbname=champs_vs_zombies", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 
$name = $db->quote($_POST["name"]);
$query = "SELECT name, ability, health, speed, gravity, knockback, model, clawmodel
		  FROM zombies 
		  WHERE name = $name;";
$rows = $db->query($query);?>

 
 <?php  $i = 1; 
		
		foreach ($rows as $row) { 
	
			list($name, $ability , $health, $speed,
				 $gravity, $knockback, $model, $clawmodel) = $row; 
				
			$i++;?>
			

	
			
<div class="feature">
Name of Zombie:</div> <div class="z1"> <?php echo $name;?> </br> </div>
<div class="feature">
Ability:</div> <div class="z1"> <?php echo $ability;?> </br> </div>
<div class="feature">
Health:</div> <div class="z1"> <?php echo $health;?> </br> </div>
<div class="feature">
Speed:</div> <div class="z1"> <?php echo $speed;?> </br> </div> 
<div class="feature">
Gravity:</div> <div class="z1">  <?php echo $gravity;?> </br> </div>
<div class="feature">
Knockback:</div> <div class="z1">  <?php echo $knockback;?> </br> </div>
<div class="feature">
Model:</div> <div class="z1">  <?php echo $model;?> </br> </div>
<div class="feature">
Clawmodel:</div> <div class="z1"> <?php echo $clawmodel;?> </br> </div>


<div id="image1"> 
<img src= "zom/zombie sign2.jpg" /> 
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




