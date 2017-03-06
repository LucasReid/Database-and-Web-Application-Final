<?php

  require "comp305.inc";

  $Title="Member Information";
  $Subtitle="";

//only good if register first
if($_SESSION['Member_id']!==null)
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
}
else
{
  echo "You need to login in";
  echo "<br />";
  echo '<a href="http://penguin.lhup.edu/~aap5264/logIn.php"> Log in</a>';
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
<body>



<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small">
<a href="logOut.php">Log Out</a>
<br />
<a href="mainPageTemplate.html"> Back to Homepage</a>
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</footer>
</body>
</html>
