<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

  $dbhost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '1234';
  $dbName = 'Login';

  $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);


//   if (isset($_POST["submit"])) {
//   print_r("NOME");
//   print_r('<br>');
//   print_r("EMAIL");
//   print_r('<br>');
//   print_r("SENHA");
//   print_r('<br>');
//   print_r("SENHAC");
// };

//   if ($conexao->connect_error) {
//     echo'erro';
//   } 
//   else {
//   echo'Sucesso';
// }

    // $Usuario = $_GET["NOME"] ?? "Digite um Usuário Válido";
    // $Email = $_GET["EMAIL"] ?? "Digite um E-mail válido";
    // $Senha = $_GET["SENHA"] ?? "Digite uma senha válida";
    // $SenhaC = $_GET["SENHAC"] ?? "Digite uma senha válida";
    // echo "$Usuario $Email $Senha $SenhaC";
?>


</body>
</html>