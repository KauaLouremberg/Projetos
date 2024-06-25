<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/cabecalho.css" />
    <title>Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-9aOYZaQIEaYt2zBz+lZP8y51zPEmE4UwOGPgjL+G6hXcZ9eD9+vyA/1iVW7Q+szE" crossorigin="anonymous" />
    <style>
        .card-position {
            margin-top: 10%;
            position: absolute;
            top: 40%;
            left: 20%;
            transform: translate(-50%,-50%);
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            
        }

        .card {
            
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white;
            
        }

        .card2 {
            padding: 10px;
        }

        .card2 img {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0;
        }

        .card2 p {
            margin-top: 10px;
            font-size: 14px;
        }

        .preco {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%,-50%);
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-submit-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo" style="display: flex; align-items: center">
            <span style="color: #01939c;font-size: 26px;font-weight: bold;letter-spacing: 1px;margin-left: 20px;">JN
                ENTERPRISES</span>
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
            <li><img src="../Assets/logoenterprises.png" height="100px" width="100px" id="logojn"></li>
        </ul>
    </nav>
    <script src="../JS/index.js"></script>

    <div class="card-position">
        <?php
        // Incluir o arquivo de conexão
        require_once 'conexao.php';

        // Query para selecionar todos os produtos do banco de dados
        $sql = "SELECT * FROM produtos";
        $resultado = mysqli_query($conn, $sql);

        // Verifica se há produtos
        if (mysqli_num_rows($resultado) > 0) {
            // Loop para exibir os cards de produtos
            while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
        <div class="card">
            <div class="card2">
                <img src="<?php echo $row['img_url']; ?>" alt="Imagem do Produto">
                <span style="color: #000; font-size: 20px; font-weight: bold; letter-spacing: 1px;"><?php echo $row['nome']; ?></span>
                <p><?php echo $row['descricao']; ?></p>
                <div class="preco"><?php echo 'R$ ' . number_format($row['preco'], 2, ',', '.'); ?></div>
                <button class="btn">Comprar</button>
                <a href="deletar_produto.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Excluir</a>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<p>Nenhum produto cadastrado.</p>";
        }

        // Fechar a conexão
        mysqli_close($conn);
        ?>
    </div>

    <div class="form-container">
        <h2>Adicionar Novo Produto</h2>
        <form action="inserir_produto.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagem">Escolha a Imagem:</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" class="form-control" required>
            </div>
            <button type="submit" class="form-submit-btn" name="submitProduto">Adicionar Produto</button>
        </form>
    </div>

</body>

</html>

</body>

</html>
