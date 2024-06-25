<?php
// Incluindo arquivos necessários do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verificar se o formulário foi submetido via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitAtendimento'])) {
    // Incluir configurações e autoload do PHPMailer
    require './vendor/autoload.php'; // Ajuste o caminho conforme sua estrutura de arquivos
    require './vendor/includes/config.php'; // Ajuste o caminho conforme sua estrutura de arquivos

    // Capturar dados do formulário
    $mailFrom = $_POST['mail'];
    $mensagem = $_POST['mensagem'];

    // Configuração do PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Configure com o seu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'kaualouremberg@gmail.com'; // Seu endereço de email
        $mail->Password = 'xxxxxxxxxxxxx'; // Sua senha de email
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom($mailFrom);
        $mail->addAddress('kaualouremberg@gmail.com'); // Endereço de email do destinatário

        // Conteúdo do email
        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de Atendimento ao Cliente';
        $mail->Body = "Email do remetente: $mailFrom<br><br>Mensagem:<br>$mensagem";

        $mail->send();

       
        header("Location: atendimento.php?enviado=sucesso");
        exit;
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
} else {
    echo 'Método inválido para processamento do formulário.';
}
?>
