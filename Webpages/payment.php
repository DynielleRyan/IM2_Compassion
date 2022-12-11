
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/payment.css">
    <title>Billing page</title>
</head>
<body>

    <form  class="card"action="../includes/payment.inc.php" method="post">
        <label>Donation</label>
        <input type="number" name="amount" placeholder="Amount of Donation" required>
        <br><br>
        <label>Personal Message</label>
        <input type="text-area" name ="message"placeholder="Message.....">
        <!-- <input type="hidden" value=""> -->
        <br><br>
        <button class="button" type="submit" name="submit" value="submit">Donate</button>
        <br><br><br>
        <ul>
        <h3>Other options</h3>
        <li><a href="">Gcash</a></li>
        <li><a href="">Paymaya</a></li>
        <li><a href="">Paypal</a></li>
    </ul>
    </form>
            



</body>
</html>