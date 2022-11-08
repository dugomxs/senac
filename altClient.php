<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/dcdd220d58.js" crossorigin="anonymous"></script>
  <title>Adicionar cliente</title>
</head>
<body>
  <?php include "nav.php"?>
  <?php
        include "data/conn.php";
        
        $idClient = filter_input(INPUT_GET, 'id');
        $name = filter_input(INPUT_GET, 'name');
        $number = filter_input(INPUT_GET, 'phone');
        $email = filter_input(INPUT_GET, 'email');
        $CPF = filter_input(INPUT_GET, 'cpf');
        $date = filter_input(INPUT_GET, 'date');
        $city = filter_input(INPUT_GET, 'city');
        $genres = filter_input(INPUT_GET, 'genres');
      ?>
  <main>
    <form action="data/alterar.php">
        <div id="formContainer">
          <input type="hidden" name="id" value="<?php echo $idClient;?>">
          <input type="text" name="name" id="name" placeholder="Nome" required value="<?php echo $name;?>"/><br />
          <input type="tel" name="number" id="number" placeholder="Telefone" required value="<?php echo $number;?>" /><br />
          <input type="email" name="email" id="email" placeholder="Email" required value="<?php echo $email;?>"/><br/>
          <input type="text" name="CPF" id="CPF" placeholder="CPF" required value="<?php echo $CPF;?>"/><br/>
          <input type="date" name="date" id="date" placeholder="Data de nascimento" required value="<?php echo $date;?>"/><br/>
          <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo $city;?>"/><br/>
          <div id="genres">
            <input type="radio" name="sex" id="sexM" required value="Homem"
            <?php echo ($genres == 'Homem') ? 'checked' : ''?>/><br>
            <label id="label" for="sexM">Homen</label>
            <input type="radio" name="sex" id="sexF" required value="Mulher" <?php echo ($genres == 'Mulher') ? 'checked' : ''?>/><br>
            <label id="label" for="sexF">Mulher</label>
          </div>
          <input onclick="successAlert()" type="submit" name="submit" id="submit" value="Alterar"/>
          <br/>
        </div>
      </form>
    </main>
  </body>
</html>