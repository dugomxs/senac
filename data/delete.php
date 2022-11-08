<?php
    include "conn.php";
        
        $idClient = filter_input(INPUT_GET, 'id');
        $name = filter_input(INPUT_GET, 'name');
        $number = filter_input(INPUT_GET, 'phone');
        $email = filter_input(INPUT_GET, 'email');
        $CPF = filter_input(INPUT_GET, 'cpf');
        $date = filter_input(INPUT_GET, 'date');
        $city = filter_input(INPUT_GET, 'city');
        $genres = filter_input(INPUT_GET, 'genres');

        $sql = "DELETE FROM dataclient WHERE idClient = '$idClient'";

        $alt = $conn->query($sql);

        if ($alt) {
         header("Location: ../search.php");
        } else {
          die ('[ERROR]:' . mysqli_error($alt));
        }

        $conn->close();
?>