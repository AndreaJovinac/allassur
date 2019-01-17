<?php
namespace core;

class PageLoader {
    public $page;
    private $pageView;
    private $template;
    const AVAILABLE_PAGES = array('home','index','sante', 'mutuelle','prevoyance-sante','assurance-pret','automobile','moto','habitation','chiens-chats');
    const AVAILABLE_DEVIS_PAGES = array('devis', 'devis2','a-propos','conseil','plan','cgv','mentions-legales');
    const AVAILABLE_PRO_PAGES = array('homePro','professionnel','artisans','commercants','immobilier','m-services', 'm-sante','hotellerie','restauration','secteurs');
    const TEMPLATE_DIR =  __DIR__.'/../public/views/';
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
        $this->template = $this->getView('template');
        $this->page = $this->getPageRequest();
        $this->pageView = $this->getView($this->page);
    }

    private function getPageRequest() {
        if(isset($_GET['page'])) {
            if(in_array($_GET['page'], self::AVAILABLE_PAGES)){
                $this->template = 'template';
            }
            if(in_array($_GET['page'], self::AVAILABLE_DEVIS_PAGES)){
                $this->template = 'templateDevis';
            }
            if(in_array($_GET['page'], self::AVAILABLE_PRO_PAGES)){
                $this->template = 'templatePro';
            }
            return $_GET['page'];
        }
        return self::AVAILABLE_PAGES[0];
    }
        
    public function getPageContent(){
        ob_start();
        require (self::TEMPLATE_DIR.$this->template.'.html.php');
        ob_flush();
    }

    public function getView($name) {
        ob_start();
        require (self::TEMPLATE_DIR.$name.'.html.php');
        return ob_get_clean();
    }

    public function getSelectedDevis(){
        if(isset($_POST['choixDevis'])){
            return $_POST['choixDevis'];
        }
         return false;
    }

}