<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/include.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/menu.php';?>

<title> Champions VS Zombies </title>

<!--Favicon-->
<link href="favicon.png" type="image/x-icon" rel="shortcut icon" />		
<script src="http://code.jquery.com/jquery-1.11.2.min.js"> </script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"> </script>
<!--include the jQuery functions-->

<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="db.css" type="text/css" rel="stylesheet"/>


<!--=============================================
	||		GUIDES LOGO with CSS styles        ||
	=============================================-->
	
<div class="guigeslogo">
<img src="guides/survivalguide.png" 
     style="display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;
			height: 150px;
			width: 600px;" />
</div>

<!--=================================================
	||		SMALL LIST ICON LOGO with CSS styles    ||
	=================================================-->
	
<div class="list">
<img src="guides/survivalkit.png" 
	 style="width: 190px;
			height: 120px;
			margin-top: -140px;
			margin-left: -50px;"/>
</div>

<div class="list">
<img src="guides/survivalkit.png" 
	 style="width: 190px;
			height: 120px;
			margin-top: -140px;
			margin-left: 840px;"/>
</div>


<!---=============================================
    ||     	  BODY OF THE PAGE STARTS HERE      ||
	==============================================-->

	<div class="whathere">
	What can you find here?
	</div>  <!--END OF #whathere-->
<div class="general"> 
<p> In this page you will find useful <span class="words"> hints, tips, and guidelines </span>
	about the champions and zombies.
    This information will help you become a better player in the game.
	From it you can build strategies, avoid being infected by zombies and survive every round as a champion.</p>
</div>  <!--END OF #general-->	




<!---======================================
    ||     	  ZOMBIE HINTS AND TIPS      ||
	=======================================-->


<div class="zmhints">
Useful Zombie Hints, Tips, and Guidelines 

<div class="bottomborder"> </div>

<!---=================================
    ||     	 1-st ZOMBIE QUERY      ||
	==================================-->

<div id="query1"> Show Results! </div>
<div id="zmquery"> 1. Which are the fastest zombies? 
</div> <!--END OF zmquery1-->

<div id="showresult1"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT id, name, speed
				  FROM zombies
				  WHERE speed > 250;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Zombie ID</th> <th>Zombie Name</th> <th>Speed</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $speed) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $speed ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult1-->



<!---=================================
    ||     	 2-nd ZOMBIE QUERY      ||
	==================================-->


<div id="query2"> Show Results! </div>
<div id="zmquery"> 2. Which zombies have the most health?
</div> <!--END OF zmquery1-->

<div id="showresult2"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT id, name, health
				  FROM zombies
				  WHERE health > 2500;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Zombie ID</th> <th>Zombie Name</th> <th>Health</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $health) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $health ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult2-->



<!---=================================
    ||     	 3-rd ZOMBIE QUERY      ||
	==================================-->

<div id="query3"> Show Results! </div>
<div id="zmquery"> 3. Which zombies have gravity lower than 1.0? 
</div> <!--END OF zmquery1-->

<div id="showresult3"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT id, name, gravity
				  FROM zombies
				  WHERE gravity < 1;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Zombie ID</th> <th>Zombie Name</th> <th>Gravity</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gravity) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gravity ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult3-->
	
	
<!---=================================
    ||     	 4-th ZOMBIE QUERY      ||
	==================================-->
	
<div id="query4"> Show Results! </div>
<div id="zmquery"> 4. Which zombies have knockback less than 1.0? 
</div> <!--END OF zmquery1-->

<div id="showresult4"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT id, name, knockback
				  FROM zombies
				  WHERE knockback < 1.0 ;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Zombie ID</th> <th>Zombie Name</th> <th>Knockback</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $knockback) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $knockback ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult4-->
	
	
<!---=================================
    ||     	 5-th ZOMBIE QUERY      ||
	==================================-->
	
<div id="query5"> Show Results! </div>
<div id="zmquery"> 5. Which zombies have knockback greater than 1.0? 
</div> <!--END OF zmquery-->

<div id="showresult5"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT id, name, knockback
				  FROM zombies
				  WHERE knockback > 1.0 ;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Zombie ID</th> <th>Zombie Name</th> <th>Knockback</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $knockback) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $knockback ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult5-->
	
	
	
	
	



</div> <!--END OF #zmhints-->



	
<!---=================================
    ||    CHAMPION HINTS AND TIPS    ||
	==================================-->

<div class="champhints">
Useful Champion Hints, Tips, and Guidelines 

