<?php

  require "comp305.php";
// check for a user
if ( isset( $_SESSION["Member_id"] ))
{
    // echo the current user
    echo "   <p>Current User: ".$_SESSION["Member_name"]."</p>\n";
    echo "   <p><a href=\"logOut.php\">Log Out</a> when finished</p>\n";
}
else
{
    // echo no login yet
    echo "   <p>No user logged in</p>\n";
    echo "   <p>Please <a href=\"logIn.php\">Log in</a></p>\n";
}
	echo "</div>\n";
  $Title="Member Information";
  $Subtitle="";

//print_r($_SESSION);
//only good if register first
if($_SESSION['Member_name']!==null)
{
echo " <p>\n";
echo "  Current Member ID: ".$_SESSION["Member_id"]."\n";
echo " <br />";
echo "  Current Fraternity / Sorority ID: ".$_SESSION["FoS_id"]."\n";
echo " <br />";
echo "  Current Member Name: ".$_SESSION["Member_name"]."\n";
echo " <br />";
echo "  Current Grad Year: ".$_SESSION["Grad_Year"]."\n";
echo " <br />";
echo "  Current Email: ".$_SESSION["Email"]."\n";
echo " <br />";
echo "  Current Admin Status: ".$_SESSION["Admin_status"]."\n";
echo " <br />";
echo "  Current Dues: ".$_SESSION["Dues_owed"]."\n";
echo " <br />";
echo " </p>";

//$sql2="INSERT INTO 'Admin_Log' ('Login_id, 'Member_id', 'FoS_id' 'Login_time) VALUES ('',".$_SESSION["Member_id"].",".$_SESSION["FoS_id"].",NOW());";
//$result=mysqli_query(DatabaseConnect(),$sql2);
}
else
{
  echo "<center>You are not logged in</center>";

}
 WriteRegistrationINFO();
    
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
<body style="background-color:white">
  
 


<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small">
<a href="logOut.php">Log Out</a>
<br />
<a href="mainPageTemplate.php"> Back to Homepage</a>
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</footer>
</body>
</html>
