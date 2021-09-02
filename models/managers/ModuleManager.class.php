<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Module.class.php';

class ModuleManager extends Model
{
    private $module;

    public function addModule($module)
    {
        $this->module[] = $module;
    }

    public function getModules()
    {
        return $this->modules;
    }

    public function chargementModules()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_module ORDER BY label ASC");
        $req->execute();
        $modules = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($modules as $module) {
            $m = new Module(
                $module['id'],
                $module['label'],
                $module['date_creation'],
                $module['objectif_pedagogique_1'],
                $module['objectif_partiel_1'],
                $module['contenu_sequence_1'],
                $module['methode_pedagogique_1'],
                $module['technique_pedagogique_1'],
                $module['outils_supports_1'],
                $module['evaluation_1'],
                $module['objectif_partiel_2'],
                $module['contenu_sequence_2'],
                $module['methode_pedagogique_2'],
                $module['technique_pedagogique_2'],
                $module['outils_supports_2'],
                $module['evaluation_2'],
                $module['objectif_pedagogique_2'],
                $module['objectif_partiel_3'],
                $module['contenu_sequence_3'],
                $module['methode_pedagogique_3'],
                $module['technique_pedagogique_3'],
                $module['outils_supports_3'],
                $module['evaluation_3'],
                $module['objectif_partiel_4'],
                $module['contenu_sequence_4'],
                $module['methode_pedagogique_4'],
                $module['technique_pedagogique_4'],
                $module['outils_supports_4'],
                $module['evaluation_4'],
                $module['objectif_pedagogique_3'],
                $module['objectif_partiel_5'],
                $module['contenu_sequence_5'],
                $module['methode_pedagogique_5'],
                $module['technique_pedagogique_5'],
                $module['outils_supports_5'],
                $module['evaluation_5'],
                $module['objectif_partiel_6'],
                $module['contenu_sequence_6'],
                $module['methode_pedagogique_6'],
                $module['technique_pedagogique_6'],
                $module['outils_supports_6'],
                $module['evaluation_6'],
                $module['objectif_pedagogique_4'],
                $module['objectif_partiel_7'],
                $module['contenu_sequence_7'],
                $module['methode_pedagogique_7'],
                $module['technique_pedagogique_7'],
                $module['outils_supports_7'],
                $module['evaluation_7'],
                $module['objectif_partiel_8'],
                $module['contenu_sequence_8'],
                $module['methode_pedagogique_8'],
                $module['technique_pedagogique_8'],
                $module['outils_supports_8'],
                $module['evaluation_8'],
            );
            $this->addModule($m);
        }
    }
}
