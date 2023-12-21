<?php
require_once "Video.php";
require_once "Gafanhoto.php";
class Visualizacao
{
    // Atributos
    private $espectador;
    private $filme;

    // Construtor
    public function Visualizacao($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistindo($this->espectador->getTotAssistindo() + 1);
    }

    // Getters & Setters
    public function getEspectador()
    {
        return $this->espectador;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
    }

    // Métodos
    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($porcentagem)
    {
        $novaNota = 0;
        if ($porcentagem <= 20) {
            $novaNota = 3;
        } elseif ($porcentagem <= 50) {
            $novaNota = 5;
        } elseif ($porcentagem <= 90) {
            $novaNota = 8;
        } else {
            $novaNota = 10;
        }
        $this->filme->setAvaliacao($novaNota);
    }
}
