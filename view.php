<html>
<head>
<style>
body {
color:white;
    background-image: url("b3.jpeg");
}
table, th, td {
    border: 1px solid white;
}
table {
    color:white;
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(all){background-color: black}
</style>
</head>
<body>

<h2 style align="center"><b>PLAYER INFORMATION</h2>

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
$sql = "SELECT player_id,name,nationality,age,team_name FROM PLAYER JOIN TEAM WHERE player.team_id=team.team_id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>PLAYER ID</th>";
                echo "<th>PLAYER NAME</th>";
                echo "<th>NATIONALITY</th>";
                echo "<th>AGE</th>";
                echo "<th>TEAM NAME</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['player_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['nationality'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['team_name'] . "</td>";
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