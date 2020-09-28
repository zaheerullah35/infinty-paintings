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
<body>
<center>
<div class="floating-box">
<form name="form1" method="post">
   <label for="pagename">Enter Page Name</label>
   <input type="text" id="pagename" name="pagename" required><br><br>

   <label for="description">Enter Page Description</label>
   <input type="text" id="description" name="description" required><br><br>
   

<?php
extract($_POST);
include_once("database.php");
session_start();
if (isset($_SESSION['userId'])){
$session=$_SESSION['userId'];
if(isset($submit))
{
    $query = "SELECT pageid FROM page WHERE `pagename` = ? AND `description` = ?";
	$statement = $conn->prepare($query);
	$statement->bindValue(1, $pagename);
	$statement->bindValue(2, $description);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
	if(!$statement->execute()){
		echo "QUERY FAILED : Error -> " . json_encode($statement->errorMsg());
		return;
	}
	else{
       
        ?><center><div class="container">
    <p>Data submitted</p>
    <div>
    </center>
<?php
    }
	$sql="INSERT INTO page(pagename,description,createdby) VALUES(?,?,$session)";
    $statement =$conn->prepare($sql);
    $statement->execute([$pagename,$description]);
}
}
?>

<input name="submit" type="submit" id="submit" value="save"><br>
   <br><div class=head1><p><a href=welcome.php>Back to Dashboard</a></p></div>
   </center>
</body>
</html>