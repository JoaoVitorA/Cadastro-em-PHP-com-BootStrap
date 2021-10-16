<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="10;url=teste_de_conexao.php"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrep/css/bootstrap.min.css">    
    <title>Teste de conexão com Mysql </title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
}
#header{
    border: solid black 2px;
    height: 150px;
    background-color: rgb(51, 45, 75);
    color: #fff
}
body{
    background-image: url("../img/img_bd.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
h1{
    text-align: center;
    margin-bottom: 20px;
    color: #9c97d4;
}
#corpo{
    margin-top: 150px;
}
.btn_div{
    text-align: center;
    padding-top: 30px;

}
</style>

<body>
    <header>
        <div id="header">
            <nav>
                <a href="../index.php" class="btn btn-dark" style="margin-top: 5px; margin-left:5px;"> Voltar </a>
            </nav> 
            <h1> Teste de conexão com o Banco de Dados</h1>
        </div>
    </header>
    <div id="corpo">
        <?php    
            include ('conexao.php');
            //teste de conexão com banco de dados

            if($conxao = mysqli_connect($local_servidor, $usuario, $senha))
            {
                echo " <div class='btn_div'> <button class='btn btn-success'>  Servidor de Banco de Dados conectado com sucesso </button> </div>"; 
            }
            else 
                echo "<div class='btn_div'> <button class='btn btn-success'> Servidor não encontrado  </button> </div>" ;

                if($conxao = mysqli_connect ($local_servidor, $usuario, $senha,  $bd_procurado))
                {
                    echo "<div class='btn_div'> <button class='btn btn-success'> Banco de Dados conectado com sucesso </button> </div>"; 
                }
                else 
                    echo "<div class='btn_div'> <button class='btn btn-success'> Banco de Dados desconectado </button> </div>";
        ?>
    </div>
</body>
</html>