<?php
session_start();
include 'dbh.inc.php'; 
if (isset($_POST['submit'])) {
    // array init
    $_SESSION['reg_err'] = [];

    // Base input validations
    $name =  $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $uid = $_POST['uid'] ?? '';

    if (empty(trim($_POST['email'])))
        $_SESSION['reg_err']['emailErr'] = "Email is required";

    if (empty(trim($_POST['uid'])))
        $_SESSION['reg_err']['uidErr'] = "Email is required";

    if (empty($_POST['pwd'])) {
        $_SESSION['reg_err']['passErr'] = "Password is required";
    } else {
        $password = trim($_POST['pwd']);
    }

    if (empty($_POST['pwdrepeat'])) {
        $_SESSION['reg_err']['pwdrepeatErr'] = "Password is required";
    } else {
        $passwordRepeat = trim($_POST['pwdrepeat']);
    }

    // Validate password and confPass
    if (isset($password) && isset($passwordRepeat)) {
        if ($password !== $passwordRepeat) {
            $_SESSION['reg_err']['passwordSimilar'] = "Password did not match";
        } else {

             // Storingthe cipher method 
             $ciphering = "AES-128-CTR";

             // Using OpenSSl Encryption method 
             $iv_length = openssl_cipher_iv_length($ciphering);
             $options   = 0;
 
             // Non-NULL Initialization Vector for encryption 
             $encryption_iv = '1234567891011121';
 
             // Storing the encryption key 
             $encryption_key = "compassion";
 
             // Using openssl_encrypt() function to encrypt the data 
             $password = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);
 
             // // Displaying the encrypted string 
             // echo "Encrypted String: " . $encryption . "\n";
        }
    }

    var_dump($password);

    // Redirect if input validation fails
    if (!empty($_SESSION['reg_err']))
        header('location: ../Webpages/signup.php');


  
    

    $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) 
            VALUES ('$name','$email','$uid','$password')";
    // var_dump(mysqli_query($mysqli, $sql));
    if (mysqli_query($conn, $sql)) {
        header("location: ../Webpages/Login.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    header('location: ../Webpages/Login.php');
};