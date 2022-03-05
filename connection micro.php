<?php
$con=mysqli_connect("localhost","root","","blood_donation_db");
if($con === false){
die ("ERROR :could not connect.".mysqli_connect_error());
}
else{
echo"connection successful";
}

?>