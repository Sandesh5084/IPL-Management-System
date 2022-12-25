<?php
$database="IPL"; //database name
$xy=$_POST['xy'];//this values comes from html file after submitting 

    $con = mysqli_connect("localhost","root" ,"");
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "DELETE FROM team
WHERE team_id='$xy';";
mysqli_query($con,$query);

echo ' Successfully Deleted<br>';
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>
