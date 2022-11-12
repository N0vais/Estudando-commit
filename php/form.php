<?php
    class Form{
        public static function alert($tipo,$mensagem){
            if($tipo == 'erro'){
                echo '<div style=" background:black; color:red; font-size:25px;" >'.$mensagem.'</div>';
                return false;
            }else if($tipo == 'sucesso'){
                echo '<div style=" background:black; color:green; font-size:25px;" >'.$mensagem.'</div>';
                return true;
            }
        }
        
        public static function cadastrar($email, $nome, $cpf_cnpj, $phone, $senha){
        $sql = Mysql::conectar()->prepare("INSERT INTO `usuarios`VALUES (null,?,?,?,?,?,Now())");
        $sql->execute(array($email,$nome,$cpf_cnpj,$phone,$senha));
        }
    }
