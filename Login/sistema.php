<?php 
  session_start();
  //print_r($_SESSION);
  if ((!isset($_SESSION["Email"]) == true) and (!isset($_SESSION['Senha']) == true)) {
    unset($_SESSION["Email"]);
    unset($_SESSION["Senha"]);
    header('Location: index.php');
  }
  $logado = $_SESSION['Email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Style3.css" type="text/css"/>
</head>

<body>

  <header>

  <nav class="navbar sticky-top bg-body-tertiary">
  <div class="container-fluid">
    <button><a href="sair.php">Sair</a></button>
  </div>
  </nav>

  </header>

  <h1>Bem Vindo!</h1>

</body>

</html>