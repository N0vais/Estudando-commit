<?php
  include_once('./conexao.php');
  include_once('.//mysql.php');
  include_once('.//form.php');
  
  Mysql::conectar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="..//imgens/robox.png">
    <link rel="stylesheet" href="..//menu.css">
    <link rel="stylesheet" href="..//menukey.css">
    <link rel="stylesheet" href="../css/inscreva.css">
    <lin href="//https://fonts.googleapis.com/css?family=Quicksand:400,500,700" />
    <title>Dev Mirim/login</title>
</head>
<body>
    
    <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="#">Dev Mirim<img src="..//imgens/robox.png" alt="Tecnologia">
                    </a>
                </div><!--"main_list" id="mainListDiv"-->
                <div id="mainListDiv" class="main-list-principal">
                    <ul class="navlinks">
                        <li><a href="..//index.html">Home</a></li>
                        <li><a href="./login.php">Cadastro</a></li>
                    </ul>
                </div>
                <div class="media_button">
                    <button class="main_media_button" id="mediaButton" >
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </nav>

        <section class="login">
            <div id="main-container">
                <h1 class="pisca">Bem Vindo!!<br>Entre com seu login</h1>
        
                <form action="./php/processa.php" method="Post" id="register-form">
        
                    <div class="full-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email" data-min-length="3"
                            data-required data-email-validate>
                    </div>
                    <div class="full-box">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" placeholder="Digite seu nome e sobrenome !" data-max-length="30"
                            data-only-letters>
                    </div>
                    <div class="half-box spacing">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite uma senha" minlength="8"
                            data-required data-password-validate>
                        <span><img src="..//imgens/olho.png" alt="" onclick="toggle()"></span>
                    </div>
                    <div class="half-box spacing">
                        <?php
  
                            if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
                            $email = $_POST['email'];
                            $nome = $_POST['name'];
                            $cpf_cnpj = $_POST ['cpf/cnpj'];
                            $phone = $_POST['phone'];
                            $senha = $_POST['password'];
        
                            if($nome == ''){
                                Form::alert('erro','o nome esta vazio');
                            }else if($email == ''){
                                Form::alert('erro','o email esta vazio');
                            }else if($senha == ''){
                                Form::alert('erro', 'a senha ficou vazia');
                            }else if($cpf_cnpj == ''){
                                Form::alert('erro', 'o cpf/cnpj ficou vazia');
                            }else if($phone == ''){
                                Form::alert('erro', 'o telefone ficou vazia');
                            }else {
                                Form::cadastrar($email, $nome, $cpf_cnpj, $phone, $senha);
                                Form::alert('sucesso','usuario ' .$nome. ' caregando....!');
                                }
                            }

                        ?>

                    </div>
                    <div class="full-box">
                        <input type="submit" name="acao" id="btn-submit" value="Enviar">
                    </div>
                    <div class="full-box">
                        <input type="reset" id="btn-reset" value="Limpa tela">
                    </div>
        
                    <div> <input type="hidden" name="form" value="f_form"></div>
                </form>
            </div>
        </section>

        <footer id="rodape" class="rodape">
            
            <h2>Venha fazer parte, e se tornar um dos mais requisitados do mercado.</h2>
            <p>A capacidade de aprendizado esta em você.
            </p>
            <h5>Para mais inforamções podemos,atendelos <br>atravez dos telefones e email a seguir <br>e tambem atravéz das
                redes sociais. </h5>
            <img src="..//imgens/robox.png" alt="logo Dev Mirim" class="imagem_robox">
            <p>Tel-1: (11)-9494-9494<br>Tel-2: (11)-9595-9595<br><a href="#" class="email">E-mail: Devmirim@studo.edu.br</a></p>
    
            <a href="#"><img src="../imgens/instagram.png" alt="logo instagram"></a>
            <a href="#"><img src="../imgens/twitter.png" alt="logo twiter"></a>
            <a href="#"><img src="../imgens/whatsapp.png" alt="logo Whatsapp"></a>
            <a href="#"><img src="../imgens/youtube.png" alt="logo yuotube"></a>
            <p>Dev Mirim &copy; todos os direitos reservados - 2022</p>
    
    
        </footer>
        <!--esse script menu.js faz a estilizaçao do nav ao diminuir a tela-->
        <script src="menu.js"></script>
        <!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
        <script src="../javascript/script.js"></script>
        
        <script src="../javascript/validacpf.js"></script>
   
</body>
</html>