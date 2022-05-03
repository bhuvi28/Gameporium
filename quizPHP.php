<?php
session_start();
$uid = $_SESSION["userid"];
$g1 = $_POST["Genre"];
$g2 = $_POST["Genre2"];
$g3 = $_POST["Genre3"];
$newrelease = $_POST["release"];
$story = $_POST["StoryGames"];
$avghrs = $_POST["avghrs"];
$spmp = $_POST["spmp"];




$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");

$sql = "INSERT INTO quiz(UserID, Genre1, Genre2, Genre3, Pref_NewReleases, Pref_StoryDrivenGames, Avg_PlayingHrs, SP_or_MP)
VALUES ('$uid', '$g1', '$g2', '$g3', '$newrelease', '$story', '$avghrs', '$spmp')";



if ($conn->query($sql) === TRUE) {
  header('Location: Profile.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();
?>