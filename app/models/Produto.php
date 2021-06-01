<?php
namespace App\Models;

class Produto {

    private string $nome;
    private string $description;
    private float $preco;
    private string $img;
    private string $url;

    
    public function __construct($nome, $description,$preco, $img, $url) {
        $this->nome = $nome;
        $this->description = $description;
        $this->preco = $preco;
        $this->img = $img;
        $this->url = $url;
    }
    


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get the value of cont
     */ 
    public function getCont()
    {
        return $this->cont;
    }

    /**
     * Set the value of cont
     *
     * @return  self
     */ 
    public function setCont($cont)
    {
        $this->cont = $cont;

        return $this;
    }
}