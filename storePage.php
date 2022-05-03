
<?php
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
$combined = array();
$total = array();
$response = array();
$type = $_POST["type"];
$limit = $_POST["limit"];
$start = $_POST["start"];
$sql = "select count(*) as count from gamesList where type = '$type'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($response,$row);
    }
} else {
    echo "0 results";
}

$sql = "select * from gamesList where type = '$type' AND serial>='$start' AND serial<='$limit'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($combined,$row);
    }
} else {
    echo "0 results";
}
array_push($response,$combined);
echo json_encode($response);

$conn->close();
?>