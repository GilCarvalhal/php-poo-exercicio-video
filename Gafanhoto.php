<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa
{
    // Atributos
    private string $login;
    private int $totAssistindo;

    // Construtor
    public function Gafanhoto($nome, $idade, $sexo, $login)
    {
        // parent = superclasse. Puxa os atributos que o programador seleciona como parâmetro da classe Pessoa para o construtor.
        parent::Pessoa($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }

    // Getters & Setters
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getTotAssistindo()
    {
        return $this->totAssistindo;
    }

    public function setTotAssistindo($totAssistindo)
    {
        $this->totAssistindo = $totAssistindo;
    }

    // Método
    public function viuMaisUm()
    {
    }
}
