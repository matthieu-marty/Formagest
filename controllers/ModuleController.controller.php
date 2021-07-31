<?php
require_once 'models/managers/ModuleManager.class.php';

class ModuleController
{
    private $module_manager;

    public function __construct()
    {
        $this->module_manager = new ModuleManager;
        $this->module_manager->chargementModules();
    }

    public function afficherModules()
    {
        $modules = $this->module_manager->getModules();
        require_once 'views/modules.view.php';
    }

    public function creerModule()
    {
        require_once 'views/createModule.view.php';
    }

    public function enregistrerModule()
    {
        $this->module_manager->enregistrerModuleDB(
            $_POST['label'],
            $_POST['objectif_pedagogique'],
            $_POST['description']

        );
        header('location:' . URL . 'modules');
    }

}
