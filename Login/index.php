<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="text-center mb-5 text-dark">Made with bootstrap</div>
        <div class="card my-5">
  
          <form class="card-body cardbody-color p-lg-5" action="Testelogin.php" method="post">
  
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
  
            <div class="i mb-3">
              <label>&nbsp &nbsp E-mail<br></label>
              <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp"
                placeholder="  Email">
            </div>
            <div class="i mb-3">
              <label>&nbsp &nbsp Senha<br></label>
              <input type="password" class="form-control" id="Senha" name="Senha" placeholder="  Senha">
            </div>
            <div class="text-center"><input type="submit" name="submit" class="btn btn-primary px-5 mb-5 w-100" value="Login">
            </div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="cad.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>
  
      </div>
    </div>
  </div>
</body>
</html>