<div class="bottomborder"> </div>
	
	
<!---=================================
    ||     	 1-st CHAMPION QUERY      ||
	==================================-->

<div id="query6"> Show Results! </div>
<div id="champquery"> 1. Which champions have the best pistols - cost $1000? 
</div> <!--END OF champquery-->

<div id="showresult6"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.pistol_id, c.pistol, p.price
				  FROM champions c
				  JOIN pistols p ON p.id = c.pistol_id
				  WHERE p.price = 1000;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Pistol ID</th> <th>Pistol</th> <th>Price</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $pistol_id, $pistol, $price) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $pistol_id ?></td>
				<td><?= $pistol ?></td>
				<td>$<?= $price ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult6-->

<!---=================================
    ||     	 2-nd CHAMPION QUERY      ||
	==================================-->

<div id="query7"> Show Results! </div>
<div id="champquery"> 2. Which champions have pistols with bullet damage more than 20? 
</div> <!--END OF champquery-->

<div id="showresult7"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.pistol_id, c.pistol, p.bullet_damage
				  FROM champions c
				  JOIN pistols p ON p.id = c.pistol_id
				  WHERE p.bullet_damage > 20;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Pistol ID</th> <th>Pistol</th> <th>Bullet Damage</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $pistol_id, $pistol, $bullet_damage) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $pistol_id ?></td>
				<td><?= $pistol ?></td>
				<td><?= $bullet_damage ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult7-->


<!---=================================
    ||     	 3-rd CHAMPION QUERY      ||
	==================================-->

<div id="query8"> Show Results! </div>
<div id="champquery"> 3. Which champions have pistol mag capacity equal to or above 100?
</div> <!--END OF champquery-->

<div id="showresult8"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.pistol_id, c.pistol, p.magazine_capacity
				  FROM champions c
				  JOIN pistols p ON p.id = c.pistol_id
				  WHERE p.magazine_capacity LIKE '%/100' OR 
						p.magazine_capacity LIKE '%/120' OR 
						p.magazine_capacity LIKE '%/200';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Pistol ID</th> <th>Pistol</th> <th>Magazine Capacity</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $pistol_id, $pistol, $magazine_capacity) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $pistol_id ?></td>
				<td><?= $pistol ?></td>
				<td><?= $magazine_capacity ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult8-->
	
	
<!---=================================
    ||     	 4-th CHAMPION QUERY      ||
	==================================-->


<div id="query9"> Show Results! </div>
<div id="champquery"> 4. Which champions have pistol magazine capacity less than 100?
</div> <!--END OF champquery-->

<div id="showresult9"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.pistol_id, c.pistol, p.magazine_capacity
				  FROM champions c
				  JOIN pistols p ON p.id = c.pistol_id
				  WHERE p.magazine_capacity LIKE '%/8' OR 
						p.magazine_capacity LIKE '%/10' OR 
						p.magazine_capacity LIKE '%/24' OR
						p.magazine_capacity LIKE '%/35' OR
						p.magazine_capacity LIKE '%/50';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Pistol ID</th> <th>Pistol</th> <th>Magazine Capacity</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $pistol_id, $pistol, $magazine_capacity) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $pistol_id ?></td>
				<td><?= $pistol ?></td>
				<td><?= $magazine_capacity ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult9-->	
	
<!---=================================
    ||     	 5-th CHAMPION QUERY      ||
	==================================-->

<div id="query10"> Show Results! </div>
<div id="champquery"> 5. Which champions have the best guns - cost $3000 or more?
</div> <!--END OF champquery-->

<div id="showresult10"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.price
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.price >= 3000;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th> Price</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $price) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $price ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult10-->
	
<!---=================================
    ||     	 6-th CHAMPION QUERY      ||
	==================================-->

<div id="query11"> Show Results! </div>
<div id="champquery"> 6. Which champions have guns under the category of Assault Rifles?
</div> <!--END OF champquery-->

<div id="showresult11"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.category
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.category = 'Assault Rifle';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Gun Category</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $category) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $category ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult11-->
	
	
<!---=================================
    ||     	 7-th CHAMPION QUERY      ||
	==================================-->

<div id="query12"> Show Results! </div>
<div id="champquery"> 7. Which champions have guns under the category of Sniper Rifles?
</div> <!--END OF champquery-->

<div id="showresult12"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.category
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.category = 'Sniper Rifle';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Gun Category</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $category) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $category ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult12-->

<!---=================================
    ||     	 8-th CHAMPION QUERY      ||
	==================================-->

