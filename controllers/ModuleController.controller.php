<?php
require_once 'models/managers/ModuleManager.class.php';
require_once 'models/managers/ObjectifPedagogiqueManager.class.php';
require_once 'models/managers/ObjectifPartelManager.class.php';

class ModuleController
{
    private $module_manager;
    private $objectif_pedagogique_manager;
    private $objectif_partiel_manager;

    public function __construct()
    {
        $this->module_manager = new ModuleManager;
        $this->module_manager->chargementModules();

        $this->objectif_pedagogique_manager = new ObjectifPedagogiqueManager;
        $this->objectif_pedagogique_manager->chargementObjectifs_Pedagogiques();

        $this->objectif_partiel_manager = new ObjectifPartielManager;
        $this->objectif_partiel_manager->chargementObjectifs_Partiels();
    }

    public function afficherModules()
    {
        $modules = $this->module_manager->getModules();
        require_once 'views/modules.view.php';
    }
}
