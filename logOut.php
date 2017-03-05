//logout page
<?php
    require "comp305.inc";
    
    // log out
    session_destroy();
    
    // go back to logon page
    header( "Location: logIn.php" );

?>
