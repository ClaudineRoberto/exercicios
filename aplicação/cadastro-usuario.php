<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <!-- Inclui os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="cadastrar_pessoa.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua" required>
                    </div>
                    <div class="form-group">
                        <label for="numero">Número:</label>
                        <input type="text" class="form-control" id="numero" name="numero" required>
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                            <?php
                            $estados = array(
                                "Selecione" => "Selecione",
                                "AC" => "Acre",
                                "AL" => "Alagoas",
                                "AP" => "Amapá",
                                "AM" => "Amazonas",
                                "BA" => "Bahia",
                                "CE" => "Ceará",
                                "DF" => "Distrito Federal",
                                "ES" => "Espírito Santo",
                                "GO" => "Goiás",
                                "MA" => "Maranhão",
                                "MT" => "Mato Grosso",
                                "MS" => "Mato Grosso do Sul",
                                "MG" => "Minas Gerais",
                                "PA" => "Pará",
                                "PB" => "Paraíba",
                                "PR" => "Paraná",
                                "PE" => "Pernambuco",
                                "PI" => "Piauí",
                                "RJ" => "Rio de Janeiro",
                                "RN" => "Rio Grande do Norte",
                                "RS" => "Rio Grande do Sul",
                                "RO" => "Rondônia",
                                "RR" => "Roraima",
                                "SC" => "Santa Catarina",
                                "SP" => "São Paulo",
                                "SE" => "Sergipe",
                                "TO" => "Tocantins"
                            );
                            foreach ($estados as $sigla => $nome) {
                                echo "<option value='$sigla'>$nome</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Inclui os arquivos JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4
