<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];
    

    $sql = "INSERT INTO pessoa (cpf, nome, rua, numero, bairro, cidade, estado, email, telefone, senha) 
            VALUES ('$cpf', '$nome', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$email', '$telefone', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
