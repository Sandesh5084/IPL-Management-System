<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 50%;
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
</style>
<body align="right"><i><b>



<div align="right">
  <form action="insert.php" style="color:white;>

<label>PLAYER ID</label>
    <input type="text" name="id" placeholder="Enter player_id"><br>
<label>PLAYER NAME</label>
    <input type="text" name="nam" placeholder="Enter Player Name"><br>
<label>PLAYER NATIONALITY</label>
    <input type="text" name="nat" placeholder="Enter Player Nationality"><br>
<label>AGE</label>
    <input type="text" name="ag" placeholder="Enter age"><br>
 <label>TEAM ID</label>
    <input type="text" name="team" placeholder="Enter team id"><br>
    
<br>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
