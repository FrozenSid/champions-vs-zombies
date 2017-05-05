<!--Code to fetch/include 

head.php  
menu.php
zombies.php
footer.php
updates.php
homenews.php
puzzle.php

This goes to the "root" a.k.a main folder to find the files-->

<?php
		$title  = "Champions VS Zombies"; ?>
		
		
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/head.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/menu.php';?>


<!--Body of website-->
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/zombies.php';?>



<div class="left">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/updates.php';?>

</div> <!--End of class="left"-->



<div class="right">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/homenews.php';?>

</div> <!--End of class="right"-->


<div class="right">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/servers.php';?>

</div> <!--End of class="right"-->


<!--Footer of website-->
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/copyrighthome.php';?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/CvsZ/inc/footer.php';?>



