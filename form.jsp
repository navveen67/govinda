
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
input {
	text-transform: uppercase;
}

div {
	background-color: #2D38E3;
	color: #FCFCFC;
}
</style>
<title>Reserved your train</title>
</head>
<body style="background-color: #F4F783">

	<form action="form.do" method="post">

		<div align="center">
			<h1>::: Train Reserved between Station Form :::</h1>
		</div>
		<br>

		<table align="center">

			<tr>
				<td><h3>Train No.:</td>
				<td><input type="number" id="number" name="number"></td>
			</tr>

			<tr>
				<td><h3>Train Name:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>

			<tr>
				<td><h3>Source Station:</td>
				<td><input type="text" id="sstation" name="sstation"></td>
			</tr>

			<tr>
				<td><h3>Destination Station:</td>
				<td><input type="text" id="dstation" name="dstation"></td>
			</tr>

			<tr>
				<td><h3>Departure time:</td>
				<td><input type="time" id="dtime" name="dtime"></td>
			</tr>

			<tr>
				<td><h3>Arrival Time:</td>
				<td><input type="time" id="atime" name="atime"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SUBMIT"></td>
			</tr>

		</table>
		<a href="search.jsp">Click here to search Reserved Trains</a>
	</form>
</body>
</html>