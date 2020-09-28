<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
extract($_POST);
include("database.php");
 $pass=md5($pass);
if(isset($submit))
{
	$query = "SELECT user_id FROM user WHERE `name` = ? AND `pass` = ?";
	$statement = $conn->prepare($query);
	$statement->bindValue(1, $username);
	$statement->bindValue(2, $pass);
	if(!$statement->execute()){
		echo "QUERY FAILED : Error -> " . json_encode($statement->errorMsg());
		return;
	}
	$result = $statement->fetch(PDO::FETCH_ASSOC);
$sql="INSERT INTO user(pass,name,email) VALUES(?,?,?)";
$statement =$conn->prepare($sql);    
$statement->execute([$pass,$name,$email]);
//echo "<br><br><br><div class=head1>Your Login ID  $name Created Sucessfully</div>";
header("Location: login.php");
}
?>
</body>
</html>