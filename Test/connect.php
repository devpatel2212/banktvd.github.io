<?php
    $name = $_POST['name'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];

    $conn = new mysqli('localhost','root','','sparks_sample');
    if($conn->connection_aborted)
    {
        die('Connection Failed :'-$conn->connection_aborted);
    }
    else
    {
        $stmt = $conn->prepare("insert into registration(name,city,email,balance) values(?,?,?,?)");
        $stmt->bind_param("sssi",$name,$city,$email,$balance);
        $stmt->execute();
        echo "registration successful";
        $stmt->close();
        $conn->close();
    }
?>