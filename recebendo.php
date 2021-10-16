<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpeg">
    <title>Document</title>
</head>
<body>
    <?php 
            include('conexao_banco_mysql/conexao.php');

            // Recebendo dados digitados da página cadastro_aluno.php (Via POST)
                $nome_dg = $_POST['txt_nome'];
                $fabri_dg = $_POST['txt_fabri'];
                $modelo_dg = $_POST['txt_modelo'];
                $tamanho_dg = $_POST['txt_tamanho'];
                $data_fabri_dg = $_POST['txt_data_fabri'];
                $txt_data_venc_dg = $_POST['txt_data_venc'];
                $txt_quant_dg = $_POST['txt_quantidade'];
                

                $script_sql2 = "insert into bd_pw1 (nome_podt, nome_fabri, modelo, tamanho, dat_fabi,	data_venc,	quant_estoq)

                values

                ('$nome_dg', '$fabri_dg', '$modelo_dg ', '$tamanho_dg', '$data_fabri_dg ', $txt_data_venc_dg, '$txt_quant_dg');";

                
            if (mysqli_query($conexao, $script_sql2)) {

                echo ("<body bgcolor='black' text='white'> <h1> cadastrado com sucesso... </h1> ");
                echo "  <meta http-equiv=refresh content=2;url=index.php> ";
                # code...
            }
            else{
                echo("<body bgcolor='green' text='white' ");

                echo ("<h1 align='center'> Falha no cadastro do aluno </h1> <hr> <p> ");

                echo ("<b> Descriçao do erro : </b> Houve um erro na gravação de dados ta tabela.");

                echo (" <h2> <a herf='cadastro_alunos.php'>Voltar </a> </h2>");
            }        
    ?>
</body>
</html>