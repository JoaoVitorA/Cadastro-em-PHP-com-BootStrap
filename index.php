<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrep/css_js/css/style.css">

    <title> Cadastro de produto </title>
</head>
<body>
    <header>
        <div id="menu">
            <nav>
                <a href="prod_cadastrados.php" class="btn btn-outline-primary"> Produtos Cadastrados </a>
                <a href="teste_bd.php" class="btn btn-outline-primary"> Teste de conexão  </a>
                <a href="login.php" class="btn btn-outline-primary"> Login </a>
            </nav>
        </div>
    </header>
    <div id="form" class="alert alert-secondary" role="alert">
        <form method="POST" action="index.php">
            <small>Nome do produto</small> <br>
            <label>
                <input type="text" name="txt_nome" id="nome" placeholder="Nome do produto"> <br> <br>
            </label>
            <small>Nome do fabricante</small> <br>
            <label>
                <input type="text" name="txt_fabri" id="fabri" placeholder="Nome do fabricante"> <br>
            </label>
            <small>Modelo do produto</small> <br>
            <label>
                <input type="text" name="txt_modelo" id="modelo" placeholder="Modelo do produto"> <br>
            </label>
            <small>Tamanho do produto</small> <br>
            <label>
                <input type="text" name="txt_tamanho" id="tamanho" placeholder="Tamanho do produto"> <br>
            </label>
            <small>Data da fabricação</small> <br>
            <label>
                <input type="date" name="txt_data_fabri" id="data_fabri" placeholder="Data da fabricação"> <br>
            </label>
            <small>Data do vencimento</small> <br>
            <label>
                <input type="date" name="txt_data_venc" id="data_venci" placeholder="Data do vencimento"> <br>
            </label>
            <small>Quantidade em estoque</small> <br>
            <label>
                <input type="number" name="txt_quantidade" id="quantidade" placeholder="Quantidade em estoque"> <br>
            </label>
        </form>
    </div> 
</body>
</html>
