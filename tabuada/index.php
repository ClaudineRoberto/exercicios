<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form method="post" action="">
        <label for="numero">Informe um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Gerar tabuada</button>
    </form>
    <?php
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];

            echo "<h2>Tabuada do $numero</h2>";
            echo "<table>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>