<div id="query13"> Show Results! </div>
<div id="champquery"> 8. Which champions have guns under the category of Shotguns?
</div> <!--END OF champquery-->

<div id="showresult13"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.category
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.category = 'Shotgun';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Gun Category</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $category) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $category ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult13-->

<!--=================================
    ||     	 9-th CHAMPION QUERY      ||
	==================================-->	

<div id="query14"> Show Results! </div>
<div id="champquery"> 9. Which champions have guns under the category of Machine Guns?
</div> <!--END OF champquery-->

<div id="showresult14"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.category
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.category = 'Machine Gun';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Gun Category</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $category) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $category ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult14-->	

<!---===================================
    ||     	 10-th CHAMPION QUERY      ||
	==================================-->

<div id="query15"> Show Results! </div>
<div id="champquery"> 10. Which champions have guns with bullet damage more than 30?
</div> <!--END OF champquery-->

<div id="showresult15"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.bullet_damage
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.bullet_damage > 30;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Bullet Damage</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $bullet_damage) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $bullet_damage ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult15-->		
	

<!---===================================
    ||     	 11-th CHAMPION QUERY      ||
	==================================-->
	
<div id="query16"> Show Results! </div>
<div id="champquery"> 11. Which champions have gun magazine capacity equal to or above 90?
</div> <!--END OF champquery-->

<div id="showresult16"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.magazine_capacity
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.magazine_capacity LIKE '%/90' OR
						g.magazine_capacity LIKE '%/200';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Magazine Capacity</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $magazine_capacity) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $magazine_capacity ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult16-->	
	
	
<!---===================================
    ||     	 12-th CHAMPION QUERY      ||
	==================================-->
	
<div id="query17"> Show Results! </div>
<div id="champquery"> 12. Which champions have Automatic or Semi-Automatic guns?
</div> <!--END OF champquery-->

<div id="showresult17"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.category, g.firing_mode
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.firing_mode = 'Automatic' OR 
						g.firing_mode = 'Semi-Automatic';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Category</th> <th>Firing Mode</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $category, $firing_mode) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $category ?></td>
				<td><?= $firing_mode ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult17-->		

	
<!---===================================
    ||     	 13-th CHAMPION QUERY      ||
	==================================-->
	
<div id="query18"> Show Results! </div>
<div id="champquery"> 13. Which champions have Pump Action or Bolt Action guns?
</div> <!--END OF champquery-->

<div id="showresult18"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.id, c.name, c.gun_id, c.gun, g.category, g.firing_mode
				  FROM champions c
				  JOIN guns g ON g.id = c.gun_id
				  WHERE g.firing_mode = 'Pump Action' OR 
						g.firing_mode = 'Bolt Action';";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion ID</th> <th>Champion Name</th> <th>Gun ID</th> <th>Gun</th> <th>Category</th> <th>Firing Mode</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($id, $name , $gun_id, $gun, $category, $firing_mode) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $id ?></td>
				<td><?= $name ?></td>
				<td><?= $gun_id ?></td>
				<td><?= $gun ?></td>
				<td><?= $category ?></td>
				<td><?= $firing_mode ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult18-->	
	
<!---===================================
    ||     	 14-th CHAMPION QUERY      ||
	==================================-->
	

<div id="query19"> Show Results! </div>
<div id="champquery"> 14. Which champion's special ability does 500 zombie health damage when used?
</div> <!--END OF champquery-->

<div id="showresult19"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name, s.name as spa_name, s.health_damage, s.effect, z.name as zm_name
				  FROM champions c
				  JOIN specials s ON s.champ_id = c.id
				  JOIN zombies z ON z.id = s.vulnerable_zm_id
				  WHERE s.health_damage = 500;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Special Ability</th> <th>Zombie Health Damage</th>
			<th>Special Ability Effect</th> <th>Most Vulnerable Zombie</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($name , $spa_name, $health_damage, $effect, $zm_name) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $name ?></td>
				<td><?= $spa_name ?></td>
				<td><?= $health_damage ?></td>
				<td><?= $effect ?></td>
				<td><?= $zm_name ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult19-->	
	
	
<!---===================================
    ||     	 15-th CHAMPION QUERY      ||
	==================================-->

	
<div id="query20"> Show Results! </div>
<div id="champquery"> 15. Which champion's special ability does 200 zombie health damage when used?
</div> <!--END OF champquery-->

