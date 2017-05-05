<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=champs_vs_zombies", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 // set the PDO error mode to exception
    }
catch(PDOException $ex)
    {
    echo "Connection failed: " . $ex->getMessage();
    }
	

?>