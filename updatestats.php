<?php
$database="IPL"; //database name
$pid=$_POST['pid'];
$gls=$_POST['rns'];//this values comes from html file after submitting 
$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysql_select_db("$database", $con);

$query = "UPDATE statistics SET runs='$rns' WHERE player_id='$pid'";
mysqli_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('Succesfully Updated');\n";
echo "</script>"; 
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>