<html>
<head>
<style>
input[type=text], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
background-image: url("bbb.jpg");
    background-color: #f2f2f2;
    padding: 200px;
}
body {
    background-image: url("pp1.jpg");
}
</style>
</head>
<body>


<h1 align="right" style="color:white;"><b>UPDATE STATISTICS</h1>

<form action="updatestats.php" method="post" align="right" style="color:white;">
PLAYER ID  : <input type="text" name="pid"><br>
RUNS  : <input type="text" name="rns"><br>
<input type="submit" value="Update">

</form>
</body>
</html>