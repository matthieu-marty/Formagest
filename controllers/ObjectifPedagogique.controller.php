<?php
 require_once 'models/managers/objectifPartielManager.class.php';
 require_once 'models/managers/objectifPedagogiqueManager.class.php';

class ObjectifPedagogiqueController
{
    private $objectif_pedagogique_manager;
    private $objectif_partiel_manager;

    public function __construct()
    {
        $this->objectif_pedagogique_manager = new ObjectifPedagogiqueManager;
        $this->objectif_pedagogique_manager->chargementObjectifs_Pedagogiques();

        $this->objectif_partiel_manager = new ObjectifPartielManager;
        $this->objectif_partiel_manager->chargementObjectifs_Partiels();
    }

    public function afficherObjectifsPedagogiques()
    {
        $objectifs_partiels = $this->objectif_partiel_manager->getObjectifs_Partiels();
        $objectifs_pedagogiques = $this->objectif_pedagogique_manager->getObjectifs_Pedagogiques();
        require_once 'views/objectifspartiels.view.php';
    }
}