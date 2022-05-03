<?php
 $name=$_POST["name"];
 $lname=$_POST["lname"];
 $dname=$_POST["dname"];
 $email=$_POST["email"];
 $password=$_POST["password"];

$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");

$password = password_hash($password, PASSWORD_DEFAULT);
$sql2 = "SELECT * FROM USERS WHERE EmailID = '$email';";
$result = mysqli_query($conn, $sql2);
 if (mysqli_num_rows($result) > 0) {
     echo "<script>alert('Already registered email ID');document.location='SignIn.html'</script>";
     exit;
 }
 $sql3 = "SELECT * FROM USERS WHERE AccountName = '$dname';";
$result = mysqli_query($conn, $sql3);
 if (mysqli_num_rows($result) > 0) {
     echo "<script>alert('Display Name already taken');document.location='SignIn.html'</script>";
     exit;
 }
$sql = "INSERT INTO users(firstName,AccountName,EmailID,Passwords,lastName)
VALUES ('$name','$dname','$email','$password','$lname')";

if ($conn->query($sql) === TRUE) {
  header('Location: Home.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

 ?>
