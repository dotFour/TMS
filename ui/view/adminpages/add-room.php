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
			<legend> Add Rooms </legend>
			<form method="post">
			<table>
				<tr>
					<td> Room ID </td>
					<td> <input type="id" name="#"/> </td>
				</tr>
				
				<tr>
					<td> Place ID </td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td> Room Type </td>
					<td> <select name="#">
						  <option>Standard</option>
						  <option>Standard with Balcony</option>
						  <option>Deluxe Suite - Sea View</option>
						  <option>Deluxe Suite - Sea View with Balcony</option>
						  <option>Superior Deluxe - Sea View with Balcony</option>
						  <option>Superior Deluxe - Mountain View</option>

						</select> </td>
				</tr>
				
				<tr>
					<td> Host </td>
					<td> <select name="">
						  <option>Ocean Paradise Hotel & Resort</option>
						  <option>Trave</option>
						</select> </td>
				</tr>
				
				<tr>
					<td> Descryption </td>
					<td> <input type="text" size="50" name="#"> </td>
				</tr>

				<tr>
					<td>Room Details</td>
					<td><input type="text"></td>

				</tr>

				<tr>
					<td>Capacity</td>
					<td> <select name="usertype">
						  <option value="0">1</option>
						  <option value="1">2</option>
						  <option value="2">3</option>
						  <option value="3">4</option>
						  <option value="4">5</option>
						  </select> 
					</td>

				</tr>

				<tr>
					<td>Price</td>
					<td><input type="text"></td>

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
