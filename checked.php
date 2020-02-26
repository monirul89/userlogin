<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "userlogin";

$connect_db  = mysqli_connect($host, $user, $password, $database);

if(!$connect_db){
	echo "mysqli_error".mysqli_error($connect_db);
}
if(isset($_POST)){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql_u = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$query = mysqli_query($connect_db, $sql_u);	
	
	$row = mysqli_fetch_array($query);
	
	if($query){
		$_SESSION["email"]=$row['email'];
		$_SESSION["password"]=$row['password'];
		header('Location: dashboard.php');
	}
}
if(isset($_GET['id'])){
	header('Location: login.php');
};
?>