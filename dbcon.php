<?php 


	$hostname = 'localhost';
	$username='root';
	$password = '';
	$db = 'fee_management';


	try {
	    $con = new PDO("mysql:host={$hostname}; dbname={$db}", $username,$password);
	    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

?>