<?php
$errorConn = false;
$errorUserJaExiste = false;
$errorEmailJaUtilizado = false;
$errorSenhasDiferentes = false;
$erroruserorpassword = false;
$errorcadastroConcluido = false;

try {
  include("conexao.php");

  if ($_POST) {
    $password = $_POST["password"];
    $s_password = $_POST["s_password"];
    if ($password == "") {
      $mensagem = "";
    } 
    elseif ($password == $s_password) { 
      $user = filter_input(INPUT_POST,"user",FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);

      $sql1 = "SELECT user, email from logins where user = '{$user}' or email = '{$email}'"; 
      $select = mysqli_query($conn, $sql1);
      
      //se ja existir algum correspondente
      if (mysqli_num_rows($select) > 0){
        $linha = mysqli_fetch_assoc($select);
        //se for o msm usuario
        if ($linha['user'] == $user){
          $errorUserJaExiste = true;
          
        }
        //senao, se for o msm email
        else if ($linha['email'] == $email){
          $errorEmailJaUtilizado = true;
          
        }
        else if ($linha['email'] and $linha['user'] and $linha['password'])
         $errorcadastroConcluido = true;




         
      }
      else{
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO logins (user, email, password) VALUES
                    ('$user', '$email', '$hash')";

        mysqli_query($conn, $sql);
        
        header("location: index.php");
      }
    }
    else{
      $errorSenhasDiferentes = true;

    }
  }
  mysqli_close($conn);
} 
catch (Exception $e) {
  $errorConn = true;
  echo $e;
}


?>
<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/> 
    <link rel="stylesheet" href="../Css/register.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"rel="stylesheet" />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
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
          <li><a href="../PHP/index.php">Menu</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Produtos</a></li>
          <li><a href="#">Suporte</a></li>
          <li><a href="../PHP/atendimento.php">Fale Conosco</a></li>
          <li><button class="login-button" href="./index.php">Login</button></li>
          <li><img src="../Assets/logoenterprises.png" height="100px" width="100px" id="logojn"></li>
      </ul>
  </nav>
  <script src="/JS/index.js"></script>

  <div class="centro">
    <div class="imagem">
    </div>
      <div class="wrapper">
        <form action="" method="post"> 
          <span style="color:#ffffff; font-size:50px; font-weight:bold; letter-spacing: 3px;margin-left: 1px;">REGISTRO </span>
  
          <div class="input-box">
            <input type="text" name="user" placeholder="Nome Usuário" required autocomplete="off">
            <i class="bx bxs-user"></i>
          </div>
  
          <div class="input-box">
            <input type="email" name="email" placeholder="Email" required autocomplete="off">
            <i class="bx bxs-envelope"></i>
          </div>
  
          <div class="input-box">
            <input type="password" name="password" placeholder="Senha" required>
            <i class="bx bxs-lock-alt"></i>
          </div>
  
          <div class="input-box">
            <input type="password" name="s_password" placeholder="Confirme a senha" required>
            <i class="bx bxs-lock-alt"></i>
          </div>
          
  
          <div class="login-link">
             <p><input type="submit" class="btn" value="Registrar-se" name="submit"> </p>
          </div>

          <div id="divFalha">
            <p id="pFalha"></p>
          </div>

          <div class="index-link">
            <p>Já possui uma conta? <a href="./index.php">Fazer Login</a></p>
          </div>
        </form>
      </div> 
    </div>
  </body>
</html>
<script src="../JS/register.js"></script>
<?php
  if ($errorConn){
    echo"
        <script>
          falhaConexao();
        </script>
      ";
  }
  else if ($errorUserJaExiste){
    echo"
        <script>
          falhaUserJaExiste();
        </script>
      ";
  }
  else if ($errorEmailJaUtilizado){
    echo"
        <script>
          falhaEmailJaUtilizado();
        </script>
      ";
  }
  else if ($errorSenhasDiferentes){
    echo"
        <script>
          falhaSenhasDiferentes();
        </script>
      ";
  }
  else if ($errorcadastroConcluido){
    echo"
        <script>
          falhacadastroConcluido();
        </script>";
  }
?>
