<?php
$database="IPL"; //database name
$id=$_POST['id'];//this values comes from html file after submitting 
$nam=$_POST['nam'];
$nat=$_POST['nat'];
$ag=$_POST['ag'];
$team=$_POST['team'];
    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "INSERT INTO player (player_id,name,nationality,age,team_id)VALUES ('$id','$nam','$nat','$ag','$team')";
mysqli_query($con,$query);

echo ' Successfully Registered<br>';
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>
