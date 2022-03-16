<?php 

    class Cliente {

        public static function cadastrarCliente($nome, $categoria, $perfil){
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_control.clientes` VALUES (null,?,?,?)");
            if($sql->execute(array($nome, $categoria, $perfil))){
                Painel::alert('sucesso', 'Cliente cadastrado com sucesso');
            }else{
                Painel::alert('erro', 'Erro ao cadastrar cliente');
            }
        }


    }

?>