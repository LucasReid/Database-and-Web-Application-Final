//logout page
<?php
    require "comp305.php";
    
    // log out
    session_destroy();
    
    // go back to logon page
    header( "Location: mainPageTemplate.php" );

?>
