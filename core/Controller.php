<?php
namespace core;

class Controller {
    public $page;

    const AVAILABLE_PAGES = array('home','index','sante', 'mutuelle','prevoyance-sante','assurance-pret','automobile','moto','habitation','chiens-chats');
    const AVAILABLE_DEVIS_PAGES = array('devis', 'devis2','a-propos','conseil','plan','cgv','mentions-legales');
    const AVAILABLE_PRO_PAGES = array('homePro','professionnel','artisans','commercants','immobilier','m-services', 'm-sante','hotellerie','restauration','secteurs');

    const AVAILAIBLE_DEVIS_CHOICES = array(
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
        $this->page = isset($_GET['page']) ? $_GET['page'] : self::AVAILABLE_PAGES[0];
    }
    
    
    public function isParticulier(Type $var = null) {
        return isset($_GET['page']) && in_array($_GET['page'], self::AVAILABLE_PAGES);
    }

    public function isPro(Type $var = null) {
        return isset($_GET['page']) && in_array($_GET['page'], self::AVAILABLE_PRO_PAGES);
    }

    public function isDevis(Type $var = null) {
        return isset($_GET['page']) && in_array($_GET['page'], self::AVAILABLE_DEVIS_PAGES);
    }

    public function getSelectedDevis(){
        if(isset($_POST['choixDevis'])){
            return $_POST['choixDevis'];
        }
         return false;
    }
}