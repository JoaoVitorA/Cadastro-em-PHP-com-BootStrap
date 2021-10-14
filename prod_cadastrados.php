
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrep/css_js/css/style.css">
</head>
<body style="background-color:pink;">

<?php 
         include('conexao_banco_mysql/conexao.php');

         $consulta = "SELECT * FROM bd_pw1";
          
           $txt = $conexao ->query ($consulta)  or die($conexao->error);
        ?>
  <header > 
        <nav>
        <a href="index.php" class="btn btn-dark" >Voltar</a>
        </nav> <br>
        <h1 style="text-align: center;"> Teste de conexão com o Banco de Dados</h1> <hr>    
    </header>
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
                 <?php while($dado = $txt->fetch_array()) {   ?>
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