<?php
session_start();
 $userName=$_POST["username"];
 $password=$_POST["password"];

$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
// $message = "Invalid username/password";
$_SESSION['user']=$userName;
if(isset($_SESSION['user'])){
$sql = "select UserID, Passwords from users where EmailID = '$userName'";
$resultant = $conn->query($sql);
//$sql2 = "select userid from users;";
//$resultant = $conn->query($sql);
if ($resultant->num_rows > 0) {
  while($row = $resultant->fetch_assoc()) {
    if(password_verify($password,$row["Passwords"])){
      $_SESSION["userid"] = $row['UserID'];
  //     header('Location: Home.php');
  // exit;
}
else{
  echo "<script>alert('$message');document.location='login.html'</script>";
}
}
}
else {
  echo "<script>alert('$message');document.location='login.html'</script>";
}
}
else{
  header('Location:homePage.html');
}
$conn->close();
?>
