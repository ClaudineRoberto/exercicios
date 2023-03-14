<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <!-- Inclui os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="cadastrar_produto.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria:</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="alimentacao">Alimentação</option>
                            <option value="limpeza">Limpeza</option>
                            <option value="vestuario">Vestuário</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="preco_compra">Preço de compra:</label>
                        <input type="number" class="form-control" id="preco_compra" name="preco_compra" required>
                    </div>
                    <div class="form-group">
                        <label for="preco_venda">Preço de venda:</label>
                        <input type="number" class="form-control" id="preco_venda" name="preco_venda" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Inclui os arquivos JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4
