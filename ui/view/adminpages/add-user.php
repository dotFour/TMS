<html>
<head>
	<title> TMS - Admin page </title>
	<link rel="stylesheet" type="text/css" href="ui/resources/adminpage.css">
</head>

<body>
	<div>	
		<ul>
			<h1> Travel.com </h1>
			<li><a href="index.php?show=ticket-view"> Support Tickets</a></li>
			<li><a href="index.php?show=booking-view"> Bookings </a></li>
			<li><a href="index.php?show=place-view"> Places </a></li>
			<li><a href="index.php?show=room-view"> Rooms </a></li>
			<li><a href="index.php?show=user-view"> Users </a></li>
			<li><a href="index.php?show=logout"> Logout </a></li>
		</ul>
	</div>
	
	<div id="dashboard">
		<fieldset>
			<legend> Add User </legend>
			<form method="post">
			<table>
				<tr>
					<td> Name: </td>
					<td> <input type="text" name="name"/> </td>
				</tr>
				
				<tr>
					<td> Email: </td>
					<td> <input type="text" name="email"/> </td>
				</tr>
				
				<tr>
					<td> Contact No: </td>
					<td> <input type="text" name="contactno"/> </td>
				</tr>
				
				<tr>
					<td> Password: </td>
					<td> <input type="password" name="password"/> </td>
				</tr>
				
				<tr>
					<td> User Type: </td>
					<td> <select name="usertype">
						  <option value="0">User</option>
						  <option value="1">Admin</option>
						</select> </td>
				</tr>
				
				<tr>
					<td>  </td>
					<td> <input type="submit" value="Add"/> </td>
				</tr>
				
			</table>
			</form>
		</fieldset>
	</div>
	
	</div>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	$newUser = array();
	$newUser['name'] = trim($_REQUEST['name']);
	$newUser['email'] = trim($_REQUEST['email']);
	$newUser['contactNo'] = trim($_REQUEST['contactno']);
	$newUser['password'] = trim($_REQUEST['password']);
	$newUser['userType'] = $_REQUEST['usertype'];
	
	addUser($newUser);
	echo "<script> window.location.href = 'index.php?show=user-view'</script>";
}

?>
