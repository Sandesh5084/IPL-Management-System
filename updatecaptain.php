<?php
$database="IPL"; //database name
$pd=$_POST['pd'];
$cap=$_POST['cap'];//this values comes from html file after submitting 

    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "UPDATE team SET captain='$cap' WHERE team_id='$pd'";
mysqli_query($con,$query);

echo "<script type='text/javascript'>\n";
echo "alert('Succesfully Updated');\n";
echo "</script>"; 
echo '<a href="home.php">BACK</a>';

mysqli_close($con);
?>