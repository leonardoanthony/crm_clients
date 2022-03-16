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

        public static function listarClientesPorCategoria($categoria){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_control.clientes` WHERE `id_categoria` = ? ");
            $sql->execute(array($categoria));
            $clientes = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        }


    }

?>