<?php
namespace core;

require __DIR__.'/Pages.php';

class Controller {
    public $page;
    public $title;

    public $choices = array(
        "sante" => "Santé",
        "mutuelle" => "Mutuelle",
        "prevoyance" => "Prévoyance Santé",
        "obseque" => "Obsèques",
        "dependance" => "Dépendance",
        "retraite" => "Retraite",
        "pret" => "Assurance Prêt",
        "auto" => "Automobile",
        "flotte" => "Flotte Automobile",
        "vtc" => "VTC",
        "taxi" => "Taxi",
        "moto" => "Moto",
        "habitation" => "Habitation",
        "animaux" => "Chiens & Chats"
    );

    public function __construct() {
        $this->page = isset($_GET['page']) ? $_GET['page'] : Pages::$particulier['home'];
        $this->title = $this->getTitle();
    }
    
    
    public function isParticulier() {
        return isset($_GET['page']) && array_key_exists($_GET['page'], Pages::$particulier);
    }

    public function isPro() {
        return isset($_GET['page']) && array_key_exists($_GET['page'], Pages::$pros);
    }

    public function isDevis() {
        return isset($_GET['page']) && array_key_exists($_GET['page'], Pages::$devis);
    }

    public function getTitle() {
        if($this->isParticulier())
            return Pages::$particulier[$this->page];
        if($this->isPro())
            return Pages::$pros[$this->page];
        if($this->isDevis())
            return Pages::$devis[$this->page];
    }

    public function getSelectedDevis(){
        if(isset($_POST['choixDevis'])){
            return $_POST['choixDevis'];
        }
         return false;
    }
}