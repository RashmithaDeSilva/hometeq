<?php

    //include db.php file to connect to DB
    include ("dbConnection/dbConnection.php"); 

    $pageName = "Smart Basket";
    include ("html/headfile.html");
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mystylesheet.css\">";
    echo "<title>".$pageName."</title>";

    echo "<body>";
    echo "<h4>".$pageName."</h4>";

    // Check if post method is empty or not
    if(sizeof($_POST)) {
        //capture the ID of selected product using the POST method and the $_POST superglobal variable
        //and store it in a new local variable called $newprodid
        $newprodid = $_POST['h_prodid'];

        //capture the required quantity of selected product using the POST method and $_POST superglobal variable
        //and store it in a new local variable called $reququantity
        $reququantity = $_POST['p_quantity'];

    }

    


    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    
    // Close connection
    mysqli_close($connection); // $connection = null;

    include("html/footfile.html"); //include foot layout
    echo"</body>";

?>