<html>
<head>
<title>Login.php</title>
<link rel="stylesheet" type="text/css" href="css/uhistyle.css"/>
</head>
<body>
    <header>
        <h1>UHI tunes</h1>
    </header>
<h2> Miracle Security System</h2>

<h2>Please enter your Email address and password</h2>

<form method="post" action="Checkuser.php">
    
<div class="grid-container">
<table>
<tr>
<td>Email address :</td>
<td><input type="text" name="Email" size="50"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="Password" size="15"/></td>
</tr>
</div>

<tr>
<td colspan="2"><input type="submit" value="Check User"/></td>
</tr>
</table>
</form>
<div class="grid-container">
<h2>New users please click the register button</h2>
<form method="/RegisterNewUser.php" action="RegisterNewUser.php">
<input type="submit" value="Register">
</div>

</form>
</body>
</html>