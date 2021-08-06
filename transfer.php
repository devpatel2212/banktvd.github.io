<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer the money</title>
    <link rel="stylesheet" href="transfer.css">
</head>
<body>
    <?php
        //$con = mysqli_connect('localhost', 'root', '','sparks_sample');

        // get the post records
        $from = $_POST['from'];
        $k=$from;
    ?>
    <p class="welcome" align="center">Welcome <?php echo $from ?></p>
    <form action="to.php" method="post">
        From:
        <input type="text" name="from" id="from" value="<?php echo($k)?>"/">
        <p class="welcome">Choose the user whom you want to pay:</p>
        <table class="tabn">
            <tr>
                <th>No.</th>
                <th>User</th>
            </tr>
            <tr>
                <td>1.</td>
                <td><input type="submit" name="to" id="to" value="Stefan Salvatore"></td>
            </tr>
            <tr>
                <td>2.</td>
                <td><input type="submit" name="to" id="to" value="Damon Salvatore"></td>
            </tr>
            <tr>
                <td>3.</td>
                <td><input type="submit" name="to" id="to" value="Elena Gilbert"></td>
            </tr>
            <tr>
                <td>4.</td>
                <td><input type="submit" name="to" id="to" value="Jeremy Gilbert"></td>
            </tr>
            <tr>
                <td>5.</td>
                <td><input type="submit" name="to" id="to" value="Caroline Forbes"></td>
            </tr>
            <tr>
                <td>6.</td>
                <td><input type="submit" name="to" id="to" value="Bonnie Bennet"></td>
            </tr>
            <tr>
                <td>7.</td>
                <td><input type="submit" name="to" id="to" value="Tyler Lockwood"></td>
            </tr>
            <tr>
                <td>8.</td>
                <td><input type="submit" name="to" id="to" value="Matt Donovan"></td>
            </tr>
            <tr>
                <td>9.</td>
                <td><input type="submit" name="to" id="to" value="Niklaus Mikaelson"></td>
            </tr>
            <tr>
                <td>10.</td>
                <td><input type="submit" name="to" id="to" value="Elijah Mikaelson"></td>
            </tr>
        </table>
    </form>       
</body>
</html>