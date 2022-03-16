<?php

     class Painel {

        //Define se o usuário está logado ou não
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        // Encerra a sessão e redireciona para a pagina principal
        public static function loggout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH);
        }

        public static function redirect($url){
            echo '<script>location.href="'.$url.'"</script>';
            die();

        }
    }

?>