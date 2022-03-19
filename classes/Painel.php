<?php

     class Painel {

        public static $perfil = [
            '1' => 'VISUALIZADOR',
            '2' => 'OPERADOR'
        ];


        // Define se o usuário está logado ou não
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        // Encerra a sessão e redireciona para a pagina principal
        public static function loggout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH);
        }

        // Redireciona para outra página
        public static function redirect($url){
            echo '<script>location.href="'.$url.'"</script>';
            die();
        }

        // Carrega outras páginas mantendo header/footer
        public static function loadPage(){
            if (isset($_GET['url'])) {
                $url = explode('/', $_GET['url']);
                if (file_exists('pages/' . $url[0] . '.php')) {
                    include('pages/' . $url[0] . '.php');
                } else {
                    header('Location: ' . INCLUDE_PATH);
                }
            } else {
                include('pages/home.php');
            }
        }

        public static function alert($type, $mensagem){
            if($type == 'sucesso'){
                echo '<div class="alert sucesso">'.$mensagem.'</div>';
            }else if($type == 'erro'){
                echo '<div class="alert erro">'.$mensagem.'</div>';
            }
        }

        public static function delete($tabela,$id){
            $sql = MySql::conectar()->prepare("DELETE FROM `$tabela` WHERE id = $id");
            $sql->execute();
        }

        public static function permisssaoMenu($perfil){
            if($perfil == 1){
                echo 'style="display: none;"';
            }
        }

        public static function permissaoPagina($perfil){
            if($perfil == 1){
                return false;
            }else{
                return true;
            }
        }
    }

?>