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
			<legend>View Bookings </legend>
				<table border="1" cellspacing="5">
					<tr>
						<td>Booking ID </td>
						<td>User ID </td>
						<td> Room ID </td>
						<td> Check IN </td>
						<td> Check Out </td>
						<td> Person Count </td>
						<td> Total Amount</td>
						<td> Payment Method </td>
						<td> Requests</td>
						<td> Add </td>
						<td> Edit </td>
						<td> Remove </td>
					</tr>
					
					<?php
						$bookings = getAllBookings();
						foreach($bookings as $booking){
						echo "<tr>
								<td>$booking[bookingid]</td>
								<td>$booking[userid]</td>
								<td>$booking[roomid]</td>
								<td>$booking[checkin]</td>
								<td>$booking[checkout]</td>
								<td>$booking[person]</td>
								<td>$booking[total]</td>
								<td>$booking[payment_method]</td>
								<td>$booking[requests]</td>
							</tr>";
						}
					?>
					
				</table>
		</fieldset>
	</div>
</body>
</html>
