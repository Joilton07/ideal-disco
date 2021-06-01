<?php
// Navegador -> index.php -> ConfRotas -> Controller -> Models -> (caminho reverso)

session_start();
if(empty($_SESSION["carCount"])){
    $_SESSION['carrinho'] = array();
    $_SESSION["carCount"] = 0;
    $_SESSION["carSmart"] = 0;
    $_SESSION["carViol"] = 0;

}

require_once "vendor/autoload.php";
require_once "app/config/constantes.php";
require_once "app/config/rotas.php";
require_once "app/config/dadosProd.php";

use App\ConfRotas;

new ConfRotas($rotas); // $rotas está em rotas.php