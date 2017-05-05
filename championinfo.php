<?php
 $name = $_POST["name"];
 //print_r($_POST);
try {
    $db = new PDO("mysql:host=localhost;dbname=champs_vs_zombies", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 
$name = $db->quote($_POST["name"]);
$query = "SELECT name, pistol, gun, special_ability
		  FROM champions
		  WHERE name = $name;";
$rows = $db->query($query);?>

 
 <?php  $i = 1; 
		
		foreach ($rows as $row) { 
	
			list($name, $pistol, $gun, $special_ability) = $row; 
				
			$i++;?>
			

<div class="feature">
Name of Champion:</div> <div class="z1"> <?php echo $name;?> </br> </div>
<div class="feature">
Pistol:</div> <div class="z1"> <?php echo $pistol;?> </br> </div>
<div class="feature">
Gun:</div> <div class="z1"> <?php echo $gun;?> </br> </div>
<div class="feature">
Special Ability:</div> <div class="z1"> <?php echo $special_ability;?> </div> 

<div id="image3"> 
<img src= "champs/star.png" /> 
</div>	

<div id="image4"> 
<img src= "champs/champwarning.jpg" /> 
</div>	

<div id="image5"> 
<img src= "champs/star.png" /> 
</div>	

 <!--End of .z1# features-->
			


<?php   }}
 catch(PDOException $ex)
    {
    echo "Connection failed: " . $ex->getMessage();
    } ?>




