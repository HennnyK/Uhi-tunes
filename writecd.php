<html>
<head>
	<title>UHI tunes</title>
	<link rel="stylesheet" type="text/css" href="css/uhistyle.css"/>
</head>
<body>
<header>
    <h1>UHI Tunes</h1>
</header>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Get the information from  RegUser.php

  $CDno = $_POST['CDno'];
  $CDtitle = $_POST['CDtitle'];
  $NoTracks = $_POST['NoTracks'];
  $Label = $_POST['Label'];
  $ReleaseYear = $_POST['ReleaseYear'];
  $ArtistName = $_POST['ArtistName'];
  
  // Create the SQL statement - Thie SQL statement follows the general insert statement which is :
  // insert into [TableName] [Fieldnames] Values [values to insert] - we are inserting into the users table 
  // so our SQl statement will be
  
  $Query = "INSERT INTO CDs 
            values ('$CDno','$CDtitle','$NoTracks','$Label','$ReleaseYear','$ArtistName')";
  
  // Now run the query - i.e. Insert the data into the table
  
  $Result = mysqli_query($DB,$Query); 	 // $Result gives us a boolean value to check if the insert was completed ok. 
					 // indicates success. This is very useful for debugging purposes
//  echo $Result;

 if ($Result)
	
	echo 'User cd details inserted';		
     else

	echo 'Sorry - unable to complete the operation at present';
  

?>

<FORM METHOD="LINK" ACTION="CDinputform.php">
<INPUT TYPE="submit" VALUE="Back to Login">
</FORM>

</body>
</html>