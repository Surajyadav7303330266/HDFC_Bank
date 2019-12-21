<?php
include("connection.php");
$query = "INSERT INTO `user_feedback` (`Name`, `Phone Number`, `E Mail`, `Feedback`) VALUES ('surajc', '8566095392', 'ay9621551@gmail.com', 'dddddddddddddddddddddddfewf efwww');";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "data inserted into database";
}
?>