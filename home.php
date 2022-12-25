<?php
	require_once('auth.php');
?>

<html>
<head>

<title>INDIAN PREMIER LEAGUE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color:blue;
    padding: 0px;
    text-align: center;
}
@-webkit-keyframes roll {
  from { -webkit-transform: rotate(0deg) }
  to { -webkit-transform: rotate(360deg) }
}
@-moz-keyframes roll {
  from { -moz-transform: rotate(0deg) }
  to { -moz-transform: rotate(360deg) }
}
@keyframes roll {
  from { transform: rotate(0deg) }
  to   { transform: rotate(360deg) }
}
body {
  -moz-animation-name: roll;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: 1;
  -webkit-animation-name: roll;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
}
</style>


<style> 
html { 
  background: url(h.jpg) no-repeat center fixed; 
  background-size: cover;
}

body { 
  color:lightgreen;

}
</style>

<style>  
  style="font-size:40px;              
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

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>





<style>
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
    color: orange;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: green;
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

.dropdown-content a:hover {background-color: lightgreen}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

</head>
 
<body>



<div class="header">
  <marquee><h1>WELCOME TO THE GREAT INDIAN PREMIER LEAGUE...!!!</marquee></h1>
</div>


<ul>
  
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">REGISTER HERE</a>
    <div class="dropdown-content">
      <a href="registration1.php">PLAYER</a>
       <a href="registerteam.php">TEAM</a>
           
    </div>
  </li>
<li><a href="registermatches.php">SCHEDULE MATCH</a></li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">UPDATE</a>
    <div class="dropdown-content">
      <a href="updateruns.php">STATISTICS</a>
     
    </div>
  </li>

<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DELETE</a>
    <div class="dropdown-content">
      <a href="delete.php">PLAYER</a>
      <a href="deleteteam.php">TEAM</a>

     
    </div>
  </li>

<li><a href="index.html">LOGOUT</a></li>


</ul>


<h1 align="center" class="style1">LOGIN SUCCESSFUL</h1>

</body>
</html>