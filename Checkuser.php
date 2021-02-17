<html>
<head>
</head>
<body>
<?php
include("DbConnect.php");

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$Query = "SELECT Email, Password FROM login
WHERE Email = '$Email'
AND Password = '$Password'";
    //adding a comment

$Result = mysqli_query($DB,$Query);

$NumResults = mysqli_num_rows($Result);

if ($NumResults==1)
{
    echo'<h2>'.'Found user with matching password'.'</h2>';
}

else
echo'<h2>'.'Incorrect email or password'.'</h2>';

?>
</body>
