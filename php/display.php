<?php
include("connection.php");
error_reporting(0);
$query = "select * from user_feedback";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
    <table border="2">
    <tr>
    <th>name</th>
    <th>phone number</th>
    <th>email</th>
    <th>feedback</th>
    <tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['Name']."</td>
        <td>".$result['Phone Number']."</td>
        <td>".$result['E Mail']."</td>
        <td>".$result['Feedback']."</td>
        ";
    }
}
else
{
    echo "no feedback given yet by any user";
}
?>
</table>