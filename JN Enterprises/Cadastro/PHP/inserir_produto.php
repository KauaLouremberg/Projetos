<?php
// Incluir o arquivo de conexão
require_once 'conexao.php';

if (isset($_POST['submitProduto'])) {
    // Dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    // Upload da imagem
    $nome_imagem = $_FILES['imagem']['name'];
    $diretorio_imagem = 'uploads/' . $nome_imagem;

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio_imagem)) {
        // Query para inserir o produto no banco de dados
        $sql = "INSERT INTO produtos (nome, descricao, preco, img_url) VALUES ('$nome', '$descricao', '$preco', '$diretorio_imagem')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Produto adicionado com sucesso!');</script>";
            echo "<script>window.location.href = 'principal.php';</script>"; // Redirecionar para a página principal após a inserção
        } else {
            echo "<script>alert('Erro ao adicionar produto.');</script>";
            echo "<script>window.location.href = 'principal.php';</script>"; // Redirecionar para a página principal em caso de erro
        }
    } else {
        echo "<script>alert('Desculpe, ocorreu um erro ao enviar seu arquivo.');</script>";
        echo "<script>window.location.href = 'principal.php';</script>"; // Redirecionar para a página principal em caso de falha no upload
    }
} else {
    // Redirecionar para a página principal se o formulário não foi enviado corretamente
    header("Location: principal.php");
}

// Fechar a conexão
mysqli_close($conn);
?>
