<?php
include "conn.php";
        
        $idClient = filter_input(INPUT_GET, 'id');
        $name = filter_input(INPUT_GET, 'name');
        $number = filter_input(INPUT_GET, 'number');
        $email = filter_input(INPUT_GET, 'email');
        $CPF = filter_input(INPUT_GET, 'CPF');
        $date = filter_input(INPUT_GET, 'date');
        $city = filter_input(INPUT_GET, 'cidade');
        $genres = filter_input(INPUT_GET, 'sex');
        
        $sql = "UPDATE dataclient SET nameClient = '$name', phone = '$number', email = '$email', cpf = '$CPF', birthday = '$date', city = '$city', sex = '$genres' WHERE idClient = '$idClient'";

        $alt = $conn->query($sql);

        if ($alt) {
         header("Location: ../search.php");
        } else {
          die ('[ERROR]:' . mysqli_error($alt));
        }

        $conn->close();
?>