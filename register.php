<?php
	define('HOST','bmsitsclub.in');
    define('USER','bmsitscl_rachna');
    define('PASS','Rachna@123');
    define('DB','bmsitscl_projects_rachna');

    $con=mysqli_connect(HOST,USER,PASS,DB);
    if(!$con) {
        die('Connection Failed'.mysqli_error($con));
    }
    if ( isset($_POST['password'])){
        
	    $email = $_POST['email'];
        $password = $_POST['password']; 
        $acccess=$_POST['radio'];
 
        $query = "INSERT INTO `user` (email,password,access) VALUES ('$email', '$password','$access')";
        $result = mysqli_query($con, $query);
        if($result){ 
            header('Location : ./front.html');
        }else{
            echo "User Registration Failed";
        }
    }
    ?>
