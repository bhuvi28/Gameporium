<?php
session_start();
//$conn = new mysqli("localhost","root","Akshat_gogna001","gameporium");
$conn = mysqli_connect("localhost","root","Bhuvan@2808","new_gameporium");
$uid = $_SESSION["userid"];
$planid = $_POST["plan"];
$res=mysqli_query($conn,"select * from subscription where PlanID = '$planid';");
$row=mysqli_fetch_array($res);
//$sql = "select * from subscription where PlanID = '$planid';";
//$resultant = $conn->query($sql);
//$row = $resultant->fetch_assoc();

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="billstyle.css" />
</head>

<body>
    <div class="container">
        <div class="heading">
            <p class="p1"><?php echo $row['PlanName']; ?></p>
            <p class="p2"> &#x20B9; <?php echo $row['Price']; ?><span> for <?php echo $row['Validity'];?> </span></p>
        </div>
        <ul class="list">
            <li>
                <?php echo $row['GamesAvailable']; ?> Games Available
            </li>
            <li>
                <?php echo $row['No_of_Accounts']; ?> Accounts
            </li>
            <li>
                <?php echo $row ['No_of_FreeGames'];?>
            </li>
            <li>Privilige-4</li>
            <li>Privilige-5</li>
        </ul>
        <div class="line"></div>
        <form action="checkout.php" method="post">
            <input type="hidden" name="planid" value="<?php echo $planid; ?>" />
            <button type="submit" class="button">CHECKOUT</button>
        </form>
    </div>
</body>
</html>