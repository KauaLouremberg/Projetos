<?php 




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
  <link rel="stylesheet" href="../Css/suporte.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
<div class="centro">

<div class="wrapper">
  <div class="imagem">
  </div>
  <form action="" method="POST">
    <span style="color:#ffffff; font-size:50px; font-weight:bold; letter-spacing: 5px;margin-left: 1px;">SUPORTE</span>
    <div class="input-box">
      <input type="text" name="user" placeholder="Nome Usuário" required />
      
    </div>
    <div class="input-box">
      <input type="password" name="senha" placeholder="Senha" required />
     
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