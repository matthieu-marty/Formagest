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
}