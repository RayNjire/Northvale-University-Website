<html><style type="text/css">
<!--
a {
	font-family: Niagara Engraved;
	font-size: 10mm;
}
a:link {
	color: #0000FF;
}
a:visited {
	color: #0000FF;
}
a:hover {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
body,td,th {
	font-family: Algerian;
	font-size: 6mm;
}
body {
	background-color: #CCCCCC;
}
-->
</style>
<div id="Layer2">
  <table width="970" height="48" border="0" align="center">
    <tr align="center" valign="top">
      <td width="201" height="44"><div align="center"><em><span class="style10"><a href="Home.html"><span class="style39">Home</span></a></span></em></div></td>
      <td width="200"><div align="center"><em><span class="style10"><a href="About Us.html" class="style39">About Us</a></span></em></div></td>
      <td width="201"><div align="center"><em><span class="style37"><a href="Why Us.html"><span class="style39">Why Us</span></a></span></em></div></td>
      <td width="201"><div align="center"><em><span class="style37"><a href="Achievements.html"><span class="style39">Achievements</span></a></span></em></div></td>
      <td width="199"><div align="center"><em><span class="style10"><a href="Contact Us.html"><span class="style39">Contact Us</span></a></span></em></div></td>
    </tr>
  </table>
</div>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "northvale";


$conn=mysqli_connect ($servername, $username, $password, $dbname);


if (!$conn) {
die("Connection Failed: " .mysqli_connect_error ());
}
else
{
echo "Connected to Database...";
}
?>

<?php
$FirstName = $_POST ['FirstName'];
$LastName = $_POST ['LastName'];
$UserName = $_POST ['UserName'];
$Password = $_POST ['Password'];
$PhoneNumber = $_POST ['PhoneNumber'];
$Email = $_POST ['Email'];

$sql = "insert into signin (FirstName, LastName, UserName, Password, PhoneNumber, Email) values ('".$FirstName."', '".$LastName."', '".$UserName."', '".$Password."', '.$PhoneNumber.', '".$Email."')";

$qury = mysqli_query ($conn, $sql);

if (!$qury)
{
echo "Signup Failed. Please Try Again and Ensure You Have Filled Every Field with an Asterix (*) or Try Changing Your UserName.<br/></br>";
echo "<br/></br> If the Problem Persists Please <a href='Contact Us.html'>Contact Us.</a> Here.";
echo "<br/></br><a href='LoginForm.html'>Login</a>";
}
else
{
echo "<br/>Signup Successful. Welcome to the Northvale Univerity Database!";
echo "<br/></br><a href='SignupForm.html'>Go Back to Signup Form</a>";
echo "<br/></br><a href='LoginForm.html'>Login</a>";
}
?>