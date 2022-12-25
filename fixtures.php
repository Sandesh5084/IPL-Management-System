<html>
<head>
<style>


html { 
	 color:black;
  background: url(bac.jpg) no-repeat center fixed; 
  background-size: cover;
}


table, th, td {
    border: 3px solid black;
}
table {
	color:white;
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(){background-color: white}
</style>
</head>
<body>
<h2 style align="left"><b>IPL Match Schedule<b></h3>



</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "IPL");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT team1_name,team2_name,date 
from matches 
where team_won='pending'
ORDER BY date";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Team1 Name</th>";
		        echo "<th>Team2 Name</th>";
                echo "<th>Date</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['team1_name'] . "</td>";
                echo "<td>" . $row['team2_name'] . "</td>";
 		
                echo "<td>" . $row['date'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>