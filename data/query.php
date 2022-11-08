 <div class="mainContainer">
    <?php
    include "conn.php";
    if(!empty($_GET['search'])) {
      $data = $_GET['search'];
      $sql = "SELECT * FROM dataclient WHERE nameClient LIKE '%$data%' or idClient LIKE '%$data%'";
    } 
    else {
      $sql = "SELECT * FROM dataclient";
      }
    
      $resultado = mysqli_query($conn,$sql) or die ('[ERROR]');
    
    while ($registro = mysqli_fetch_array($resultado)) {
        $idClient = $registro['idClient'];
        $name = $registro['nameClient'];
        $number = $registro['phone'];
        $email = $registro['email'];
        $CPF = $registro['cpf'];
        $date = $registro['birthday'];
        $city = $registro['city'];
        $genres = $registro['sex'];

    echo '<div class="clientsContainer">';
    echo "<p><strong>ID:</strong> $idClient</p>";
    echo "<p><strong>Nome:</strong> $name</p>";
    echo "<p><strong>Telefone:</strong>$number</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>CPF:</strong> $CPF</p>";
    echo "<p><strong>Data de nascimento:</strong> $date</p>";
    echo "<p><strong>Cidade:</strong> $city</p>";
    echo "<p><strong>Sexo:</strong> $genres</p><br>";
    echo '<div class="buttonsContainer">';
    echo "<a href='altClient.php?id=$idClient&name=$name&phone=$number&email=$email&cpf=$CPF&date=$date&city=$city&genres=$genres'><button class='editButton'><i id='editLogo' class='fa-solid fa-pencil'></i></button></a>";
    echo "<a href='data/delete.php?id=$idClient'><button class='deleteButton'><i id='deleteLogo' class='fa-solid fa-x'></i></button></a>";
    echo '</div>';
    echo "</div>";
    }
    $conn->close();

    ?>
  </div>