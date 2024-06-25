<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atendimento ao Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-9aOYZaQIEaYt2zBz+lZP8y51zPEmE4UwOGPgjL+G6hXcZ9eD9+vyA/1iVW7Q+szE" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Css/atendimento.css" /> <!-- Adicionando o arquivo CSS externo -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const enviado = urlParams.get('enviado');

            if (enviado === 'sucesso') {
                alert('Mensagem enviada com sucesso!');
            }
        });
    </script>
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
            <li><a href="#">Fale Conosco</a></li>
            <li><img src="../Assets/logoenterprises.png" height="100px" width="100px" id="logojn"></li>
        </ul>
    </nav>
    <script src="/JS/index.js"></script>
    
    <div class="form-container">
        <form class="form" action="processa_atendimento.php" method="POST">
            <div class="form-group">
                <label for="titulo"><span style="color:#01939c; font-size:20px; font-weight:bold; letter-spacing: 2px;">ATENDIMENTO AO CLIENTE</span></label>
                <label for="mail">Seu email</label>
                <input type="email" id="mail" name="mail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Como podemos ajudar?</label>
                <textarea id="mensagem" name="mensagem" class="form-control" rows="6" required></textarea>
            </div>
            <button class="form-submit-btn" type="submit" name="submitAtendimento">Enviar</button>
        </form>
    </div>
</body>

</html>
<script src="../JS/index.js"></script>
