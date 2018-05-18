<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE TMessage SET sender='$sender',msg='$msg' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM TMessage WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$sender = $res['sender'];
	$msg = $res['msg'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Sender</td>
				<td><input type="text" name="sender" value="<?php echo $sender;?>"></td>
			</tr>
			<tr> 
				<td>Msg</td>
				<td><input type="text" name="msg" value="<?php echo $msg;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
