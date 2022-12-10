<?php
if (isset($_POST["submit"])){

    $amount = $_POST["amount"];
    $message = $_POST["message"];


    
    include 'dbh.inc.php';
    include 'functions.inc.php';

    AmountMessage($conn, $amount, $message);

   


    
    
}
