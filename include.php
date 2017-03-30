<?php

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
    echo "   <p>Please <a href=\"logOn.php\">Log in</a></p>\n";
}
	echo "</div>\n";
}
   
?>
