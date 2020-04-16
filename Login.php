<html>
<style type="text/css">
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
body {
	background-image: url();
	background-color: #CCCCCC;
}
body,td,th {
	font-family: Algerian;
	font-size: 12mm;
}
-->
</style><div id="Layer2">
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
$UserName = $_POST ['UserName'];
$Password = $_POST ['Password'];

$sql = "select * from signin where UserName = '".$UserName."' and Password = '".$Password."'";

$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows ($result)>0)
{
echo "<br/></br>User Logged In!";
echo "<br/></br><a href='LoginForm.html'>Go Back to Login</a>";
echo "<br/></br><a href='SignupForm.html'>Signup Form</a>";
}
else 
{
echo "<br/></br>Invalid UserName or Password...";
echo "<br/></br><a href='LoginForm.html'>Go Back to Login</a>";
echo "<br/></br><a href='SignupForm.html'>Signup Form</a>";
}
?>