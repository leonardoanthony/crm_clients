<?php 

    class Cliente {

        public static function cadastrarCliente($nome, $categoria){
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_control.clientes` VALUES (null,?,?)");
            if($sql->execute(array($nome, $categoria))){
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

        public static function listarClientes(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_control.clientes`");
            $sql->execute();
            $clientes = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        }

        public static function selecionarCliente($id){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_control.clientes` WHERE `id` = ?");
            $sql->execute(array($id));
            $cliente = $sql->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        }


        public static function atualizarCliente($nome,$categoria, $id){
            $sql = MySql::conectar()->prepare("UPDATE `tb_control.clientes` SET `nome_cliente` = ? , `id_categoria` = ?  WHERE `id` = ?");
            if($sql->execute(array($nome,$categoria, $id))){
                Painel::alert('sucesso', 'Cliente atualizado com sucesso');
            }else{
                Painel::alert('erro', 'Erro ao atualizar cliente');
            }
        }


    }

?>