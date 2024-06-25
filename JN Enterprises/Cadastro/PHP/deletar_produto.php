<?php
// Incluir o arquivo de conexão
require_once 'conexao.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Obtém o ID do produto a ser deletado
    $id = $_GET['id'];

    // Primeiro, recuperar a URL da imagem para excluir do diretório uploads
    $sql_select_img = "SELECT img_url FROM produtos WHERE id = $id";
    $resultado_select_img = mysqli_query($conn, $sql_select_img);

    if ($resultado_select_img) {
        $row = mysqli_fetch_assoc($resultado_select_img);
        $img_url = $row['img_url'];

        // Construir o caminho completo do arquivo a ser deletado
        $caminho_arquivo = "uploads/" . basename($img_url);

        // Deletar o arquivo do diretório de uploads, se existir
        if (file_exists($caminho_arquivo)) {
            unlink($caminho_arquivo);
        }
    }

    // Query para deletar o produto do banco de dados
    $sql_delete = "DELETE FROM produtos WHERE id = $id";

    if (mysqli_query($conn, $sql_delete)) {
        echo "<script>alert('Produto deletado com sucesso!');</script>";
        echo "<script>window.location.href = 'principal.php';</script>"; // Redirecionar para a página principal após a exclusão
    } else {
        echo "<script>alert('Erro ao deletar produto.');</script>";
        echo "<script>window.location.href = 'principal.php';</script>"; // Redirecionar para a página principal em caso de erro
    }
} else {
    echo "<script>alert('ID do produto não fornecido.');</script>";
    echo "<script>window.location.href = 'principal.php';</script>"; // Redirecionar para a página principal se o ID não estiver presente
}

// Fechar a conexão
mysqli_close($conn);
?>
