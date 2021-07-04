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
				<table border="1" cellspacing="5">
					<tr>
						<td> Room ID </td>
						<td> Place ID </td>
						<td> Name </td>
						<td> Host </td>
						<td> Description</td>
						<td> Details </td>
						<td> Capacity</td>
						<td> Price </td>
					</tr>
					
					<?php
						$rooms = getAllRooms();
						foreach($rooms as $room){
						echo "<tr>
								<td>$room[roomid]</td>
								<td>$room[placeid]</td>
								<td>$room[name]</td>
								<td>$room[host]</td>
								<td>$room[description]</td>
								<td>$room[details]</td>
								<td>$room[capacity]</td>
								<td>$room[price]</td>
								<td> <button> Edit </button></td>
								<td> <button> Remove </button></td>
							</tr>";
						}
						?>
				</table>
		</fieldset>
	</div>
	
	</div>
</body>
</html>
