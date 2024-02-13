<?php
	
	session_start();
	
	$errmsg_arr = array();
	
	$errflag = false;
	
	$conn = mysqli_connect('localhost','root',"",'sales');
	if(!$conn) {
		die('Failed to connect to server: ' . mysqli_error());
	}
	
	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
	$login = ($_POST['username']);
	$password = ($_POST['password']);

	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			session_write_close();
			header("location: main/index.php");
			exit();
		}else {
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>