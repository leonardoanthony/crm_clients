<?php

     class Painel {

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
                    header('Location: ' . INCLUDE_PATH_PAINEL);
                }
            } else {
                include('pages/home.php');
            }
        }
    }

?>