<?php

/**
 * Description of Caneta
 *
 * @author brino
 */
class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada == TRUE) {
            echo "<p>OPS! não posso rabiscar. :(</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = FALSE;
    }

}
