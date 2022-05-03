<?php
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
$getid = $_POST["id"]; 
$password = $_POST["checkpassword"];
// echo $getid;
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "update users set passwords = '$password' where userID = '$getid';";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Password updated successfully')</script>";
    echo "<script>window.location.href = 'login.html';</script>";

  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();
?>