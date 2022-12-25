<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<style>

/* Create three equal columns that floats next to each other */
.column {

    float: left;
    width: 33.33%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {

    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width:600px) {
    .column {
        width: 100%;
    }
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
body {
    background-color: lightgrey;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
 
<body>

<img src="liga.jpg" alt="Girl in a jacket" width="1324" height="300">

<ul>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Info About</a>
    <div class="dropdown-content">
      <a href="view.php">Player</a>
      <a href="viewteams.php">Teams</a>
      <a href="viewmatch.php">Match</a>
      <a href="viewstats.php">Statistics</a>
    </div>
  </li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Quick Find</a>
    <div class="dropdown-content">
      <a href="searchform1.php">Player Information</a>
      <a href="searchform.php">Player Statistics</a>
      </div>
  </li> 

<li>    <a href="demo.php">Standings</a></li>
<li><a href="toprs.php">Top Hitters</a></li>
<li><a href="searchvenues.php">Search Match</a></li>
<li><a href="demo2.php">Team Statistics</a></li>
<li><a href="index.php">Admin Login</a></li>

</ul>
<br>

</body>
</html>