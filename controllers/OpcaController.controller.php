<?php
require_once 'models/managers/OpcaManager.class.php';

class OpcaController
{
    private $opca_manager;

    public function __construct()
    {
        $this->opca_manager = new OpcaManager;
        $this->opca_manager->chargementOpcas();
    }

    public function afficherOpcas()
    {
        $opcas = $this->opca_manager->getOpcas();
        require_once 'views/opcas.view.php';
    }

    public function afficherOpca($id_opca)
    {
        $opca = $this->opca_manager->getOpcaById($id_opca);
        require_once 'views/opca.view.php';
    }
    
}
