<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<style>
table, th, td {
	border: 1px solid black;
}

th, td {
	padding: 15px;
}

td {
	text-transform: uppercase;
}
</style>

<title>Reserved Trains</title>
</head>

<body bgcolor="#AFFAFC">
	<div align="left">
		<h2>RESERVED TRAINS:</h2>
	</div>
	<table align="left">

		<tr>
			<th>Train Number</th>
			<th>Train Name</th>
			<th>Source Station</th>
			<th>Departure Time</th>
			<th>Destination Station</th>
			<th>Arrival Time</th>
		</tr>
		<tr>
			<td>${info.number}</td>
			<td>${info.name}</td>
			<td>${info.sstation}</td>
			<td>${info.dtime}</td>
			<td>${info.dstation}</td>
			<td>${info.atime}</td>
		</tr>
	</table>
	<br><br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<a href="search.jsp"> BACK </a></td>
	
	
</body>
</html>