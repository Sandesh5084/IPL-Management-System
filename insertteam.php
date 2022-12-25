<?php
$database="IPL"; //database name
$td=$_POST['td'];//this values comes from html file after submitting 
$tn=$_POST['tn'];
$ci=$_POST['ci'];
$loc=$_POST['loc'];
$rn=$_POST['rn'];
$pnt=$_POST['pnt'];

    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "INSERT INTO team (team_id,team_name,captain,location,rank,points)VALUES ('$td','$tn','$ci','$loc','$rn','$pnt')";
mysqli_query($con,$query);

echo ' Successfully Registered<br>';
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>
