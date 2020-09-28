<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainpage.css">
    </head>
    <body>
    <title>Infinity Paninting,LLC.</title>
        <div class="head">
            <img src="user.png" class="profile">
            <article class="welcome">
            <h3>Hello,</h3>
            <h2>Osama.</h2>
            <h6>Welcome to our site.</h6>
            </article>
            <a href="login.php" >
            <img src="pixlr-bg-result%20(5).png" class="logout">
            <h3 class="logout">Logout</h3>
            </a>
</div>
    
    
    
        <div class="head-2">
        <img src="page-removebg-preview.png" class="page"><br>
            
        </div>
        <div class="head-2">
        <article class="list">
            <h5><a href="create.php">Create new page.</a></h5><br>
            
            </article>
        </div>  
    <?php
    include_once("database.php");
    session_start();
   if (isset($_SESSION['userId'])){
                    $session=$_SESSION['userId'];
                    $query ="SELECT pageid,pagename,description FROM page WHERE createdby=$session ";
                    $statement=$conn->prepare($query);
                    $statement->execute();
                    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
                    if(!$statement->execute()){
                        echo "QUERY FAILED : Error -> " . json_encode($statement->errorMsg());
                        return;
                    }
                ?>
                </tr>
                </tbody>
    
        <div id="container">  
            <table>
                <thead>
                    <tr>
                        <th>Page Id</th>
                        <th>Page Name</th>
                        <th>Page Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($results as $result)
                   {
                       ?>
                    <tr>
                    <td><?php echo $result['pageid']?></td>
                    <td><?php echo $result['pagename'];?></td>
                    <td><?php echo $result['description'];?></td>
                    <td><a href="edit.php?pageid=<?php echo $result['pageid']; ?>"><img src="pixlr-bg-result%20(2).png" class="edit"></a>
                    <a href="delete.php?pageid=<?php echo $result['pageid']; ?>"><img src="pixlr-bg-result%20(3).png" class="edit"></a></td>
                    </tr>
                    <?php
                   }
                }
                    ?>
    </table>
    
    </body>
</html>
