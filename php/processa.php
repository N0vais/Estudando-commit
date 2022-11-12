<?php
    include_once('./conexao.php');
    include_once('.//mysql.php');
    include_once('.//form.php');
    
    Mysql::conectar();
        

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
            Form::alert('sucesso','usuario ' .$nome. ' cadastrado com sucesso!');
        }
    }
    

    ?>

