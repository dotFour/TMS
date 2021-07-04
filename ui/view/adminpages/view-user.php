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
			<legend> Users </legend>
				<button> Add </button>
				<table border="1">
					<tr>
						<td> ID </td>
						<td> Name </td>
						<td> Email </td>
						<td> Contact No </td>
						<td> User Type </td>
					</tr>
					
					<?php
						$users = getAllUsers();
						foreach($users as $user){
						echo "<tr>
								<td>$user[userid]</td>
								<td>$user[name]</td>
								<td>$user[email]</td>
								<td>$user[contactno]</td>
								<td>$user[usertype]</td>
								<td> <button> Edit </button> </td>
								<td> <button> Remove </button> </td>								
							</tr>";
						}
						?>

				</table>
		</fieldset>
	</div>
	
	</div>
</body>
</html>


