<?php
session_start();
$id = $_POST["gameid"];
$type = $_POST["gametype"];
$user = $_SESSION["userid"];
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
$response = array();

$sql = "select * from library where GameID = $id && library.type = '$type' && UserID = $user;";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    array_push($response,400);
    array_push($response,"Item already added in your library");
 }
 else
 {
  $sql2 = "insert into library (gameid,userid,type) values($id,$user,'$type')";
  $result2 = mysqli_query($conn, $sql2);
  array_push($response,202);
  array_push($response,"Added to your library successfully");
 }
 echo json_encode($response);
?>