<div id="showresult20"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name, s.name as spa_name, s.health_damage, s.effect, z.name as zm_name
				  FROM champions c
				  JOIN specials s ON s.champ_id = c.id
				  JOIN zombies z ON z.id = s.vulnerable_zm_id
				  WHERE s.health_damage = 200;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Special Ability</th> <th>Zombie Health Damage</th>
			<th>Special Ability Effect</th> <th>Most Vulnerable Zombie</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($name , $spa_name, $health_damage, $effect, $zm_name) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $name ?></td>
				<td><?= $spa_name ?></td>
				<td><?= $health_damage ?></td>
				<td><?= $effect ?></td>
				<td><?= $zm_name ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult20-->
	
	
<!---===================================
    ||     	 16-th CHAMPION QUERY      ||
	==================================-->

<div id="query21"> Show Results! </div>
<div id="champquery"> 16. Which champion's special ability does 100 zombie health damage when used?
</div> <!--END OF champquery-->

<div id="showresult21"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name, s.name as spa_name, s.health_damage, s.effect, z.name as zm_name
				  FROM champions c
				  JOIN specials s ON s.champ_id = c.id
				  JOIN zombies z ON z.id = s.vulnerable_zm_id
				  WHERE s.health_damage = 100;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Special Ability</th> <th>Zombie Health Damage</th>
			<th> Special Ability Effect</th> <th>Most Vulnerable Zombie</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($name , $spa_name, $health_damage, $effect, $zm_name) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $name ?></td>
				<td><?= $spa_name ?></td>
				<td><?= $health_damage ?></td>
				<td><?= $effect ?></td>
				<td><?= $zm_name ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult21-->	
	
	
<!---===================================
    ||     	 17-th CHAMPION QUERY      ||
	==================================-->
	
<div id="query22"> Show Results! </div>
<div id="champquery"> 17. Which champion does no zombie health damage when he uses his special ability?
</div> <!--END OF champquery-->

<div id="showresult22"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name, s.name as spa_name, s.health_damage, s.effect, z.name as zm_name
				  FROM champions c
				  JOIN specials s ON s.champ_id = c.id
				  JOIN zombies z ON z.id = s.vulnerable_zm_id
				  WHERE s.health_damage = 0;";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Special Ability</th> <th>Zombie Health Damage</th> 
			<th>Special Ability Effect</th> <th>Most Vulnerable Zombie</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($name , $spa_name, $health_damage, $effect, $zm_name) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $name ?></td>
				<td><?= $spa_name ?></td>
				<td><?= $health_damage ?></td>
				<td><?= $effect ?></td>
				<td><?= $zm_name ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult22-->
	
	
<!---===================================
    ||     	 18-th CHAMPION QUERY      ||
	==================================-->

<div id="query23"> Show Results! </div>
<div id="champquery"> 18. Which champion's special ability can be used within a zombie distance of 50 yards?
</div> <!--END OF champquery-->

<div id="showresult23"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name, s.name as spa_name, s.range, s.health_damage
				  FROM champions c
				  JOIN specials s ON s.champ_id = c.id
				  JOIN zombies z ON z.id = s.vulnerable_zm_id
				  WHERE s.range <= 50";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Special Ability</th> <th>Zombie Distance</th>  <th>Zombie Health Damage</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($name , $spa_name, $range, $health_damage) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $name ?></td>
				<td><?= $spa_name ?></td>
				<td><?= $range ?></td>
				<td><?= $health_damage ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult23-->	
	
<!---===================================
    ||     	 19-th CHAMPION QUERY      ||
	==================================-->

<div id="query24"> Show Results! </div>
<div id="champquery"> 19. Which champion's special ability can be used at a zombie distance greater than 50 yards?
</div> <!--END OF champquery-->

<div id="showresult24"> 


<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name, s.name as spa_name, s.range, s.health_damage
				  FROM champions c
				  JOIN specials s ON s.champ_id = c.id
				  JOIN zombies z ON z.id = s.vulnerable_zm_id
				  WHERE s.range > 50";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Special Ability</th> <th>Zombie Distance</th>  <th>Zombie Health Damage</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($name , $spa_name, $range, $health_damage) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $name ?></td>
				<td><?= $spa_name ?></td>
				<td><?= $range ?></td>
				<td><?= $health_damage ?></td>
				
			</tr>
		<?php $i++; } ?>
	    </table>
	    <?php
    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
    }
	
	include("bottom1.html"); 
    ?>

</div> <!--END OF #showresult24-->	
	
<!---===================================
    ||     	 20-th CHAMPION QUERY      ||
	==================================-->
	


	
	
</div> <!--End of #champhints-->
	
	
	
	
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/copyright.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/footer.php';?>