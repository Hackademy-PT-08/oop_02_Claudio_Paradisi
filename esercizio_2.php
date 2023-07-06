<?php


// - crea una struttura a classi sfruttando l’ereditarietà e seguendo queste semplici regole:
//     - le classi non devono avere attributi;
//     - ogni classe avrà un metodo specifico protected per stampare la sua specializzazione; 
//     - non puoi realizzare metodi definiti public per stampare il risultato;
//     - l’unico metodo public ammesso è il costruttore.
    

// ATTENZIONE: utilizzate bene il costruttore per invocare i metodi.


// - Il risultato atteso sarà:
//     $magikarp = new Fish();
//     //Nel terminale visualizzerete:
//     Sono un animale Vertebrato
//     Sono un animale a Sangue Freddo
//     Sono un pesce

class Vertebrates {
    //utilizzo il construct per printare il metodo richiamandolo all'interno della funzione
    public function __construct(){
        echo $this->detail();
    }

    protected function detail(){
        return "sono un animale vertebrato \n";
    }

}

class WarmBlooded extends Vertebrates {
    public function __construct(){
        //importo da la padre la funzione
        parent::__construct();
        //cambio nome alla funzione altrimenti me la sovrascrive
        echo $this->detail_1();
    }

    protected function detail_1(){
        return "sono un animale a sangue caldo \n";
    }

}

class ColdBlooded extends Vertebrates {
    public function __construct(){
        parent::__construct();
        //non serve cambiare nome poiche warmblooded non è in relazione con questa classe
        echo $this->detail_1();
    }

    protected function detail_1(){
        return "sono un animale a sangue freddo \n";
    }

}

class Mammals extends WarmBlooded {
    public function __construct(){
        parent::__construct();
        // cambio nome di nuovo altrimenti me la sovrascrive
        echo $this->detail_2();
    }

    protected function detail_2(){
        return "sono un mammifero \n";
    }

}

class Birds extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        echo $this->detail_2();
    }

    protected function detail_2(){
        return "sono un uccello \n";
    }

}

class Fish extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        echo $this->detail_2();
    }

    protected function detail_2(){
        return "sono un pokemon pesce \n";
    }

}

class Reptiles extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        echo $this->detail_2();
    }

    protected function detail_2(){
        return "sono un rettile \n";
    }

}

class Amphibians extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        echo $this->detail_2();
    }

    protected function detail_2(){
        return "sono un anfibio \n";
    }

}


$magikarp = new Fish();
$leone = new Mammals();
$uccello = new Birds();
$serpente = new Reptiles();
$rana = new Amphibians();
