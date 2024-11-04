<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $to = "seuemail@exemplo.com";
    $subject = "Nova mensagem de contato de $nome";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Houve um erro ao enviar sua mensagem.";
    }
}
?>
