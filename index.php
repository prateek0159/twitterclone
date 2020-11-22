<?php

    include("functions.php");

    include("header.php");

    if ($_GET['page'] == 'timeline') {
        
        include("timeline.php");
        
    } else if ($_GET['page'] == 'yourtweets') {
        
        include("yourtweets.php");
        
    } else if ($_GET['page'] == 'search') {
        
        include("search.php");
        
    } else if ($_GET['page'] == 'publicprofiles') {
        
        include("publicprofiles.php");
        
    } else {

        include("home.php");
        
    }
        
    include("footer.php");


?>
