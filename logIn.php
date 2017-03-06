<?php
ini_set("display_errors", 1);
    // include common php routines
    require "comp305.inc";


    //check for POST Variables
if ( isset( $_POST["Member_id"] ))
{
    // save the user name (frat/soro name) and password(admin id) to the session
    $_SESSION["Member_id"] = $_POST["Member_id"];
    $_SESSION["FoS_id"] = $_POST["FoS_id"];
    $_SESSION["Member_name"] = $_POST["Member_name"];
    $_SESSION["Grad_Year"] = $_POST["Grad_YEar"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["Admin_status"] = $_POST["Admin_status"];
    $_SESSION["Dues_owed"] = $_POST["Dues_owed"];

    // load page 1
    header( "http://penguin.lhup.edu/~lnr7605/COMP305-master/mainPageTemplate.html" );
    exit();
}
    // set the title
    $Title = "Fraternity or Sorority Member";
    $Subtitle = "Logon Page";
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<script src="webJS.js" defer></script>
</head>

<title> Under Construction </title>

<body>
<?php
$servername = "willy";
$username = "comp305_grp1";
$password = "Temp!comp305_grp1";
$dbname = "comp305_grp1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Members";
$result = $conn->query($sql);

//WriteRegistrationINFO();
?> 
<h1> Fill out the registration: </h1>

<section>

  <form name="data-input" action="comp305.insert.php" method="POST">
    <p>Member ID: <input name="Member_id" type="int"  required="true" /></p>
    <p>Fraternity / Sorority ID: <input name="FoS_id" type="int" required="true" /></p>
    <p>Member Name: <input name="Member_name" type="text" required="true"/></p>
    <p>Grad Year: <input name="Grad_Year" type="int" required="true" /></p>
    <p>Email: <input name="Email" type="text" required="true"/></p>
    <p>Admin Status: (Y or N)<input name="Admin_status" type="text" required="true" /></p>
    <p>Dues Owed: <input name="Dues_owed" type="number" required="true" min="0" /></p>

    
    <p><button type="submit">Logon</button></p>
</form>
</section>

<p align="center">Or Sign in:
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
  <form name="form1" method="post" action="http://penguin.lhup.edu/~aap5264/Desktop/comp305-master/checkLogin.php">
  <td>
     <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
  <td colspan="3"><strong>Member Login</strong></td>
  </tr>
  <tr>
  <td width="100">Member ID </td>
  <td width="6">:</td>
  <td width="294"><input name="Member_id" type="password" id="Member_id"></td>
  </tr>
  <tr>
  <td>Fraternity / Sorority ID</td>
  <td>:</td>
  <td><input name="FoS_id" type="int" id="FoS_id"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Login"></td>
  </tr>
  </table>
  </td>
  </form>
  </tr>
  </table>
    <select name="to_user" class="form-control">
<option value="pick"> </option>
<?php
$sql = mysqli_query($conn, "SELECT FoS_name From Fraternities_and_Sororities ORDER BY FoS_name");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['FoS_name'] ."'>" .$row['FoS_name'] ."</option>" ;
}
?>
</select>
</p>
<br />
<p>
<a href="http://penguin.lhup.edu/~lnr7605/comp305-master/logOut.php">Log Out</a>
<a href="http://penguin.lhup.edu/~lnr7605/comp305-master/memberPage_comp305.html">Membership Info</a>

</p>
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small">
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</footer>
</body>
</html>
