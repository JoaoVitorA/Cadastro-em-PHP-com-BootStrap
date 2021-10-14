<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="10;url=teste_de_conexao.php"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de conexão com Mysql </title>
    
    <link rel="stylesheet" href="../bootstrep/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrep/css_js/css/style.css">
        
</head>
<body style="background-color: #50C7C7;"  >
    <header > 
        <nav>
        <a href="../index.php" class="btn btn-info" >Voltar</a>
        </nav> <br>
        <h1 style="text-align: center;"> Teste de conexão com o Banco de Dados</h1> <hr>    
    </header>
<div  >
    <?php    
            include ('conexao.php');
            //teste de conexão com banco de dados

            if($conxao = mysqli_connect($local_servidor, $usuario, $senha))
            {
                echo " <div style='text-align: center;'> <button class='btn btn-success'>  Servidor de Banco de Dados conectado com sucesso </button> <br> <br/> </div>"; 
            }
            else 
                echo "<div style='text-align: center;'> <button class='btn btn-success'> Servidor não encontrado  </button> <br/> </div>" ;



                if($conxao = mysqli_connect ($local_servidor, $usuario, $senha,  $bd_procurado))
                {
                    echo "<div style='text-align: center;'> <button class='btn btn-success'> Banco de Dados conectado com sucesso </button> <br/> </div>
                  "; 
                }
                else 
                    echo "<div style='text-align: center;'> <button class='btn btn-success'> Banco de Dados desconectado </button>  <br/> </div>" ;
        ?>
            
  
            </div>
</body>
</html>