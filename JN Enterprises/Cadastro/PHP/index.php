<?php
$errorConn = false;
$erroruserorpassword = false;

include("./conexao.php");
session_start();

if (isset($_POST['enviar'])) {


  if (strlen($_POST['user']) == 0) {
    echo "Preencha seu usuario";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {

    $user = $conn->real_escape_string($_POST['user']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM logins WHERE user = '$user'";

    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

    $linha = $sql_query->fetch_assoc();

    $quantidade = $sql_query->num_rows;
    $senhaHash = $linha['password'];
    
    if ($quantidade >= 1 and password_verify($senha, $senhaHash)) {

      $usuario = $linha['user'];
      $email = $linha['email'];

      $_SESSION['user'] = $usuario;
      $_SESSION['email'] = $email;
      mysqli_close($conn);


      header("Location: principal.php");


    } else {
      $erroruserorpassword = true;
      echo '';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sh-a384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="../Css/style.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <div class="logo" style="display: flex;align-items: center;">
    <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">JN ENTERPRISES</span>
    </div>
    <div class="hamburger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-links">
      <li><a href="#" >Menu</a></li>
      <li><a href="#">Serviços</a></li>
      <li><a href="#">Produtos</a></li>
      <li><a href="#">Suporte</a></li>
      <li><a href="#">Fale Conosco</a></li>
      <li><button class="login-button" href="./register.php">Registrar-se</button></li>
      <li><img src="../Assets/logoenterprises.png" height="100px" width="100px" id="logojn"></li>
    </ul>
  </nav>
  <script src="/JS/index.js"></script>
  <div class="centro">

    <div class="wrapper">
      <div class="imagem">
      </div>
      <form action="" method="POST">
        <span style="color:#ffffff; font-size:50px; font-weight:bold; letter-spacing: 5px;margin-left: 1px;">LOGIN</span>
        <div class="input-box">
          <input type="text" name="user" placeholder="Nome Usuário" required autocomplete="off" />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" name="senha" placeholder="Senha" required />
          <i class="bx bxs-lock-alt"></i>
        </div>
        <button type="submit" class="btn" name="enviar">Login</button>

        <div id="divFalha">
          <p id="pFalha"></p>
        </div>

        <div class="subEnviar">
          <span id="manter"><label><input type="checkbox" />Mantenha-me conectado</label></span>
          <span id="esqueceu"><a href="#">Esqueceu a senha?</a></span>
        </div>

        <div class="register-link">
          <p>Não possui uma conta? <a href="./register.php">Registre-se</a>

        </div>
    </div>
</body>

</html>
<script src="../JS/index.js"></script>
<?php
if ($errorConn) {
  echo "
        <script>
          falhaConexao();
        </script>
      ";
} elseif ($erroruserorpassword) {
  echo "
        <script>
          userorpassword();
        </script>
      ";
} elseif ($erroruserorpassword) {
  echo "
        <script>
          userorpassword();
        </script>
      ";
}

?>