<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<style>

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
body {
    background-image: url("bb.jpg");
    color:yellow;
}
</style>
</head>
<body>

<h1 align="center" style="font-size:80px;">INDIAN PREMIER LEAGUE</h1>
<h1 align="right" style="font-size:40px;">ADMIN LOGIN</h1>
<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="right" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right"><b>USERNAME</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right"><b>PASSWORD</div></td>
    <td><input name="psw" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="LOGIN" /></td>
  </tr>
</table>
</form>
</body>
</html>