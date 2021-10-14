<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <title> Cadastro de produto </title>
</head>
<style>
#menu{
    border: solid 2px;
    height: 150px;
    text-align: center;
    background-color: rgb(51, 45, 75);
}
nav{
    margin-top: 20px;
}
a{
    margin: 10px;
}
#form{
    border: solid 2px;
    position: relative;
    width: 710px;
    margin: auto;
    margin-top: 50px;
}
form{
    width: 650px;
    padding: 20px;
}
input{
    size: 80px;
}
</style>
<body>
    <header>
        <div id="menu">
            <nav>
                <a href="prod_cadastrados.php" class="btn btn-outline-primary"> Produtos Cadastrados </a>
                <a href="conexao_banco_mysql/teste_de_conexao.php" class="btn btn-outline-primary"> Teste de conexão  </a>
                <a href="login.php" class="btn btn-outline-primary"> Login </a>
            </nav>
        </div> 
    </header>
    <div id="form" class="alert alert-secondary" role="alert">
        <form method="POST" action="recebendo.php">
            <small>Nome do produto</small> <br>
            <label>
                <input type="text" name="txt_nome" id="nome" placeholder="Nome do produto" > <br> <br>
            </label>
            <small>Nome do fabricante</small> <br>
            <label>
                <input type="text" name="txt_fabri" id="fabri" placeholder="Nome do fabricante"  > <br>
            </label>
            <small>Modelo do produto</small> <br>
            <label>
                <input type="text" name="txt_modelo" id="modelo" placeholder="Modelo do produto" > <br>
            </label>
            <small>Tamanho do produto</small> <br>
            <label>
                <input type="text" name="txt_tamanho" id="tamanho" placeholder="Tamanho do produto"  > <br>
            </label>
            <small>Data da fabricação</small> <br>
            <label>
                <input type="date" name="txt_data_fabri" id="data_fabri" placeholder="Data da fabricação"  > <br>
            </label>
            <small>Data do vencimento</small> <br>
            <label>
                <input type="date" name="txt_data_venc" id="data_venci" placeholder="Data do vencimento"  > <br>
            </label>
            <small>Quantidade em estoque</small> <br>
            <label>
                <input type="number" name="txt_quantidade" id="quantidade" placeholder="Quantidade em estoque"  > <br>
            </label>

            <button type="submit" class="btn btn-dark" value="Salvar"> Enviar</button>
            <button type="reset" class="btn btn-dark" value="Limpar">Limpar</button>

            <br> <br>

           
        </form>
 
    </div>
</body>
</html>