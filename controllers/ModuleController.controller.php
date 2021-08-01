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

    public function AfficherModule($id_module)
    {
        $module = $this->module_manager->getModuleById($id_module);
        require_once 'views/module.view.php';
    }

    public function modifierModule($id_module)
    {
        $module = $this->module_manager->getModuleById($id_module);
        require_once 'views/editModule.view.php';
    }

    public function actualiserModule($id_module)
    {
        $res = $this->module_manager->actualiserModuleDB(
            $id_module,
            $_POST['label'],
            $_POST['objectif_pedagogique'],
            $_POST['description'],
        );
        if ($res === true) {
            header('location:' . URL . 'modules/read/' . $id_module);
        } else {
            header('location:' . URL . 'erreur');
        }
    }

    public function supprimerModule($id_module)
    {
        $res = $this->module_manager->supprimerModuleDB($id_module);
        if ($res === true) {
            header('location:' . URL . 'modules');
        } else {
            header('location' . URL . 'erreur');
        }
    }
}
