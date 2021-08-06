<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
    <link rel="stylesheet" href="final.css">
</head>
<body>
        <h1>Old Database</h1>
    <table class="tabn" border = 25px align="center" cellpadding=3px cellspacing=2px>
        <tr>
            <th>Name</th>
            <th>Residence</th>
            <th>DOB</th>
            <th>Bank_Balance</th>
        </tr>
        <?php
        $from = $_POST['from'];
        $to = $_POST['to'];
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
    <br>
    <br>
    <table class="tabn" border = 25px align="center" cellpadding=3px cellspacing=2px>
        <tr>
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
        $bal = $_POST['bal'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        if($to==$from)
        {
            echo "<h1>Transaction failed because you selected same user.</h1>";
            die("". $conn-> connection_aborted);
        }
        $result=mysqli_query($conn,"SELECT Bank_Balance from tvdr where Name='$from'");
        
        //$data = $conn-> query($sql);
        /*while ($row = $result->fetch_assoc()) {
            echo $row['Bank_Balance'];
        }*/
        $row=$result->fetch_assoc();
        $k=$row['Bank_Balance']-$bal;
        //echo $k;
        
        
        /*
        $result = mysql_query($sql) or die('SQL Error :: '.mysql_error());
        $row = mysql_fetch_assoc($result);
        echo $row;*/
        if($k<0)
        {
            die("Connection failed because you have invalid balance". $conn-> connection_aborted);
        }
        else
        {
            echo "<h3>Congragulations your transfer has been succesfully completed<h3>";
            echo "<h1>New Database:</h1>";
            
            $sql=mysqli_query($conn,"UPDATE tvdr SET Bank_Balance = Bank_Balance+$bal WHERE Name = '$to'");
            $sql=mysqli_query($conn,"UPDATE tvdr SET Bank_Balance = Bank_Balance-$bal WHERE Name = '$from'");
            $sql = "SELECT Name, Residence, DOB, Bank_Balance from tvdr";//mysqli_query($conn,"SELECT Name, Residence, DOB, Bank_Balance from tvdr");
            $result = $conn->query($sql);
            $r = mysqli_num_rows($result);
            if($r > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>".$row["Name"]."</td><td>".$row["Residence"]."</td><td>".$row["DOB"]."</td><td>".$row["Bank_Balance"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
                echo conn->error;
            }
            //$sql="UPDATE tvdr SET Bank_Balance = Bank_Balance + $bal WHERE Name = $to";
            /*if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
              }
              else {
                echo "Error updating record: " . $conn->error;
              }*/
              /*$sql = "UPDATE tvdr SET Bank_Balance = Bank_Balance+$bal WHERE Name = '$to'";
    
              if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . $conn->error;
              }*/
           // $conn-> close();
        //}
        }
        ?>
    </table>
</body>
</html>