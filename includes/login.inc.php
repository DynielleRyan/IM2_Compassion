<?php
    session_start();
    include 'dbh.inc.php'; 

    // Non-NULL Initialization Vector for decryption
    $decryption_iv = '1234567891011121';
    // Store the decryption key
    $decryption_key = "compassion";
    // Storingthe cipher method 
    $ciphering = "AES-128-CTR";
    // Using OpenSSl Encryption method 
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options   = 0;

    if(isset($_POST['submit'])){

        $_SESSION['login_err'] = [];

        if (empty(trim($_POST['uid']))) {
            $_SESSION['login_err']['uid'] = "Email is required";
        } else {
            $email = trim($_POST['uid']);
        }
        if (empty(trim($_POST['pwd']))) {
            $_SESSION['login_err']['password_err'] = "Password is required";
        } else {
            $password = trim($_POST['pwd']);
        }

        if (isset($email) && isset($password)) {

            $query = "SELECT * FROM users WHERE usersEmail= '$email' LIMIT 1";

            $results = mysqli_query($conn, $query);
            $rows = mysqli_num_rows($results);
        
            if ($rows > 0) {
                $row = mysqli_fetch_assoc($results);
                $encryption = $row['usersPwd'];

                $decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);

                if ($password == $decryption){
                    $_SESSION['currUser'] = $row;
                    if (isset($_SESSION['login_err'])) {
                        unset($_SESSION['login_err']);
                    }
                    header("location: ../Webpages/index.php"); 
                    mysqli_close($conn);
                }else{
                    header('location: ../Webpages/Login.php');
                }            
            } else {
                $_SESSION['login_err']['email_err'] = "Email isn't registered";
            }
        }
    }
 

?>