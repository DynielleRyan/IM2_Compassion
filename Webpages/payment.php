
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing page</title>
</head>
<body>

    <form action="../includes/payment.inc.php" method="post">
        <label>Donation</label>
        <input type="text" name="amount" placeholder="Amount of Donation" required>
        
        <br><br>
        <label>Personal Message</label>
        <input type="text-area" name ="message"placeholder="Message.....">
        <br><br>
        <button type="submit" name="submit">Donate</button>
    </form>

    <ul>
        <li><a href="">Gcash</a></li>
        <li><a href="">Paymaya</a></li>
        <li><a href="">Paypal</a></li>
    </ul>


</body>
</html>