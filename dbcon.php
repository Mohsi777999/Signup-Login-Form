<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "org";

$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_select_db($conn,$dbname);


// if($conn == true){
//     echo "Database Connection Successfull";
// }  else{
//     echo "Database Connection Failed";
// }

?>