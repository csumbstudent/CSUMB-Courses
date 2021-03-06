<?php
session_start();

$StatusMessage = "";
	
	if(isset($_POST['username'])){
		require 'db_connection.php';
		
		$sql = "SELECT * FROM team_project_admin
		WHERE username = :username
		AND password = :password";
		
		$stmt = $dbConn -> prepare($sql);
		$stmt -> execute(array(":username" => $_POST['username'], ":password" => hash("sha1", $_POST['password'])));

		$record = $stmt -> fetch();
		
		$TodaysDate = date("Y-m-d");
		$TodaysTime = date("H:i:s");
		
		$time="INSERT INTO time_date_table
		(username, time, date)
		VALUES
		(:username, :TodaysTime, :TodaysDate)";
		$stmt1=$dbConn->prepare($time);
		$stmt1->execute(array(":username" => $_POST['username'], ":TodaysTime" => $TodaysTime, ":TodaysDate" => $TodaysDate));
		
		if (empty($record)){
		#echo "Wrong username/password!";
		$StatusMessage = "Wrong username/password!";
		} else {
		$_SESSION['username'] = $record['username'];
		$_SESSION['firstname'] = $record['firstname'];
		$_SESSION['id'] = $record['id'];
		header("Location: index.php");
		}
	}
	
	if(isset($_POST['New_username'])){
		require 'db_connection.php';
		
		$sql = "INSERT INTO team_project_admin
		(firstname, lastname, username, password)
		VALUES
		(:First_Name, :Last_Name, :New_username, :New_password)";
		$stmt1 = $dbConn -> prepare($sql);
		$stmt1 -> execute(array(":First_Name" => $_POST['First_Name'], ":Last_Name" => $_POST['Last_Name'], ":New_username" => $_POST['New_username'], ":New_password" => hash('sha1', $_POST['New_password'])));
			
		if( $stmt1==true)	{
			#echo "Account Created!";	
			$StatusMessage = "Account Created";
		}
		
	}	
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">

			<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
			Remove this if you use the .htaccess -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

			<title>Lab5Login</title>
			<meta name="description" content="">
			<meta name="author" content="su5196">

			<meta name="viewport" content="width=device-width; initial-scale=1.0">

			<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
			<link rel="shortcut icon" href="/favicon.ico">
			<link rel="apple-touch-icon" href="/apple-touch-icon.png">
			<link href="teamProjectCSS.css" rel="stylesheet" type="text/css">
			<style>
			form {
			display: inline;
			}

			</style>

		</head>
<body>
<div id="wrapper">
<div id="header">
	<h1>Login</h1>
    <div id="menubar">
    <a href="index.php">Home</a>	|	<a href="catalog.php">Catalog</a>	|	<a href="schedule.php">Class Schedule</a>	|	<a href="studentregister.php">Register for Classes</a>	 |	<a href="logout.php">Login/Logout</a>		
    </div>
    <div id="SubMenu">
    <a href="viewschedule.php">View Schedule</a>	|	<a href="change_password.php">Change Password</a>
    </div>
</div>
<div id="mainbody">
<div id="welcome"><?=$StatusMessage ?></div>
		<form method="post">
		<table>
			<tr>
			<td>Username: <input type="text" name="username" /></td>
			</tr><tr>
			<td>Password: <input type="password" name="password" /></td>
			</tr><tr>
			<td><input type="submit" value="Login" /></td>
			</tr>
		</table>	
		</form>
		<br/><br/>
		<form method="post">
			<table>
			<tr>
			<td><h4>Create An Account</h4></td>	
			</tr><tr>
			<td>Enter your name:</td>
			</tr><tr>
			<td><input type="text" name="First_Name" value="First Name"/></td>
			</tr><tr>
			<td><input type="text" name="Last_Name" value="Last Name"/></td>
			</tr><tr>
			<td>Create User Name:</td>
			</tr><tr>
			<td><input type="text" name="New_username" value="Username" /></td>
			</tr><tr>
			<td>Create Password:</td>
			</tr><tr>
			<td><input type="password" name="New_password" /></td>
			</tr><tr>
			<td><input type="submit" value="Create New Account" /></td>
			</table>
		</form>
		
</div>
</div>
</body>
</html>