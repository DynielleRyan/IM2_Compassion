
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/payment.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <title>Billing page</title>
</head>
<body>

    <form  class="card"action="../includes/payment.inc.php" method="post">
    <a class="btn"href="index.php"><i class="fa fa-home"></i></a>
    <?php

        echo '<br>
            <label>'.$_GET['donation'].'</label>
            <label>Donation</label> 
            <br>
            <input type="number" name="amount" placeholder="Amount of Donation" required>
            <br><br>
            <label>Personal Message</label>
            <br>
            <input class ="message" type="text-area" name ="message"placeholder="Message.....">
            <input type="hidden" name="dontaion_id" value="'.$_GET['id'].'">
            <button class="button" type="submit" name="submit" value="submit">Donate</button>
            <ul>
            <h3>Other options</h3>
            <li><a href="https://www.gcash.com/">Gcash</a></li> 
            <li><a href="https://www.maya.ph/">Paymaya</a></li>';
    
    ?>
        
    </ul>
    </form>
            



</body>
</html>