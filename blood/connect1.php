<?php
$fistName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$bloodGroup = $_POST['bloodGroup'];
$addiction = $_POST['addiction'];
$address = $_POST['address'];
$madicalReport = $_POST['madicalReport'];


$conn = new mysqli('localhost','root','','blood');
if($conn->connect_error){
	die('Connection Field :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(Fistname,LastName,Age,Gender,BloodGroup,Addiction,Address,MadicalReport)
	values(?,?,?,?,?,?,?,?)");
    $stmt->blind_param("sssssssi",$fistName,$lastName,$age,$gender,$bloodGroup,$addiction,$address,$madicalReport);
    $stmt->execute();
	echo"registration successfully...";
	$stmt->close();
	$conn->close();
}
?>




