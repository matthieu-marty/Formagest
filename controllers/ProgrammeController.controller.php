<?php

require_once "models/managers/ProgrammeManager.class.php";
require_once "models/managers/ModuleManager.class.php";

class ProgrammeController
{
    private $programme_manager;
    private $module_manager;

    public function __construct()
    {
        $this->programme_manager = new ProgrammeManager;
        $this->programme_manager->chargementProgrammes();
        $this->module_manager = new ModuleManager;
        $this->module_manager->chargementModules();
    }

    public function afficherProgrammes()
    {
        $programmes = $this->programme_manager->getProgrammes();

        require_once 'views/programmes.view.php';
    }

    public function afficherProgramme($id_programme)
    {
        $programme = $this->programme_manager->getProgrammeById($id_programme);
        
        require_once 'views/programme.view.php';
    }
}