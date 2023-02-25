<?php
    $dbhost = "localhost";
    $dbUser = "root";
    $dbpass = "";
    $dbName = "w1911221_sswd";

    try {
        // Create a database conection
        $connection = mysqli_connect($dbhost,$dbUser,$dbpass);

        // Select the database
        mysqli_select_db($connection,$dbName);

    } catch(Exception $e) {
        // If the DB connection fails, display an error message and exit
        $warning = "Database Connection Failed !";
        echo "<br><br>
            <link href='../css/mystylesheet.css' rel='stylesheet'>
            <div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span>
                .$warning.
            </div>"
        ;
    }

?>