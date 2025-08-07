<?php
namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Application\Model\OrgaoTable;
use Laminas\View\Model\ViewModel;
use Application\Model\SoftwareTable;

class IndicadorController extends AbstractActionController
{
    private OrgaoTable $orgaoTable;
    
    private SoftwareTable $softwareTable;
    
    public function __construct(OrgaoTable $orgaoTable, SoftwareTable $softwareTable)
    {
        $this->orgaoTable = $orgaoTable;
        $this->softwareTable = $softwareTable;
    }
    
    public function indexAction()
    {
        $totais = [];
        $totais['total_orgaos'] = $this->orgaoTable->getTotalDeOrgaos();
        $totais['total_desenvolveu_floss'] = $this->orgaoTable->getTotalDesenvolveuFloss();
        $totais['total_softwares_livres'] = $this->softwareTable->getTotalDeSoftwaresLivres();
        $totais['total_softwares_nao_livres'] = $this->softwareTable->getTotalDeSoftwaresNaoLivres();
        $totais['total_softwares_livres_usados'] = $this->softwareTable->getTotalDeSoftwaresLivresUsados();
        $totais['total_softwares_nao_livres_usados'] = $this->softwareTable->getTotalDeSoftwaresNaoLivresUsados();

        
        return new ViewModel($totais);
    }
}
