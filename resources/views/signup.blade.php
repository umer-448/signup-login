<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>

</head>
<body>
	<form action="submit" method="POST">
		@csrf
		<h1>User Resgistration</h1>
		<label>User Name</label>
		<input type="text" name="User_Name">
		<br/><br/>
		<label>Email</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="Email">
		<br/><br/>
		<label>password</label>&nbsp&nbsp&nbsp&nbsp
		<input type="password" name="Password">
		<br/><br/>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<button type="submit">SUBMIT</button>
		<br/><br/>
		
	</form>

</body>
</html>