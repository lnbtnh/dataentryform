<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$class = $_POST['class'];
$dob = $_POST['dob'];
$address = $_POST['address'];

$dbconnect=mysqli_connect('localhost','root','','example');

$sql =mysqli_query($dbconnect, "insert into std_admission(s_no,name,class,dob,address) values('','$name','$class','$dob','$address')");
if($sql){
	echo "Data inserted successfully";
}
else {
	echo "Failed to insert";
}
}
?>