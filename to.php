<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay now</title>
    <link rel="stylesheet" href="to.css">
</head>
<body>
    <?php
        $from = $_POST['from'];
        $to = $_POST['to'];
    ?>
    <table align="center" class="heading">
        <tr>
            <th>Final Cheque</th>
        </tr>
    </table>
    <br>
    <br>
    <fieldset class="fiz">
    <form action="final.php" method="post" align="center">
        <p class="cheque" >From: <input type="text" name="from" value="<?php echo "$from" ?>"></p>
        <p class="cheque">To: <input type="text" name="to" value="<?php echo "$to" ?>"></p>
        <p class="cheque"> Amount: <input type="number" name="bal" id="bal"></p>
        <p class="cheque"><input type="submit" name="submit" id="submit" value="Pay now"></p>
    </form>
    </fieldset>
</body>
</html>