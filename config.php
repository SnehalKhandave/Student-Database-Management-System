<?php
/*
$conn=mysqli_connect("localhost","shan","shanshan")or die("Connection to Server failed");
$db=mysqli_select_db("u761479816_bdata",$conn)or die("Connection to Database failed");
?>
<?php
*/

    // Creating a database connection

    $connection = mysqli_connect("localhost", "shan", "shanshan", "u761479816_bdata");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "u761479816_bdata");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

?>