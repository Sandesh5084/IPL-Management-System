<html>
<head>
<style>
body {
color:yellow;
    background-image: url("b1.jpeg");
}
table, th, td {
    border: 1px solid white;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color: black}
</style>
</head>
<body>

<h2 style align="center"><b>TEAMS</h2>

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
$sql = "SELECT * FROM TEAM";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
                 echo "<th>TEAM ID</th>";
                echo "<th>TEAM NAME</th>";
                echo "<th>CAPTAIN</th>";
                echo "<th>LOCATION</th>";
                echo "<th>RANK</th>";
                 echo "<th>POINTS</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               
                echo "<td>" . $row['team_id'] . "</td>";
                echo "<td>" . $row['team_name'] . "</td>";
                echo "<td>" . $row['captain'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['rank'] . "</td>";
                echo "<td>" . $row['points'] . "</td>";
                
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

