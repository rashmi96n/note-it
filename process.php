<?php
	print_r($_FILES);
	
	//Folder to save to
	$target_path = './uploads/';
	
	//Build the stored file path
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name'] );
    
	
	if ( $_FILES['uploadedfile']['size'] < 2000000000000 ) {
		if ( substr( $_FILES['uploadedfile']['name'], -3 ) == 'pdf' ) {
			if ( move_uploaded_file( $_FILES['uploadedfile']['tmp_name'], $target_path ) ) {
			 echo '<p>The file was uploaded</p>';
			} else {
				echo '<p>There was an error uploading your file. Please try again.</p>';
			}
		} else {
			echo '<p>You must upload a Pdf file!</p>';
		}
	} else {
		echo '<p>The file is too big.</p>';
	}

?>
<html>
<style>
    body{
        background-color: azure;
        background-blend-mode: hue;
        border: 10px solid black;
    }
    </style>
<body>
    
    
    </body>
</html>