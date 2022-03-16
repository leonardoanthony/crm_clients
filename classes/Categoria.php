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


    }

?>