<?php

function Footer()
{
// check for a user
if ( isset( $_SESSION["UserName"] ))
{
    // echo the current user
    echo "   <p>Current User: ".$_SESSION["UserName"]."</p>\n";
    echo "   <p><a href=\"LogOut.php\">Log Out</a> when finished</p>\n";
}
else
{
    // echo no login yet
    echo "   <p>No user logged in</p>\n";
    echo "   <p>Please <a href=\"LogOn.php\">Log in</a></p>\n";
}
	echo "</div>\n";
}
   
?>
