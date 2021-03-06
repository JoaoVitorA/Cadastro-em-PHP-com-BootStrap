<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpeg">
    <link rel="stylesheet" href="bootstrep/css/bootstrap.min.css">
    <title>Login</title>
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
    background-image: url("img/img_paisagem.jpg") ;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
#container{
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 100px;
}
#form{
    background-color: #8b2b2b80;
    padding: 30px;
    border: solid;
    border-radius: 4%;
    box-shadow: 3px 3px 1px 1px rgb(87, 83, 83);
    
}
h1{
    text-align: center;
    margin-bottom: 20px;
    color: #272262;
}
.input{
    width: 100%;
    padding: 5px 5px;
    display: inline-block;
    border: 0;
    border-bottom: 2px solid #272262;
    background-color: transparent;
    outline: none;
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
    justify-content: center;
}
hr{
    width: 60%;
    margin-top: 5%;
    border-color: #3c53d6;
}
p{
    color: #272262;
    font-size: 14pt;
    text-align: center;
}
#login ul{
    padding: 0px;
    margin: 0px;
    list-style:none;

}
#login ul li { 
    display: inline; 
}
#menu ul li a {
    padding: 5px;
    display: inline-block;
    text-decoration: none;
}
img{
    width: 30px;
    height: 30px;
    border-radius: 30px;
    transition: all 1s ease;
}
img:hover{
   height: 70px;
   width: 70px;
   border-radius: 70px;
   transition: all .7s ease;
  }
</style>

<body>
    <header>
        <div id="header">
            <nav>
                <a href="index.php" class="btn btn-dark" style="margin-top: 5px; margin-left:5px;"> Voltar </a>
            </nav>
            <h1 style="color: #9c97d4;"> Login </h1>
        </div>
    </header>
    <form action="login.php" method="post">
        <div id="container">
            <div id="form">
                <h1> Entrar </h1>

                <div class="lblFloat">
                    <input type="text" name="txt_usuario" class="input" placeholder="" required>
                    <label class="lbl"> Usu??rio </label>
                </div>

                <div class="lblFloat">
                    <input type="password" name="txt_senha" class="input" placeholder="" required>
                    <label class="lbl"> Senha </label>
                </div>

                <div class="center">
                    <button type="button" class="btn btn-outline-dark" style="margin-top: 15px;"> Entrar </button>
                </div>

                <div class="center">
                    <hr>
                </div>

                <div>
                    <p>
                        Ou entre com:
                    </p>
                </div>

                <div style="text-align: center;"> 
                    <nav id="login">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com" target="blank">
                                    <img src="img/img_face.jpg">
                                </a>
                            </li>
                            <li>                        
                                <a href="https://www.instagram.com" target="blank">
                                    <img src="img/img_insta.jpg" class="rounded-circle">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/i/flow/login" target="blank">
                                    <img src="img/img_twitter.png" class="rounded-circle">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="center">
                    <hr>
                </div>

                <div>
                    <p>
                        N??o tem uma conta? 
                        <a href="" id="cad"> Cadastre-se </a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>