<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>

<style>
body{
	margin: 0;
	padding: 0;
	background: #fff;
    background-image: url(https://i2.wp.com/www.istartedsomething.com/wp-content/uploads/2007/10/darkaurora.png);
    background-repeat: no-repeat;
    background-size: cover;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
}
.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
    
	width: auto;
	height: auto;
	background-size: contain;
	
	z-index: 0;
}
form {
  max-width: 1000px;
  margin: 150px auto;
  padding: 10px 20px 300px;
  background: #EDF2FC;
  border-radius: 8px;
  z-index: 1;
}
input[type="file"] 
    {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 90%;
  background-color: #e8eeef;
  color: #8a97b2;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}
input[type="submit"] {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

label {
  display: block;
    color: brown;
    font-size: 30px;
  margin-bottom: 8px;
}
</style>
    </head>  
    
<body>
    
    <form >
        <?php
          $dir = new DirectoryIterator("uploads/");
foreach ($dir as $fileinfo) {
        if(strcmp($fileinfo,".") != 0 && strcmp($fileinfo,"..") != 0 )
        echo "<br><a href='uploads/".$fileinfo."' target='_blank'>".$fileinfo."</a>";
    // echo "<br><a href='uploads/".$fileinfo."' download>".$fileinfo."</a>";
}  
        ?>
	
</form>
</body>
</html>
