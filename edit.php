<?php
include_once("database.php");
session_start();
$pageid=$_GET['pageid'];
if (isset($_SESSION['userId'])){
                    $stmt = $conn->prepare("SELECT pageid,pagename,description FROM page WHERE pageid=$pageid");
                    $stmt->execute([$pageid]); 
                    $user = $stmt->fetch();
                    if(!$stmt->execute()){
                        echo "QUERY FAILED : Error -> " . json_encode($stmt->errorMsg());
                        return;
                    } 
                  }
                ?>
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
               <center>
                <form method="Post" action="update.php">
                   <div class="container">
                   
                      
                     Page Id
                        <input name = "pageid" type = "text" 
                           id = "pageid" value="<?php echo $user['pageid'];?>"><br>
                     
                        Page Name
                        <input name = "pagename" type = "text" 
                           id = "pagename" value="<?php echo $user['pagename'];?>"><br>
                     Page Description
                        <input name = "description" type = "text" 
                           id = "description" value="<?php echo $user['description'];?>"><br>
                     
                        
                           <input name = "submit" type = "submit" 
                              id = "submit" value = "Update"> 
               
               </div>
               </form>
               </center>   
   </body>
</html>