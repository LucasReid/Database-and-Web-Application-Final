<?php

  require "comp305.php";

  $Title="Member Information";
  $Subtitle="";

//only good if register first
if($_SESSION['Member_id']!==null)
{
echo " <a href='logIn.php'>Back</a>";    
echo " <h2 class='w3-center w3-padding-32 w3-text-white w3-xlarge' style='background-color:#821717'> Welcome ".$_SESSION["Member_name"]." </h2>";
echo " <table class='w3-table-all w3-centered' style='width:75%; margin-left:auto;margin-right:auto'>";
echo " <th> Current Member ID";
echo " <th> Current Fraternity / Sorority ID ";
echo " <th> Member Name "; 
echo " <th> Grad Year ";
echo " <th> Email "; 
echo " <th> Admin Status "; 
echo " <th> Dues </th>"; 
echo " <tr><td>".$_SESSION["Member_id"]."</td>";
echo " <td>".$_SESSION["FoS_id"]."</td>";
echo " <td>".$_SESSION["Member_name"]."</td>"; 
echo " <td>".$_SESSION["Grad_Year"]."</td>";     
echo " <td>".$_SESSION["Email"]."</td>"; 
echo " <td>".$_SESSION["Admin_status"]."</td>"; 
echo " <td>".$_SESSION["Dues_owed"]."</td></tr>";     
echo " </table>";    
}
else
{
  echo "You need to login in";
  echo "<br />";
  echo '<a href="logIn.php"> Log in</a>';
}
echo " <h4 class='w3-center w3-padding-16'> Member Info Table </h4>";
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
<a href="mainPageTemplate.html"> Back to Homepage</a>
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</footer>
</body>
</html>
