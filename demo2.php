<html>
<head>
<style>
body {
color:white;
    background-image: url("black2.jpg");
}
table, th, td {
    border: 1px solid white;
}
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(all){background-color: black}
</style>
</head>
<body>

<h2 style align="left"><i><b>TEAM STATISTICS</h2>

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
$sql = "SELECT team_name,COUNT(player_id)
FROM PLAYER JOIN TEAM ON player.team_id=team.team_id
GROUP BY team_name;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
                echo "<tr>";
                echo "<th>Team Name</th>";
                echo "<th>Number of players</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['team_name'] . "</td>";
                echo "<td>" . $row['COUNT(player_id)'] . "</td>";
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

 $sql = "SELECT SUM(runs)
FROM statistics ;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Total number of runs scored</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['SUM(runs)'] . "</td>";
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