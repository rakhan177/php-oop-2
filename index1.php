<?php
// creo classe negozio
class Shop{
  public $name;
  public $tipologia;
  public $webSite;
  public function __construct($name, $tipologia, $webSite){
    $this->name = $name;
    $this->tipologia = $tipologia;
    $this->webSite = $webSite;
  }
}
// $negozio = new Shop('ggi', 'valalla', 'gingirillo');
// print_r($negozio);

// creo classe prodotti
class Prodotto{
  public $marca;
  public $tipo;
  public function __construct($marca, $tipo){
    $this->productName = $marca;
    $this->idProduct = $tipo;
  }
}
// estendo la classe Prodotto con tv
class Tv extends Prodotto{
  public $pollici;
  public $definizione;
  private $id;
  private $prezzo;
  public function __construct($pollici, $definizione){
    $this->pollici = $pollici;
    $this->definizione = $definizione;
    $this->id = $id;
    $this->prezzo = $prezzo;
  }
  public function getId(){
    return $this->id;
  }
  public function getprezzo(){
    return $this->prezzo;
  }
}

?>
