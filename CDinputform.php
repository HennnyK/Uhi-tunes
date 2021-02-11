<!--Henny Kiss
CD input form
10/02/2021-->

<html>
<head>
<title>UHI tunes</title>
	<link rel="stylesheet" type="text/css" href="css/uhistyle.css"/>
</head>
<body>
<header>
    <h1>UHI tunes</h1>
</header>
<h2>Add new tunes</h2>

<form method="POST" action="writecd.php">

<table>
 <tr>
  <td>CDno:</td>
  <td><input type="int" name="CDno" size="4"> </td>
 </tr>
 <tr>
  <td>CDtitle:</td>
  <td><input type="text" name="CDtitle" size="50" > </td>
 </tr>
 <tr>
  <td>NoTracks:</td>
  <td><input type="int" name="NoTracks" size="2" > </td>
 </tr>
 <tr>
  <td>Label:</td>
  <td><input type="text" name="Label" size="20" > </td>
 </tr>
 <tr>
  <td>ReleaseYear:</td>
  <td><input type="int" name="ReleaseYear" size="4" > </td>
 </tr>
 <tr>
  <td>ArtistName:</td>
  <td><input type="text" name="ArtistName" size="20" > </td>
 </tr>

 <td colspan="2"><input type="submit" value="Submit"/></td>
 </tr>
</table>
</form>
</body>
</html>