<?php
session_start();
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
//$conn = mysqli_connect("localhost","root","Akshat_gogna001","gameporium");
$uid = $_SESSION["userid"];
$planid = $_POST["planid"];
//$res=mysqli_query($conn,"select * from subscription where PlanID = '$planid';");
//$row=mysqli_fetch_array($res);
$sql = "update users set planid = '$planid' where userid = '$uid'";
//$resultant = $conn->query($sql);
//$row = $resultant->fetch_assoc();

if ($conn->query($sql) === TRUE) {
  header('Location: Profile.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();
?>