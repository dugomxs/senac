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
  <main>
    <form action="data/insertData.php" method="POST">
        <div id="formContainer">
          <input type="text" name="name" id="name" placeholder="Nome" required/><br />
          <input type="tel" name="number" id="number" placeholder="Telefone" required /><br />
          <input type="email" name="email" id="email" placeholder="Email" required/><br/>
          <input type="text" name="CPF" id="CPF" placeholder="CPF" required /><br/>
          <input type="date" name="date" id="date" placeholder="Data de nascimento" required/><br/>
          <input type="text" name="cidade" id="cidade" placeholder="Cidade"/><br/>
          <div id="genres">
            <input type="radio" name="sex" id="sexM" required value="Homem"/><br>
            <label id="label" for="sexM">Homen</label>
            <input type="radio" name="sex" id="sexF" required value="Mulher"/><br>
            <label id="label" for="sexF">Mulher</label>
          </div>
          <input onclick="successAlert()" type="submit" name="submit" id="submit" value="Adicionar"/>
          <br/>
        </div>
      </form>
    </main>
  </body>
</html>