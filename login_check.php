<?php 

    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

	session_start();
	$user = $_POST['email'];	
	$pass = $_POST['password'];

	require_once'dbcon.php';

	$sql = "Select * from users WHERE email='$user'";

	$stmt= $con->prepare($sql);
	$stmt->execute();

	$sample=$stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() > 0){

	    if(password_verify($pass, $sample['password'] )){
            $_SESSION['ID']= $sample['user_id'];
            $_SESSION['NAME']= $sample['first_name'];
            ?>

                <Script>
                    window.location.href='Home.php';
                </Script>
            <?php

        }
        else{
            $err= "Wrong Cridintials";
        }


    }
	else{
        $err= "No record found";
    }

	if(isset($err)){
	    ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <i class="fa fa-info-circle"></i>
                    <?php echo $err ?>

                </div>
            </div>
        <?php
    }


?>


