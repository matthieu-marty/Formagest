<?php
require_once 'models/managers/ObjectifPartielManager.class.php';

class ObjectifPartielController
{
    private $objectif_partiel_manager;

    public function __construct()
    {
        $this->objectif_partiel_manager = new ObjectifpartielManager;
        $this->objectif_partiel_manager->chargementObjectifs_partiels();
    }

    public function afficherObjectifsPartiels()
    {
        $objectifs_partiels = $this->objectif_partiel_manager->getObjectifs_partiels();
        require_once 'views/modules.view.php';
    }
}