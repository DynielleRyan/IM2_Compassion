<?php
    session_start();
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $message = $_POST['message'];
        
        include 'dbh.inc.php';
        include 'functions.inc.php';
        $id = $_SESSION['currUser']['usersId'];

        $sql = "INSERT INTO donation (fkey,payment_amount,message) VALUES('$id','$amount','$message');";

        if (mysqli_query($conn, $sql)) {
            header("location: ../Webpages/index.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        
       header('location: ../Webpages/payment.php');
    }


    
    

