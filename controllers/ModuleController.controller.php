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

    public function afficherModule($id_module)
    {
        $module = $this->module_manager->getModuleById($id_module);
        require_once 'views/module.view.php';
    }

    public function creerModule()
    {
        require_once 'views/createModule.view.php';
    }

    public function enregistrerModule()
    {
        $this->module_manager->enregistrerModuleDB(
            $_POST['objectif_pedagogique_1'],
            $_POST['objectif_partiel_1'],
            $_POST['contenu_sequence_1'],
            $_POST['technique_pedagogique_1'],
            $_POST['methode_pedagogique_1'],
            $_POST['outils_supports_1'],
            $_POST['evaluation_1'],
            $_POST['objectif_partiel_2'],
            $_POST['contenu_sequence_2'],
            $_POST['technique_pedagogique_2'],
            $_POST['methode_pedagogique_2'],
            $_POST['outils_supports_2'],
            $_POST['evaluation_2'],

            $_POST['objectif_pedagogique_2'],
            $_POST['objectif_partiel_3'],
            $_POST['contenu_sequence_3'],
            $_POST['technique_pedagogique_3'],
            $_POST['methode_pedagogique_3'],
            $_POST['outils_supports_3'],
            $_POST['evaluation_3'],
            $_POST['objectif_partiel_4'],
            $_POST['contenu_sequence_4'],
            $_POST['technique_pedagogique_4'],
            $_POST['methode_pedagogique_4'],
            $_POST['outils_supports_4'],
            $_POST['evaluation_4'],

            $_POST['objectif_pedagogique_3'],
            $_POST['objectif_partiel_5'],
            $_POST['contenu_sequence_5'],
            $_POST['technique_pedagogique_5'],
            $_POST['methode_pedagogique_5'],
            $_POST['outils_supports_5'],
            $_POST['evaluation_5'],
            $_POST['objectif_partiel_6'],
            $_POST['contenu_sequence_6'],
            $_POST['technique_pedagogique_6'],
            $_POST['methode_pedagogique_6'],
            $_POST['outils_supports_6'],
            $_POST['evaluation_6'],

            $_POST['objectif_pedagogique_4'],
            $_POST['objectif_partiel_7'],
            $_POST['contenu_sequence_7'],
            $_POST['technique_pedagogique_7'],
            $_POST['methode_pedagogique_7'],
            $_POST['outils_supports_7'],
            $_POST['evaluation_7'],
            $_POST['objectif_partiel_8'],
            $_POST['contenu_sequence_8'],
            $_POST['technique_pedagogique_8'],
            $_POST['methode_pedagogique_8'],
            $_POST['outils_supports_8'],
            $_POST['evaluation_8'],
            $_POST['label']
        );
        header('location:' . URL . 'modules');
    }
}
