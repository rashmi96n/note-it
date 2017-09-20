<?php
define('HOST','bmsitsclub.in');
define('USER','bmsitscl_rachna');
define('PASS','Rachna@123');
define('DB','bmsitscl_projects_rachna');

$con=mysqli_connect(HOST,USER,PASS,DB);
if(!$con) {
    die('Connection Failed'.mysqli_error($con));
}

if(isset($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "select * from user where email='$email' and password='$password' and access='student'";
    $result=mysqli_query($con,$sql);
}
else
    echo "password required";
if($result){
    if(mysqli_num_rows($result)>0){
        header("Location: ./fetchstudent.php");
    }
   
     else{
            echo 'query failed';
}
}
else {
    die("logins failed");
   
}
mysqli_close($con);

?>
