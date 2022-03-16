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

        public static function listarUsuarios(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
            $sql->execute();
            $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        }

        public static function selecionarUsuario($id){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE `id` = ?");
            $sql->execute(array($id));
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        }


        public static function atualizarUsuario($nome,$user,$password, $perfil, $id){
            $sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuarios` SET `nome_usuario` = ? , `login_usuario` = ? , `senha_usuario` = ?,  `perfil` = ? WHERE `id` = ?");
            if($sql->execute(array($nome,$user,$password,$perfil,$id))){
                Painel::alert('sucesso', 'Usuário atualizado com sucesso');
            }else{
                Painel::alert('erro', 'Erro ao atualizar usuário');
            }
        }


    }

?>