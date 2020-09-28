<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css_signin.css">
    </head>
<body>
    <title>Infinity Painting,LLC</title>
    <div id="logo">
        <img src="ezgif.com-gif-maker.jpg">
    </div>
	<h6 id="company_name">Infinity Painting,LLC.</h6>
	<h4 id="login">Log In to Proceed . . .</h4>
	<form method="post">
		
   	<input type="text" id="username" name="username" placeholder="Username" required><br>

   	<input type="password" id="pwd" name="pwd" placeholder="Password" required><br>
  	 <input name="submit" type="submit" id="submit" value="login"><br>

		<center><p>New User? <a href="signup.php">Register Here</a></p></center>

</form>
<div id="gradient"></div>
</body>
</html>
<?php
session_start();
include_once("database.php");
extract($_POST);
if(isset($submit))
{
	$query = "SELECT user_id FROM user WHERE `name` = ? AND `pass` = ?";
	$statement = $conn->prepare($query);
	$statement->bindValue(1, $username);
	$statement->bindValue(2, $pwd);
	if(!$statement->execute()){
		echo "QUERY FAILED : Error -> " . json_encode($statement->errorMsg());
		return;
	}
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	if(!$result){ ?>
		<p class="w3-center w3-text-red">Invalid user name or password please try again</p>
	<?php 
	return;
	}
	
	$_SESSION["userId"] = $result['user_id'];
	header("Location: index.php");
}			
?>

