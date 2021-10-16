<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <title> Cadastro de produtos </title>  
</head> 
<style>
*{
    padding: 0;
    margin: 0;
}
body{
    background-image: url("img/img_index.jpg") ;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
#header{
    border: solid 2px;
    height: 150px;
    background-color: rgb(51, 45, 75);
    width: 100%;
}
nav{
    margin-top: 5px;
    margin-left: 5px
}
a{
    margin: 5px;
}
#container{
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 100px;
}
#form{
    background-color: #d1626280;
    padding: 30px;
    border: solid;
    border-radius: 4%;
    box-shadow: 3px 3px 1px 1px rgb(87, 83, 83)
}
h1{
    text-align: center;
    margin-bottom: 20px;
    color: #272262;
}
.input{
    width: 400px;
    padding: 5px 5px;
    display: inline-block;
    border: 0;
    border-bottom: 2px solid #272262;
    background-color: transparent;
    outline: none;
}
input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
}
.lblFloat{
    position: relative;
    padding-top: 13px;
    margin-top: 5%;
    margin-bottom: 5%;
}
.lblFloat input:focus{
    border-bottom: 2px solid #3c53d6;
}
.lblFloat label{
    color: #272262;
    pointer-events: none;
    position: absolute;
    top: 0;
    left: 0;
    margin-top: 13px;
    transition: all .3s ease-out;
}
.lblFloat input:focus + label,
.lblFloat input:valid + label{
    font-size: 13px;
    margin-top: 0;
    color: #000;
}
.center{
    display: flex;
    margin: auto;
    justify-content: space-around;
    width: 180px;
    margin-top: 40px
}
#btn1{
    width: 80px;
}
#btn2{
    width: 80px;
}
</style>
<body>
    <header>
        <div id="header">
            <nav>
                <a href="prod_cadastrados.php" class="btn btn-dark"> Produtos Cadastrados </a>
                <a href="conexao_banco_mysql/teste_de_conexao.php" class="btn btn-dark"> Teste de conexão  </a>
                <a href="login.php" class="btn btn-dark"> Login </a>
            </nav>
            <h1 style="color: #9c97d4;"> Cadastro de produto </h1>
        </div> 
    </header>
    <form method="POST" action="recebendo.php">
        <div id="container">
            <div id="form">
                <h1> Cadastrar </h1>

                <div class="lblFloat">
                <input type="text" name="txt_nome" class="input" placeholder="" required>
                    <label class="lbl"> Nome do produto </label>
                </div>

                <div class="lblFloat">
                <input type="text" name="txt_fabri" class="input" placeholder="" required>
                    <label class="lbl"> Nome do fabricante </label>
                </div>

                <div class="lblFloat">
                <input type="text" name="txt_modelo" class="input" placeholder="" required>
                    <label class="lbl"> Modelo do produto </label>
                </div>

                <div class="lblFloat">
                <input type="text" name="txt_tamanho" class="input" placeholder="" required>
                    <label class="lbl"> Tamanho do produto </label>
                </div>

                <div class="lblFloat">
                <input type="date" name="txt_data_fabri" class="input" placeholder="" required>
                    <label class="lbl"> Data da fabricação </label>
                </div>

                <div class="lblFloat">
                <input type="date" name="txt_data_venc" class="input" placeholder="" required id="date">
                    <label class="lbl"> Data do vencimento </label>
                </div>

                <div class="lblFloat">
                <input type="text" name="txt_quantidade" class="input" placeholder="" required id="date">
                    <label class="lbl"> Quantidade em estoque </label>
                </div>
                
                <div class="center">
                    <button type="submit" class="btn btn-dark" value="Salvar" id="btn1"> Enviar </button>
                    <button type="reset" class="btn btn-dark" value="Limpar" id="btn2"> Limpar </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
