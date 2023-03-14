<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM pessoa WHERE cpf = '$cpf' AND senha = '$senha'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Login realizado com sucesso!";
    } else {
        echo "CPF ou senha inválidos!";
    }

    mysqli_close($conn);
}
