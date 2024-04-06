
<!-- Connection of Admin login -->
<?php

    mysqli_connect("localhost","root","","phpmyadmin");

    if(mysqli_connect_error())
    {
    echo"Cannot connect";
    }
    else
    {
        echo"Connected";
    }

?>