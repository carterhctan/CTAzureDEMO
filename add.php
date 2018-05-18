<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$sender = mysqli_real_escape_string($mysqli, $_POST['sender']);
	$msg = mysqli_real_escape_string($mysqli, $_POST['msg']);
		
	// checking empty fields
	if(empty($sender) || empty($msg)) {
				
		if(empty($sender)) {
			echo "<font color='red'>Sender field is empty.</font><br/>";
		}
		
		if(empty($msg)) {
			echo "<font color='red'>Msg field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO TMessage(sender,msg) VALUES('$sender','$msg')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
