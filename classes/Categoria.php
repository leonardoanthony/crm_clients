<?php 

    class Categoria {

        public static $cores = [
            '0' => 'table-danger',
            '1' => 'table-primary',
            '2' => 'table-warning',
        ];

        public static function cadastrarCategoria($categoria){
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_control.categorias` VALUES (null,?)");
            if($sql->execute(array($categoria))){
                Painel::alert('sucesso', 'Categoria "'.$categoria.'" cadastrada com sucesso');
            }else{
                Painel::alert('erro', 'Erro ao cadastrar categoria');
            }
        }

        public static function listarCategorias(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_control.categorias`");
            $sql->execute();
            $categorias = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $categorias;
        }

        public static function corCategoria($categoria){
            return self::$cores[$categoria];
        }

        public static function selecionarCategoria($id){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_control.categorias` WHERE `id` = ?");
            $sql->execute(array($id));
            $categoria = $sql->fetch(PDO::FETCH_ASSOC);
            return $categoria;
        }


        public static function atualizarCategoria($categoria, $id){
            $sql = MySql::conectar()->prepare("UPDATE `tb_control.categorias` SET `nome_categoria` = ? WHERE `id` = ?");
            if($sql->execute(array($categoria, $id))){
                Painel::alert('sucesso', 'Categoria atualizada com sucesso');
            }else{
                Painel::alert('erro', 'Erro ao atualizar Categoria');
            }
        }


    }

?>