<?php 
include_once("PHP.php");

if (isset($_POST["submit"])) {
$Nome = $_POST['NOME'];
$Email = $_POST['EMAIL'];
$Senha = $_POST['SENHA'];
$SenhaC = $_POST['SENHAC'];

// Prepara a consulta SQL
// $result = mysqli_query($conexao, "INSERT INTO USUARIOS(Nome,Email,Senha,SenhaC) VALUES($Nome,$Email,$Senha,$SenhaC)");$stmt->bind_param("", $Nome,$Email, $Senha, $SenhaC);

  $stmt = $conexao->prepare("INSERT INTO usuários (Nome, Email, Senha, SenhaC) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $Nome, $Email, $Senha, $SenhaC);

// Executa a consulta
  if ($stmt->execute()) {
      echo "Novo registro criado com sucesso";
  } else {
      echo "Erro: " . $stmt->error;
  }

// Fecha a conexão
$stmt->close();
$conexao->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Register Form</h2>
        <div class="text-center mb-5 text-dark">Made with bootstrap</div>
        <div class="card">
          
          <section>
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="100%" alt="profile">
            </div>
          </section>

          <form class="card-body cardbody-color p-lg-5" action="cad.php" method="POST">
            <main>
              <div class="i mb-3">
                <label>&nbsp &nbsp Nome de Usuário<br></label>
                <input type="text" class="form-control" name="NOME" aria-describedby="emailHelp" placeholder="  User Name">
              </div>
              <div class="i mb-3">
                <label>&nbsp &nbsp E-mail<br></label>
                <input type="email" class="form-control" name="EMAIL" placeholder="  E-mail">
              </div>
              <div class="i mb-3">
                <label>&nbsp &nbsp Senha<br></label>
                <input type="password" class="form-control" name="SENHA" placeholder="  Password">
              </div>
              <div class="i mb-3">
                <label>&nbsp &nbsp Repita a Senha<br></label>
                <input type="password" class="form-control" name="SENHAC" placeholder="  Repeat Password">
              </div>
            </main>
              <div class="bot">
                <div class="text-center"><a href="index.html"><input type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100"></a></div>
                <div id="emailHelp" class="form-text text-center mb-5 text-dark">Already Registered? <a href="index.php" class="text-dark fw-bold"> Login</a>
              </div> 
          </form>
        </div>
  
      </div>
    </div>
  </div>
</body>
</html>