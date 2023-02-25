<?php

    include ("dbConnection/dbConnection.php"); //include db.php file to connect to DB

    $pageName = "Make Your Home Smart";
    include ("html/headfile.html");
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mystylesheet.css\">";
    echo "<title>".$pageName."</title>";

    echo "<body>";
    echo "<h4>".$pageName."</h4>";

    //create a $SQL variable and populate it with a SQL statement that retrieves product details
    $SQL = "SELECT * FROM product";

    //run SQL query for connected DB or exit and display error message
    $exeSQL = mysqli_query($connection, $SQL); //or die (mysqli_error($connection));
    
    echo "<table style='border: 0px'>";
        //create an array of records (2 dimensional variable) called $arrayp.
        //populate it with the records retrieved by the SQL query previously executed.
        //Iterate through the array i.e while the end of the array has not been reached, run through it

        while ($arrayp = mysqli_fetch_array($exeSQL)){
            echo "<tr>";
                echo "<td style='border: 0px'>";
                    echo "<a href=prodBuy.php?u_prod_id=".$arrayp['prodId'].">";
                        //display the small image whose name is contained in the array
                        echo "<img src=imgs/productImg/".$arrayp['prodPicNameSmall']." height=200 width=250>";
                    echo"</a>";

                echo "</td>";
                
                echo "<td style='border: 0px'>";
                    //display product name as contained in the array
                    echo "<h5>".$arrayp['prodName']."</h5>";
                    echo "<h6>".$arrayp['prodDescripShort']."</h6>";
                    echo "<h5>$ ".(int)$arrayp['prodPrice']."</h5>";
                echo "</td>";
            echo "</tr>";
        }
        
    echo "</table>";

    $connection = null;
    include("html/footfile.html"); //include foot layout
    echo"</body>";
?>