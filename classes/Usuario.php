<?php 

    class Usuario {

        public static function cadastrarUsuario($nome, $login, $senha, $perfil){
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null,?,?,?,?)");
            if($sql->execute(array($nome, $login, $senha, $perfil))){
                Painel::alert('sucesso', 'Usuário cadastrado com sucesso');
            }else{
                Painel::alert('erro', 'Erro ao cadastrar usuário');
            }
        }


    }

?>