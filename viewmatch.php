<html>
<head>
<style>
body {
color:orange;
    background-image: url("b2.jpeg");
align:center;
}
table, th, td {
    border: 1px solid white;
}
table {
color:yellow;
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

<h2 style align="center"><b>MATCHES</h2>

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
$sql = "SELECT team1_name,team2_name,date,team_won,venue_name FROM MATCHES JOIN VENUE ON matches.venue_id=venue.venue_id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               
                echo "<th>TEAM 1</th>";
                echo "<th>TEAM 2</th>";
                echo "<th>DATE TIME</th>";
                echo "<th>TEAM WON</th>";
               echo "<th>VENUE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['team1_name'] . "</td>";
                echo "<td>" . $row['team2_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['team_won'] . "</td>";
                echo "<td>" . $row['venue_name'] . "</td>";
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
