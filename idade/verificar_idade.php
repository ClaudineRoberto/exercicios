<?php
// Obtém o nome e a idade da pessoa via formulário POST
$nome = $_POST["nome"];
$idade = $_POST["idade"];

// Verifica se a pessoa é maior ou menor de 18 anos
if ($idade >= 18) {
    // Mensagem para pessoas maiores de 18 anos
    echo "Olá " . $nome . ", você é maior de idade.";
} else {
    // Mensagem para pessoas menores de 18 anos
    echo "Olá " . $nome . ", você é menor de idade.";
}
?>
