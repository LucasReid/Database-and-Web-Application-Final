<?php
ini_set("display_errors", 1);
    // include common php routines
    require "comp305.inc";

    //check for POST Variables
if ( isset( $_POST["Name_of_Fraternity_or_Sorority"] ))
{
    // save the user name (frat/soro name) and password(admin id) to the session
    $_SESSION["FoS_ID"] = $_POST["Fraternity_or_Sorority_ID"];
    $_SESSION["Admin_id"] = $_POST["Admin_id"];
    $_SESSION["FoS_name"] = $_POST["Name_of_Fraternity_or_Sorority"];
    $_SESSION["Type"] = $_POST["Type"];
    $_SESSION["Description"] = $_POST["Description"];
    $_SESSION["Email"] = $_POST["Email"];

    // load page 1
    header( "comp305Home.html" );
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

<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small">
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</footer>
</body>
</html>
