<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imgens/robox.png">
    <link rel="stylesheet" href="./css/inscreva.css">
    <link rel="stylesheet" href="./css/estilo_validacao.css">
    <title>Dev Mirim/Sigin up</title>
</head>

<body>
    <header>
        <div class="caixa">
            <li class="error-validation template"></li>
        </div>
    </header>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Dev Mirim<img src=".//imgens/robox.png" alt="Tecnologia">
                </a>
            </div>
            <!--"main_list" id="mainListDiv"-->
            <div id="mainListDiv" class="main-list-principal">
                <ul class="navlinks">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="index/login.html">login</a></li>
                </ul>
            </div>
            <div class="media_button">
                <button class="main_media_button" id="mediaButton">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <div id="main-container">
        <h1 class="pisca">Bem Vindo!!<br>Faça seu cadastro</h1>

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
                <label for="cpf/cnpj">CPF/CNPJ</label>
                <input type="text" name="cpf/cnpj" id="cpfcnpj" placeholder="Digite sómente Numeros !"
                    autocomplete="off" maxlength="14" onkeyup="mascara_cpf()" data-required>
            </div>
            <div class="half-box">
                <label for="telefone">telefone</label>
                <input type="tel" name="phone" id="telefone" placeholder="Digite seu numero de telefone!" data-required
                    maxlength="16" onkeyup="mascara_telefone()">
            </div>
            <div class="half-box spacing">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Digite uma senha" minlength="8"
                    data-required data-password-validate>
                <span><img src=".//imgens/olho.png" alt="" onclick="toggle()"></span>
            </div>
            <div class="half-box">
                <label for="passconfirmation">Confirma senha</label>
                <input type="password" name="passconfirmation" id="passconfirmation" placeholder="Confirme a senha."
                    data-equal="password">
            </div>
            <div class="full-box">
                <input type="checkbox" name="agreement" id="agreement" data-checkbox>
                <label for="agreement" id="agreement-label">Eu li e aceito os <a href="./index/termos.html"
                        target="_blank"> termos de uso!!</a></label>
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

    <footer id="rodape" class="rodape">
        <h2>Relatos de membros do nossos cursos.</h2>
        <blockquote>Segundo nossos ex alunos, foram de grade importâcia os encinamentos e atividades que este curso tem
            preparado, para se tornar uns dos mais requisitados por empressas parceiras, por que voce inicia o curso ja
            sendo preparado para o mercado de trabalho. </blockquote>
        <h2>Venha fazer parte, e se tornar um dos mais requisitados do mercado.</h2>
        <p>A capacidade de aprendizado esta em você.
        </p>
        <h5>Para mais inforamções podemos,atendelos <br>atravez dos telefones e email a seguir <br>e tambem atravéz das
            redes sociais. </h5>
        <img src=".//imgens/robox.png" alt="logo Dev Mirim" class="imagem_robox">
        <p>Tel-1: (11)-9494-9494<br>Tel-2: (11)-9595-9595<br><a href="#" class="email">E-mail: Devmirim@studo.edu.br</a></p>

        <a href="#"><img src="imgens/instagram.png" alt="logo instagram"></a>
        <a href="#"><img src="imgens/twitter.png" alt="logo twiter"></a>
        <a href="#"><img src="imgens/whatsapp.png" alt="logo Whatsapp"></a>
        <a href="#"><img src="imgens/youtube.png" alt="logo yuotube"></a>
        <p>Dev Mirim &copy; todos os direitos reservados - 2022</p>


    </footer>
    <!--esse script menu.js faz a estilizaçao do nav ao diminuir a tela-->
    <script src="menu.js"></script>
    <!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
    <script src="./javascript/script.js"></script>
    
    <script src="./javascript/validacpf.js"></script>

</body>

</html>