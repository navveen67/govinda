<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<style type="text/css">
input{
	text-transform: uppercase;
}
div{
background-color: #DA8A17;
color: #FCFCFC;
}
</style>

<title>Search reserved trains</title>
</head>

<body bgcolor="#BBED94">
	<form action="search.do" method="post">
	<div align="center">
		<h1>::: Search Reserved Trains :::</h1>
	</div>

	<h2>${msg}</h2>

	<table align="center">
		<tr>
			<td><h3>Source Station:</td>
			<td><input type="text" id="sstation" name="sstation"></td>
		</tr>

		<tr>
			<td><h3>Destination Station:</td>
			<td><input type="text" id="dstation" name="dstation"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="SEARCH"></td>
		</tr>
	</table>

	<br> <font color="red">${fail}</font> 

<br>
<a href="form.jsp">Form Page</a>

</form>
</body>
</html>