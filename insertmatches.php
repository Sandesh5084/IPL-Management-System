<?php
$database="IPL"; //database name
$mid=$_POST['mid'];//this values comes from html file after submitting 
$t1id=$_POST['t1id'];
$t2id=$_POST['t2id'];
$dt=$_POST['dt'];
$res=$_POST['res'];
$vid=$_POST['vid'];
    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "INSERT INTO matches (match_id,team1_name,team2_name,date,team_won,venue_id)VALUES ('$mid','$t1id','$t2id','$dt','$res','$vid')";
mysqli_query($con,$query);


echo ' Successfully Scheduled<br>';
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>
