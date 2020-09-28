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

<?php
    session_start();
    include_once("database.php");
if (isset($_SESSION['userId'])){
    $pageid=$_POST['pageid'];
    $pagename=$_POST['pagename'];
    $description=$_POST['description'];
     $sql = "UPDATE page SET pagename='$pagename', description='$description' WHERE pageid='$pageid'";
     $conn->prepare($sql)->execute([$pagename, $description]);
     header("Location: welcome.php");
}
?>


</body>
</html>
    
    
