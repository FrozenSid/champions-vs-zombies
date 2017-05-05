<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=champs_vs_zombies", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT title, description, date FROM updates ORDER BY date DESC";
$rows = $db->query($query);


?>


<div class="uu">  <!--Upcoming Updates-->

<div class="uuhead"> <h2> Upcoming Updates </h2> </div>
<!--Upcoming Updates Head-->



<div class="uubody">

<?php  $i = 1; 
		
		foreach ($rows as $row) { 
	
			list($title, $description , $date) = $row; 
				
			$i++;?>

<div class="uupost">
<div class="uuposthead"> <div id="title"> <?php echo $title;?> </div></div> <!--End uuposthead-->
<div class="uupostbody"> <?php echo $description;?> </br> </br>
						 <?php echo $date; ?> 

</div> <!--End uupostbody-->




</div> <!--End uupost-->

<?php } ?> <!--End of foreach loop-->




</div> <!--End Upcoming Updates Body-->
</div> <!--End of Upcoming Updates class"uu" -->

<?php   }
 catch(PDOException $ex)
    {
    echo "Connection failed: " . $ex->getMessage();
    } ?>