<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/dcdd220d58.js" crossorigin="anonymous"></script>
  <title>Pesquisar</title>
</head>
<body>
  <?php include "nav.php";?>
  <main class="container">
  <div class="searchBar">
    <input type="text" name="searchBar" id="searchBar" placeholder="Digite o nome do cliente" spellcheck="no">
    <button onclick="searchData()" type="submit"><i id="searchClientLogo" class="fa-solid fa-magnifying-glass"></i></button>
  </div>
  <?php include "data/query.php";?>
  <script src="js/searchInput.js"></script>
</body>
</html>