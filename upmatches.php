<?php
$database="IPL"; //database name
$cd=$_POST['cd'];
$ij=$_POST['ij'];
$kl=$_POST['kl'];
$mn=$_POST['mn'];
    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "UPDATE matches SET team_won='$kl' WHERE match_id='$cd' and date='$ij' and venue_id='$mn'";
mysqli_query($con,$query);

echo "<script type='text/javascript'>\n";
echo "alert('Succesfully Updated');\n";
echo "</script>"; 
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>