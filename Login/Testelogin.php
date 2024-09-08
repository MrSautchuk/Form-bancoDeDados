<?php 
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Senha'])) {
        //Acessa
        include_once('PHP.php');
        $Email = $_POST['Email'];
        $Senha = $_POST['Senha'];
        // print_r('Email:'.$Email.' Senha:'.$Senha);
        $sql = "SELECT * FROM usuários WhERE Email = '$Email' AND Senha = '$Senha'";
        $result = $conexao->query($sql);
        // print_r($result);
        // print_r("<br>");
        // print_r($sql);

          if(mysqli_num_rows($result) > 1) {
            unset($_SESSION["Email"]);
            unset($_SESSION["Senha"]);
            header("Location: index.php");
          }

          else {
            $_SESSION["Email"] = $Email;
            $_SESSION["Senha"] = $Senha;
            header("Location: sistema.php");
          }
        }

    else {
        //Não acessa
      header("location: index.php");
    }
?>