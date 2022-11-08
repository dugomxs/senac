<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sucesso</title>
</head>
<body>
  
</body>
<?php
         error_reporting(0);
        include "conn.php";

        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $CPF = $_POST['CPF'];
        $date = $_POST['date'];
        $city = $_POST['cidade'];
        $genres = $_POST['sex'];

        $sql = "INSERT INTO dataclient(nameClient, phone, email, cpf, birthday, city, sex)
        VALUE ('$name', '$number', '$email', '$CPF', '$date', '$city', '$genres')";

        $conn->query($sql);
        header("Location: ../search.php");
        $conn->close();
      ?>
</html>
