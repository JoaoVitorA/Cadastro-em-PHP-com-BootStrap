<?php include('conexao_banco_mysql/conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpeg">
    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <title> Produtos cadastrados </title>
</head>

<style>

    *{
        margin: 0;
        padding: 0;
        font-family: cursive;
    }
    #header{
        border: solid 2px;
        height: 150px;
        background-color: rgb(51, 45, 75);
    }
    body{
        background-image: url("img/img_prod.jpg") ;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    h1{
    text-align: center;
    margin-bottom: 20px;
    color: #9c97d4;
}
    #container{
        margin: 5%;
        margin-top: 25%; 
    }
    table tr{
        padding: 30px;
        border: solid 1px #272262;
        border-radius: 1%;
        box-shadow: 3px 3px 1px 1px rgb(87, 83, 83)
    }
    
</style>
<body>
    <header>
        <div id="header">
            <nav>
                <a href="index.php" class="btn btn-dark" style="margin-top: 5px; margin-left:5px;"> Voltar </a>
            </nav>
            <h1>Produtos cadastrados</h1>
        </div>
    </header>

    <div id="container">

        <?php 
                
            $consulta = "SELECT * FROM bd_pw1";
                
            $txt = $conexao -> query ($consulta)  or die($conexao->error);
        ?>
        <table class="table table-striped table-dark">
            <tr>
                <td>        
                    Nome do Produto
                </td>
                <td>        
                    Nome do Fabricante
                </td>
                <td>        
                    Modelo do Produto
                </td>
                <td>        
                    Tamanho do Produto
                </td>
                <td>        
                    Data de Fabricação
                </td>
                <td>        
                    Data do Vencimento
                </td>
                <td>        
                    Quantidade do Estoque
                </td>
            </tr>

            <?php while($dado = $txt->fetch_array()) {  ?>

                <tr>
                    <td>
                        <?php echo   $dado ['nome_podt']   ; ?>
                    </td>
                    <td>
                        <?php echo   $dado ['nome_fabri']   ; ?>
                    </td>

                    <td>
                        <?php echo   $dado ['modelo']   ; ?>
                    </td>

                    <td>
                        <?php echo   $dado ['tamanho']   ; ?>
                    </td>


                    <td>
                        <?php echo   $dado ['dat_fabi']   ; ?>
                    </td>

                    <td>
                        <?php echo   $dado ['data_venc']   ; ?>
                    </td>

                    <td>
                        <?php echo   $dado ['quant_estoq']   ; ?>
                    </td>
                </tr>

            <?php } ?>

        </table>
    </div>
</body>
</html>