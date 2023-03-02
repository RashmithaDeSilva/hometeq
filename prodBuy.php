<?php

    // include db.php file to connect to DB
    include ("dbConnection/dbConnection.php"); 

    $pageName = "A Smart Buy Fro A Smart Home";
    include ("html/headfile.html");
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mystylesheet.css\">";
    echo "<title>".$pageName."</title>";

    echo "<body>";
    echo "<h4>".$pageName."</h4>";

    // retrieve the product id passed from previous page using the GET method and the $_GET superglobal variable
    // applied to the query string u_prod_id
    // store the value in a local variable called $prodid
    $prodID = $_GET["u_prod_id"];

    // create a $SQL variable and populate it with a SQL statement that retrieves product details
    $SQL = "SELECT prodName, prodPicNameLarge, prodDescripLong, prodPrice, prodQuantity 
            FROM product 
            WHERE prodid='$prodID'";
    
    // exiqute quary 
    $resultSet = mysqli_query($connection, $SQL);

    // Parts warnt
    $prodName = "";
    $prodImg = "";
    $prodDescrip = "";
    $prodPrice = "";
    $prodQty = "";

    if($resultSet) {
        // mysqli_num_rows($resultSet);
        $recode = mysqli_fetch_assoc($resultSet);
        $prodName = $recode['prodName'];
        $prodImg = $recode['prodPicNameLarge'];
        $prodDescrip = $recode['prodDescripLong'];
        $prodPrice = $recode['prodPrice'];
        $prodQty = $recode['prodQuantity'];
    }

    echo "<p>Selected product ID : $prodID</p>";
    echo "
        <div class=\"mainProdDiv\">
            
            <div class=\"prodImgDiv\">
                <style>
                    .prodImgDiv{
                        background: url('imgs/productImg/{$prodImg}') no-repeat center;
                    }
                </style>
            </div>
            
            <div class=\"prodBuyDiv\">
                <h4>{$prodName}</h4>
                <p>{$prodDescrip}</p><br>
                <h5 id=\"priceH5\">$ {$prodPrice}</h5>
                <p>Left in stock : {$prodQty}</p><br>
            
                <p><b>Number to be purchased : </b></p>
                
            </div>

        </div>
    ";
    
    // Close connection
    mysqli_close($connection); // $connection = null;

    //include foot layout
    include("html/footfile.html");
    echo"</body>";
?>