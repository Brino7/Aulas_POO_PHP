<?php

/**
 * Description of Caneta
 *
 * @author brino
 */
class Caneta {
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    public function Caneta($m,$c,$p) {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

        public function tampar(){
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }


}
