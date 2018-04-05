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
			<legend> View Tickets </legend>
				<button> Add </button>
				<table border="1" cellspacing="5">
					<tr>
						<td> Ticket ID </td>
						<td> User ID </td>
						<td> Status </td>
						<td> Time </td>
						<td> Title </td>
						<td> Type </td>
						<td> Description </td>
						<td> Response </td>
					</tr>
					<?php
						$tickets = getAllTickets();
						foreach($tickets as $ticket){
						echo "<tr>
								<td>$ticket[ticketid]</td>
								<td>$ticket[userid]</td>
								<td>$ticket[status]</td>
								<td>$ticket[time]</td>
								<td>$ticket[title]</td>
								<td>$ticket[type]</td>
								<td>$ticket[description]</td>
								<td>$ticket[response]</td>
								<td> <button>Edit</button </td>
								<td> <button>Remove</button </td>
							</tr>";
						}
						?>
					
				</table>
		</fieldset>
	</div>
	
	</div>
</body>
</html>
