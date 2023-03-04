<?php

    // Start session
    session_start();

    //include db.php file to connect to DB
    include ("dbConnection/dbConnection.php"); 

    $pageName = "Smart Basket";
    include ("html/headfile.html");
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mystylesheet.css\">";
    echo "<title>".$pageName."</title>";

    echo "<h4>".$pageName."</h4>";

    // Check if post method is empty or not
    if(sizeof($_POST) != 0) {
        //capture the ID of selected product using the POST method and the $_POST superglobal variable
        //and store it in a new local variable called $newprodid
        $newprodid = $_POST['h_prodid'];

        //capture the required quantity of selected product using the POST method and $_POST superglobal variable
        //and store it in a new local variable called $reququantity
        $reququantity = $_POST['p_quantity'];

        //create a new cell in the basket session array. Index this cell with the new product id.
        //Inside the cell store the required product quantity
        $_SESSION['basket'][$newprodid]=$newprodid;
        //$_SESSION['basket'][$reququantity]=$reququantity;

        echo "
            <!-- <p>
                ID of selected product {$newprodid} <br>
                Quantity of selected product {$reququantity}<br>
            </p> -->
            <p><b>1 item added</b></p><br>
        ";

        //Create a variable $total and initialize it to zero
        $total = 0;

        //Create a HTML table with a header to display the content of the shopping basket
        //i.e. the product name, the price, the selected quantity and the subtotal
        tablePart();
        echo "vfdvgsddvs";

        //if the session array $_SESSION['basket'] is set{
            //loop through the basket session array for each data item inside the session using a foreach loop
            //to split the session array between the index and the content of the cell
            //for each iteration of the loop
            //store the id in a local variable $index & store the required quantity into a local variable $value
            //{
            //SQL query to retrieve from Product table details of selected product for which id matches $index
            //execute query and create array of records $arrayp
            //create a new HTML table row
            //display product name using array of records $arrayp
            //display product price using the array of records $arrayp
            //display selected quantity of product retrieved from the cell of session array and now in $value
            //calculate subtotal, store it in a local variable $subtotal and display it
            //increase total by adding the subtotal to the current total
            //}
            // Display total
        //}
        //else{
            //Display empty basket message
        //}
        
    } else {
         echo "<h5>Bascet Unchanged</h5>";
    }

    


    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    
    // Close connection
    mysqli_close($connection); // $connection = null;

    include("html/footfile.html"); //include foot layout

    // Table function
    function tablePart() {
        echo "
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
            </table>
        ";
    }

?>