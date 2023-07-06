<?php


// - Dato il seguente codice di partenza:
//     class Car {
//       private $num_telaio; 
//     }
    
//     class Fiat extends Car {
//       protected $license;
//       protected $color;
//     }


// - Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severità che ritieni più opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina è Opel, con targa ND 123 OJ e numero di Telaio 1234“.

// Tips and Tricks
// Per sapere se l’esercizio e' corretto, stampa in console il var_dump dell’oggetto:

//     var_damp($car);

// L’output dovrà avere solamente 3 attributi:

//     object(MyCar)#1 (3) {
//       ["num_telaio":"Car":private]=>
//       string(6) "183784"
//     ["nome":protected]=>
//       string(4) "Opel"
//     ["targa":protected]=>
//       string(8) "19384785"
//     }


class Car {
    private $num_telaio;

    public function __construct($telaio){
        $this->num_telaio = $telaio;
    }

    protected function firstLevelTelaio(){
        return $this->num_telaio;
    }

    public function secondLevelTelaio(){
        return $this->num_telaio;
    }
}

class Fiat extends Car{
    protected $plate;
    //metto name invece che colour poiche non è richiesto
    protected $name;

    public function __construct($telaio, $targa, $nome){
        parent::__construct($telaio);
        $this->plate = $targa;
        $this->name = $nome;
    }

    protected function firstLevelOutput(){
        return "La mia macchina è una $this->name, con targa $this->plate e numero di Telaio è " . $this->firstLevelTelaio() . "\n";
    }   

    public function secondLevelOutput(){
        //concateno stringa con il metodo creato nella classe padre poiche gli attributi privati sono accessibili solo all'interno della classa in cui si trovano 
        return "La mia macchina è una $this->name, con targa $this->plate e numero di Telaio è " . $this->secondLevelTelaio() ."\n";
    }     
}

$myCar = new Fiat("12345864", "CC 342 GG", "Panda" );
//echo $myCar->secondLevelTelaio();
//var_dump($myCar);
echo $myCar->secondLevelOutput();

