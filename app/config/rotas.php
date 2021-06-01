<?php

$rotas[""] = array(
    "http" => "GET",
    "rota" => "/",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "index"
);
$rotas["produto/violao"] = array(
    "http" => "GET",
    "rota" => "/produto/violao",
    "controller" => "App\\Controllers\\Produtos",
    "funcao" => "prodViolao"
);

$rotas["produto/smartphone"] = array(
    "http" => "GET",
    "rota" => "/produto/smartphone",
    "controller" => "App\\Controllers\\Produtos",
    "funcao" => "prodSmartphone"
);

$rotas["produto"] = array(
    "http" => "GET",
    "rota" => "/produto",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "produto"
);

$rotas["carrinho"] = array(
    "http" => "GET",
    "rota" => "/carrinho",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "carrinho"
);

$rotas["erro404"] = array(
    "http" => "GET",
    "rota" => "/404",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "erro404"
);

$rotas["login"] = array(
    "http" => "POST",
    "rota" => "/login",
    "controller" => "App\\Controllers\\Autenticacao",
    "funcao" => "entrar"
);

$rotas["logout"] = array(
    "http" => "POST",
    "rota" => "/logout",
    "controller" => "App\\Controllers\\Autenticacao",
    "funcao" => "sair"
);