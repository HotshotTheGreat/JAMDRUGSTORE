<?php
	
	session_start();
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>
JAM DRUGSTORE
</title>
    <link rel="shortcut icon" href="main/images/logo.png">

  <link href="main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container-fluid">
      <div class="row-fluid">
		<div class="span4">
		</div>
	
</div>
<div id="login">
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="login.php" method="post">

			<font style="font-size: 40px; color:#79b74c; font-weight:bold; font-family: 'Fredoka One', cursive;"><center>JAM DRUGSTORE</center></font>
		<br>

		
<div class="input-prepend">
	<input style="height:40px; width:100%;" type="text" name="username" Placeholder="Username" required/><br>
</div>
<div class="input-prepend">
	<input type="password" style="height:40px; width:100%;" name="password" Placeholder="Password" required/><br>
		</div>
		<div class="qwe">
		 <button style="height: 40px; width:100%; font-weight: bold; background-color:#79b74c; border: none;color:#fff; margin-top:10px;" href="dashboard.html" type="submit"></i> Login</button>
</div>
		 </form>
</div>
</div>
</div>
</div>
</body>
</html>