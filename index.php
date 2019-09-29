<?php
class prodooct
{
 
var $header;
var $displ;      
var  $opis;
var  $prase;

function construct($header, $displ, $opis, $prase){
    $this->header=$header;
    $this->displ=$displ;
    $this->opis=$opis;
    $this->prase=$prase;
    }

function disply()
{
     echo '<div><header>'.$this->$header.'</header><div>'.$this->$displ.'</div><p>'.$this->$opis.'</p><footer>'.$this->$prase.'</footer></div>';
       
}

}

$a = new  prodooct;
$a-> construct('Ваза','PIC','Ваза фарфоровая 150см','$10');
$a->disply();



?>