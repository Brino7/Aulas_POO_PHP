<?php

/**
 * Description of Caneta
 *
 * @author brino
 */
class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada == TRUE) {
            echo "<p>OPS! não posso rabiscar. :(</p>";
        }else{
            
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = FALSE;
    }

}
