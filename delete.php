<?php
include_once("database.php");
session_start();
if (isset($_SESSION['userId'])){
$pageid=$_GET['pageid'];
$sql = "DELETE FROM page WHERE pageid =  $pageid";
$stmt = $conn->prepare($sql);
$stmt->bindParam('$pageid', $_POST['pageid'], PDO::PARAM_INT);	
$stmt->execute();
if(!$stmt->execute()){
    echo "QUERY FAILED : Error -> " . json_encode($stmt->errorMsg());
    return;
}
else{
    echo "Data Deleted Successfully";
}
header("location:welcome.php");
}
?>