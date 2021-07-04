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
			<legend> Add Place</legend>
			<form method="post">
			<table>
				<tr>
					<td> Place ID </td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td> Place Name </td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td>Division</td>
					<td> <select name="#">
						  <option value="0">Dhaka</option>
						  <option value="1">Chittagong</option>
						  <option value="2">Barisal</option>
						  <option value="3">Mymensingh</option>
						  <option value="4">Khulna</option>
						  <option value="5">Rajshahi</option>
						  <option value="6">Rangpur</option>
						  <option value="3">Sylhet</option>
						  </select> 
					</td>
				</tr>

				<tr>
					<td> Place Details </td>
					<td> <input type="text" name="#"/> </td>
				</tr>
				
				<tr>
					<td>  </td>
					<td> <input type="submit" value="Edit Place"/> </td>
				</tr>
				
			</table>
			</form>
		</fieldset>
	</div>
	
	</div>
</body>
</html>
