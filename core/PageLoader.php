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
    
    public function __construct() {
        $this->template = $this->getView('template');
        $this->page = $this->getPageRequest();
        $this->pageView = $this->getView($this->page);
    }

    private function getPageRequest() {
        if(isset($_GET['page'])) {
            if(in_array($_GET['page'], self::AVAILABLE_PAGES)){
                $this->template = $this->getView('template');
            }
            if(in_array($_GET['page'], self::AVAILABLE_DEVIS_PAGES)){
                $this->template = $this->getView('templateDevis');
            }
            if(in_array($_GET['page'], self::AVAILABLE_PRO_PAGES)){
                $this->template = $this->getView('templatePro');
            }
            return $_GET['page'];
        }
        return self::AVAILABLE_PAGES[0];
    }
        
    public function getPageContent(){
        return str_replace('{{content}}', $this->pageView, $this->template);
    }

    public function getView($name) {
        return file_get_contents(self::TEMPLATE_DIR.$name.'.html'); 
    }

}