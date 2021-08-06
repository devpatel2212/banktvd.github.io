<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with database</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <h1 class="data" align="center">Database</h1>
    <table border = '25px' class="tab" cellspacing="5px" cellpadding="5px">
        <tr class = "head">
            <th>Name</th>
            <th>Residence</th>
            <th>DOB</th>
            <th>Bank_Balance</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","sparks_sample");
        /*if($conn->connection_aborted)
        {
            die("Connection failed". $conn-> connection_aborted);
        }*/
        $sql = "SELECT Name, Residence, DOB, Bank_Balance from tvdr";
        $result = $conn-> query($sql);
        $r = mysqli_num_rows($result);
        if($r > 0)
        {
            while($row = $result-> fetch_assoc())
            {
                echo "<tr><td>".$row["Name"]."</td><td>".$row["Residence"]."</td><td>".$row["DOB"]."</td><td>".$row["Bank_Balance"]."</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "0 result";
        }
        $conn-> close();
        ?>
    </table>
    <hr>
    <p class="use" align="center">Select the user you want to be</p>
    <form action="transfer.php" method="post">
        
        <table border = '25px' class="tabn" cellspacing="5px" cellpadding="5px">
            <tr>
                <th>No.</th>
                <th>User</th>
            </tr>
            <tr>
                <td>1.</td>
                <td><input type="submit" name="from" id="from" value="Stefan Salvatore"/>
            </tr>
            <tr>
                <td>2.</td>
                <td><input type="submit" name="from" id="from" value="Damon Salvatore"></td>
            </tr>
            <tr>
                <td>3.</td>
                <td><input type="submit" name="from" id="from" value="Elena Gilbert"></td>
            </tr>
            <tr>
                <td>4.</td>
                <td><input type="submit" name="from" id="from" value="Jeremy Gilbert"></td>
            </tr>
            <tr>
                <td>5.</td>
                <td><input type="submit" name="from" id="from" value="Caroline Forbes"></td>
            </tr>
            <tr>
                <td>6.</td>
                <td><input type="submit" name="from" id="from" value="Bonnie Bennet"></td>
            </tr>
            <tr>
                <td>7.</td>
                <td><input type="submit" name="from" id="from" value="Tyler Lockwood"></td>
            </tr>
            <tr>
                <td>8.</td>
                <td><input type="submit" name="from" id="from" value="Matt Donovan"></td>
            </tr>
            <tr>
                <td>9.</td>
                <td><input type="submit" name="from" id="from" value="Niklaus Mikaelson"></td>
            </tr>
            <tr>
                <td>10.</td>
                <td><input type="submit" name="from" id="from" value="Elijah Mikaelson"></td>
            </tr>
        </table>
    </form>       
</body>
</html>
