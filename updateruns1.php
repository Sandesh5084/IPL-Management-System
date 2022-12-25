<?php
$database="IPL"; //database name
$pid=$_POST['pid'];
$ginc=$_POST['ginc'];//this values comes from html file after submitting 
		$con = mysqli_connect("localhost","root","","$database");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con,"$database" );

if ($ginc <'0') {
    echo "Update Unsuccesfull";
	return;
}
else{

$query = "UPDATE statistics SET runs=('statistics.runs'+'$ginc')
WHERE player_id='$pid'";
mysqli_query($con,$query);

//echo "<script type='text/javascript'>\n";
echo ' Successfully Updated<br>';
echo '<a href="home.php">BACK</a>';


//echo "</script>"; 

}
mysqli_close($con);
?>
