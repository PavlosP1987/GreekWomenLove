<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "dating_site";

$connect = ("$servername, $username, $password, $dbname") or die ("ERROR DURING CONNECTION");  // mysql_connect();

$UserId = $_POST["UserId"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender_id = $_POST["gender_id"];
$details = $_POST["details"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$confirmation_cod = $_POST["confirmation_cod"];
$confirmation_tim = $_POST["confirmation_tim"];
$popularity = $_POST["popularity"];



$sql_insert = mysql_query("INSERT INTO `dating_site` (UserId, first_name, last_name, gender_id, details, nickname,email,confirmation_cod,confirmation_tim,popularity) VALUES ( '$UserId', '$first_name', '$last_name', '$gender_id', '$details', '$nickname' , '$email' , '$confirmation_cod' , '$confirmation_tim' , '$popularity' )");
        header("location: index.php");
		
		exit;
		
?>

/* if(!connect) {
	die('Connection Failed: '.mysql_error());
	{
		mysql_select_db("dating_site",$connect);
	
		$user_info = "INSERT INTO user_account (UserId,email) VALUES('$_POST[UserId]','$_POST[email]')";
		if(!mysql_query($user_info,$connect)){
			die('Error: ' .mysql_error());
		}
		echo "Your information was added to the database.";
		
		mysql_close($connect); */
