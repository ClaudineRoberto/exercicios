<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $preco_compra = $_POST['preco_compra'];
    $preco_venda = $_POST['preco_venda'];

    $sql = "INSERT INTO produtos (nome, categoria, quantidade, preco_compra, preco_venda) 
            VALUES ('$nome', '$categoria', '$quantidade', '$preco_compra', '$preco_venda')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
