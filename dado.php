<?php
class Dado{
    private $minNumDado = 0;
    private $maxNumDado = 12;

    public function __construct(int $minNumDado, int $maxNumDado){
        $this->minNumDado = $minNumDado;
        $this->maxNumDado = $maxNumDado;
    }

    public function setMinNumDado($minNumDado){
        $this->minNumDado = $minNumDado;
    }

    public function getMinNumDado(){
        return $this->minNumDado;
    }

    public function setMaxNumDado($maxNumDado){
        $this->maxNumDado = $maxNumDado;
    }

    public function getMaxNumDado(){
        return $this->maxNumDado;
    }

    public function tirarDado(){
        return rand($this->minNumDado, $this->maxNumDado);
    }
}
?>