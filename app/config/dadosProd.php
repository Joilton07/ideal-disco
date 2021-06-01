<?php

    use App\Models\Produto;

    $violao = new Produto(
        "Violão",
        "Sumidouro de palheta Marca X 1889 EXCLUSIVO! Só tem esse, compre logo que vai acabar!",
        849.99,
        "/assets/img/guitar.jpg",
        "/produto/violao"
    );

    $smartphone = new Produto(
        "Smartphone",
        "Smartphone de ultima geração. Compra logo se não vai acabar!",
        999.99,
        "/assets/img/smartphone.jpg",
        "/produto/smartphone"
    );
    
    define("PROD", serialize(array($violao, $smartphone)));