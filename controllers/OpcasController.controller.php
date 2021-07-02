<?php
require_once 'models/managers/opcaManager.class.php';

class OpcaController
{
    private $Opca_manager;

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
}
