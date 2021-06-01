<?php
    namespace App\Controllers;

    use App\Controllers\ControladorCore;
    use App\Models\Produto;

    class Produtos extends ControladorCore {

        public function __construct() {
            parent::__construct();
        }

        public function prodViolao(){

            $violao = new Produto(
                "Violão",
                "Sumidouro de palheta Marca X 1889 EXCLUSIVO! Só tem esse, compre logo que vai acabar!",
                849.99,
                "/assets/img/guitar.jpg",
                "/produto/violao"
            );
    
            $this->addTituloPagina("Produto Violão");
            $this->addDadosPagina(
                "violao",
                $violao
            );
    
            $_SESSION["carrinho"][] = serialize($violao);
    
    
            $_SESSION["carCount"] ++;
    
            $this->carregarPagina("v_produto");
        }
        public function prodSmartphone(){
            
            $smartphone = new Produto(
                "Smartphone",
                "Smartphone de ultima geração. Compra logo se não vai acabar!",
                999.99,
                "/assets/img/smartphone.jpg",
                "/produto/smartphone"
            );
    
            $this->addTituloPagina("Produto Smartphone");
            $this->addDadosPagina(
                "smartphone",
                $smartphone
            );

            // echo $_SERVER["REQUEST_URI"];
            $dados = unserialize(PROD);
    
            $_SESSION["carCount"]++;
    
            
    
            $this->carregarPagina("v_produto");
        }
    
        public function produtos(){

            $urlP = $_SERVER["REQUEST_URI"];
            $segP = explode("/", $urlP);

            if($segP[6] == "smartphone"){
                
            }else {
                
            }
            
        }
        
    }
    