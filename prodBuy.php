<?php

    // include db.php file to connect to DB
    include ("dbConnection/dbConnection.php"); 

    $pageName = "A Smart Buy Fro A Smart Home";
    include ("html/headfile.html");
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mystylesheet.css\">";
    echo "<title>".$pageName."</title>";

    echo "<body>";
    echo "<h4>".$pageName."</h4>";

    // create a $SQL variable and populate it with a SQL statement that retrieves product details
    $SQL = "SELECT * FROM 'product'";

    // retrieve the product id passed from previous page using the GET method and the $_GET superglobal variable
    // applied to the query string u_prod_id
    // store the value in a local variable called $prodid
    $prodID = $_GET['u_prod_id'];

    echo "<p>Selected product ID :- $prodID</p>";
    echo "<div>";
        
    echo "</div>";

    // exiqute quary 

    //include foot layout
    include("html/footfile.html");
    echo"</body>";
?>