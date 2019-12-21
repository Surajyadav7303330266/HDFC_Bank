<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
    <style>
    .margin{padding:15px 15px;border-radius:15px;width:50%;margin:auto;border:2px solid red;margin-top:50px;}
    .margin form{border:2px solid red;background-color:rgba(255,255,255,0.5);padding:15px 15px 15px 15px;border-radius:15px;
    width:95%;font-size:20px;}
    .margin form input{border:1px solid black;font-size:20px;}
    .margin form input[type="submit"],.margin form input[type="reset"]{padding:5px 5px;font-size:20px;font-weight:bold;
    border:2px solid blue;background-color:skyblue;border-radius:5px;}
    .margin form textarea{border:1px solid black;height:150px;}
    </style>
</head>
<body style="background-image:url(../images/unnamed.png);background-position: center;background-repeat: no-repeat;
  background-size: cover;">
    <div class="margin">
    <form action="" method="GET">
        <center><h2>We respect your feedback and complains, you can submit your complains and feedback here:-</h2></center>
        Name <input type="text" value="" name="name"><br><br>
Phone Number <input type="text" value="" name="phonenumber"><br><br>
E Mail <input type="text" value="" name="email"><br><br>
Feedback <textarea name="feedback" value="" row="150" cols="50"></textarea><br><br>
<input type="submit" name="submit" value="submit">
<input name="reset" type="reset" value="reset">
</form>
     </margin>
<?php
if($_GET['submit'])
    {
$uname = $_GET['name'];
$uphn = $_GET['phonenumber'];
$uem = $_GET['email'];
$ufb = $_GET['feedback'];
if($uname!="" && $uphn!="" && $uem!="" && $ufb!="")
{
    $query = "INSERT INTO `user_feedback` (`Name`, `Phone Number`, `E Mail`, `Feedback`) VALUES ('$uname', '$uphn', '$uem', '$ufb');";
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
        echo "";
    }
}
else{
    echo "all fields are required";
}
    }
?>
</body>
</html>