<!DOCTYPE html>
<html>
    <head>
        <style>
             body {
  background: url("img/bluebackground.jpg");
  background-size: 100%
}
        </style>
    </head>
    <body>
    <center>
        <!-- //Starting the session to get the session variable from last page.-->
        <h1> Purchase Receipt:</h1>
        <?php
        
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $phoneNumber = $_POST['txtNum'];
        echo "Name: ".$fullNameValue.".";
        echo "<br></br>";
        echo "Total Price: $".$totalValue.".";
        echo "<br></br>";
        echo "Phone Number: ".$phoneNumber.".";
     
        
        ?>
    </center>
    </body>
</html>
