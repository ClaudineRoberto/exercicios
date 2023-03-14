<?php

require_once "conexao.php";


// Consulta SQL para recuperar os dados da tabela de produtos
$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

?>

<!-- Adicionando o Bootstrap para estilizar a tabela -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Código HTML para exibir os dados da tabela de produtos em uma tabela -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Quantidade</th>
            <th>Preço de compra</th>
            <th>Preço de venda</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loop através dos resultados da consulta SQL e exibir cada produto em uma linha da tabela
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["categoria"] . "</td>";
            echo "<td>" . $row["quantidade"] . "</td>";
            echo "<td>" . $row["preco_compra"] . "</td>";
            echo "<td>" . $row["preco_venda"] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>

<!-- Adicionando o JavaScript do Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
