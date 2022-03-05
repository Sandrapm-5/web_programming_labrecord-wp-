<?php
session_start();
include 'connection.php';

//$_SESSION['donarid'] = '7';
$sId = $_SESSION['donarid'];
$sql = "SELECT * FROM donar_reg_tb WHERE id = '$donar_id' and status = '1'";
$result = mysqli_query($con,$sql);
if($result){
	$row = mysqli_fetch_array($result);
}
?>

<html>
<body>

<form>
	<table>
		<tr>
			<td>
				First Name: <input type = "text" name = "firstname" value = <?php echo $row['firstname']; ?> />
			</td>
		</tr>
		<tr>
			<td>
				Last Name: <input type = "text" name = "bloodgrp" value = <?php echo $row['bloodgrp']; ?> />
			</td>
		</tr>
	</table>

</form>

</body>
</html>