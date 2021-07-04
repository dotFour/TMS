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
			<legend> Add Booking </legend>
			<form method="post">
			<table>
				<tr>
					<td>Book ID</td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td>User ID</td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td> Room ID </td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td>Check In</td>
					<td> <input type="date"/> </td>
				</tr>

				<tr>
					<td>Check Out</td>
					<td> <input type="date"/> </td>
				</tr>
				
				<tr>
					<td> Person </td>
					<td> <select name="#">
						  <option value="0">1</option>
						  <option value="1">2</option>
						  <option value="2">3</option>
						  <option value="3">4</option>
						  <option value="4">5</option>
						</select> </td>
				</tr>
				
				<tr>
					<td>Total Amount</td>
					<td> <input type="text"/> </td>
				</tr>
				
				<tr>
					<td>Payment Method</td>
					<td> <select name="#">
						  <option value="0">Method 1</option>
						  <option value="1">Method 2</option>
						  <option value="2">Method 3</option>
						  <option value="3">Method 4</option>
						  </select> 
					</td>
				</tr>

				<tr>
					<td>Requests</td>
					<td> <input type="text"/> </td>
				</tr>


				<tr>
					<td>  </td>
					<td> <input type="submit" value="Add Bookings"/> </td>
				</tr>
				
			</table>
			</form>
		</fieldset>
	</div>
	
	</div>
</body>
</html>
