<?php
$database="IPL"; //database name
$pl=$_POST['pl'];//this values comes from html file after submitting 

    $con = mysqli_connect("localhost","root" ,"");
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "DELETE FROM player
WHERE player_id='$pl';";
mysqli_query($con,$query);

echo ' Successfully Deleted<br>';
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>
