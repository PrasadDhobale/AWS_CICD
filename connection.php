<?php
    
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("museum-db.cliy8m826swn.ap-south-1.rds.amazonaws.com","admin","prasad123","museum");
    
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to Connect to MySQL: " . mysqli_connect_error();
    }
    // else{echo "Connected";}
?>
