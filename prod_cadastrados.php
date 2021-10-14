<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <title> Produtos cadastrados </title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
}
#header{
    border: solid 2px;
    height: 150px;
    background-color: rgb(51, 45, 75);
}
body{
    background-image: url("img/img_prod.png") ;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
</style>

<body>
    <header>
        <div id="header">
            <nav>
                <a href="index.php" class="btn btn-dark" style="margin-top: 5px; margin-left:5px;"> Voltar </a>
            </nav>
        </div>
    </header>

    <?php 
            include('conexao_banco_mysql/conexao.php');

            $consulta = "SELECT * FROM bd_pw1";
            
            $txt = $conexao -> query ($consulta)  or die($conexao->error);
            ?>
            <br>
            <table border="1">
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
</body>
</html>