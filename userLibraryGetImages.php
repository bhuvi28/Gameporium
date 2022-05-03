
<?php
session_start();
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
$combined = array();
$total = array();
$response = array();
$status = array();
$user = $_SESSION["userid"];
$sql = "select * from library,gamesList where library.GameID = gamesList.serial && library.type = gamesList.type && UserID = $user;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    array_push($status,true);
    while($row = $result->fetch_assoc()) {
        array_push($total,$row);
    }
} else {
    array_push($status,false);
}
// array_push($response,$combined);
array_push($combined,$status);
array_push($combined,$total);
echo json_encode($combined);

$conn->close();
?>