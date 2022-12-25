<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>



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
$database="IPL"; //database name
$vn=$_POST['vn'];//this values comes from html file after submitting 
$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db("$database", $con);

$query = "SELECT TEAM.team_name,PLAYER.name FROM TEAM JOIN PLAYER ON TEAM.team_id=PLAYER.team_id GROUP BY TEAM.team_id ;";
mysqli_query($query);
if($result = mysqli_query($link, $query)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>team name</th>";
                echo "<th>player name</th>";
                echo "<th>manager name</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['team_name'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
               echo "<td>" . $row['manager_name'] . "</td>";
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