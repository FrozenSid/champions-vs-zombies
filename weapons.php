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
	||		GUNS AK47 + M4A1 with CSS styles        ||
	=============================================-->
	

<div class="m4a1logo">
<img src="champs/m4a1.png" 
     style="margin-left: -100px;
			margin-top: -20px;
			height: 200px;
			width: 600px;" />
</div>

<div class="ak47logo">
<img src="champs/ak47.png" 
     style="margin-left: 520px;
			margin-top: -166px;
			height: 200px;
			width: 600px;" />
</div>

<!--=================================================
	||		PISTOLS AND WEPONS ICONS with CSS styles    ||
	=================================================-->
	
<div class="ak47logo">
<img src="champs/weapons.png" 
     style="margin-left: 170px;
			margin-top: -100px;
			height: 60px;
			width: 550px;" />
</div>


<!--==============================
	||		BODY OF THE PAGE    ||
	==============================-->



<!--=====================
	||		PISTOLS    ||
	=====================-->	
	
	
<div class="pistols">
Pistols - Full List
<div class="bottomborder"> </div>


<div id="allpistols"> 
<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name as champ, p.name, p.price, p.bullet_damage, p.magazine_capacity
				  FROM pistols p
				  JOIN champions c ON c.pistol_id = p.id
				  ORDER BY p.id";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Pistol</th> <th>Price</th> <th>Bullet Damage</th> <th>Magazine Capacity</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($champ, $name, $price, $bullet_damage, $magazine_capacity) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $champ ?></td>
				<td><?= $name ?></td>
				<td><?= $price ?></td>
				<td><?= $bullet_damage ?></td>
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
	
	

</div> <!--END OF #allpistols-->

<div class="pistolspics">
		<p> 228 Compact </p>
		<img src="pistols/228 Compact.png"/> </br>
		<p> Dual Berettas </p>
		<img src="pistols/Dual Berettas.png"/> </br>
		<p> Five-Seven </p>
		<img src="pistols/Five-Seven.png"/> </br>
		<p> Tec-9 </p>
		<img src="pistols/Tec-9.png"/> </br>
		<p> USP </p>
		<img src="pistols/USP.png"/> </br>

</div> <!--End of #pistolspics-->
	

	
<div class="pistolspics2">
		<p> Glock-18</p>
		<img src="pistols/Glock-18.png"/> </br>
		<p> Colt-45 </p>
		<img src="pistols/Colt-45.png"/> </br>
		<p> Desert Eagle </p>
		<img src="pistols/Desert Eagle.png"/> </br>
		<p> R8-Revolver </p>
		<img src="pistols/R8-Revolver.png"/> </br>
		<p> P2000 </p>
		<img src="pistols/P2000.png"/> 
		
</div> <!--End of #pistolspics2-->
	
</div> <!--End of Pistols-->


<!--==================
	||		GUNS    ||
	==================-->

<div class="guns">
Guns - Full List
<div class="bottomborder"> </div>


<div id="allguns"> 
<?php

   include("top1.html"); 
    try { 
    	$db = new PDO("mysql:dbname=champs_vs_zombies;host=localhost", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$query = "SELECT c.name as champ, g.name, g.category, g.price, g.bullet_damage, g.magazine_capacity, g.firing_mode
				  FROM guns g
				  JOIN champions c ON c.gun_id = g.id
				  ORDER BY g.id";
	            
		$rows = $db->query($query);
	   
       ?>
       <table >
		<caption> Your results are: </caption>
		<tr>
			<th>Champion Name</th> <th>Gun</th> <th> Category </th> 
			<th>Price</th> <th>Bullet Damage</th> <th>Magazine Capacity</th> <th>Firing Mode</th>
		</tr>

		<?php $i = 1; foreach ($rows as $row) { 
	
			   list($champ, $name, $category, $price, $bullet_damage, $magazine_capacity, $firing_mode) = $row; 
			   
			?>
		 
			<tr>
			
				
				<td><?= $champ ?></td>
				<td><?= $name ?></td>
				<td><?= $category ?></td>
				<td><?= $price ?></td>
				<td><?= $bullet_damage ?></td>
				<td><?= $magazine_capacity ?></td>
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
	
	
</div> <!--END OF #allguns-->



<!--============================
	||		ASSAULT RIFLES    ||
	============================-->

<div class="assault"> Assault Rifles </div>
<div class="assaultpics">
		<p> AK-47 </p>
		<img src="guns/ak47.png"/> </br>
		<p> M4A1 Carbine </p>
		<img src="guns/m4a1.png"/> </br>
		<p> Famas </p>
		<img src="guns/Famas.png"/> </br>


</div> <!--End of #assaultpics-->


<!--======================
	||		SHOTGUNS    ||
	======================-->

<div class="shotgun"> Shotguns </div>
<div class="shotgunpics">
		<p> Nova</p>
		<img src="guns/Nova.png"/> </br>
		<p> Leone Super </p>
		<img src="guns/Leone Super.png"/> </br>
		<p> Remington 870 </p>
		<img src="guns/Remington 870.png"/> </br>
		
</div> <!--End of #shotgunpics-->
	

<!--===========================
	||		SNIPER RIFLES    ||
	===========================-->
	
<div class="rifle"> Sniper Rifles </div>	
<div class="riflepics">
		<p> SG550 Sniper</p>
		<img src="guns/SG550.png"/> </br>
		<p> AWP Magnum</p>
		<img src="guns/AWP.png"/> </br>
		
		
</div> <!--End of #riflepics-->


<!--==========================
	||		MACHINE GUNS    ||
	==========================-->
	
<div class="machine"> Machine Guns </div>	
<div class="machinegunpics">
		<p> Negev</p>
		<img src="guns/Negev.png"/> </br>
		<p> Gearbox M60 </p>
		<img src="guns/M60.png"/> </br>
		
</div> <!--End of #machinegunpics-->

</div> <!--End of Guns-->


<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/copyright.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/footer.php';?>