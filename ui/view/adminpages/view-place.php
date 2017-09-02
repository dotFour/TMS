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
			<legend> View Places </legend>
				<table border="1" cellspacing="5">
					<tr>
						<td>Place ID </td>
						<td>Place Name </td>
						<td> Division</td>
						<td> Add </td>
						<td> Edit </td>
						<td> Remove </td>
					</tr>
					
					<?php
						$places = getAllPlaces();
						foreach($places as $place){
						echo "<tr>
								<td>$place[placeid]</td>
								<td>$place[name]</td>
								<td>$place[division]</td>
							</tr>";
						}
						?>
				</table>
		</fieldset>
	</div>
	
	</div>
</body>
</html>
