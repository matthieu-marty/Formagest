<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Module.class.php';

class ModuleManager extends Model
{
    private $modules;

    public function addModule($module)
    {
        $this->modules[] = $module;
    }

    public function getModules()
    {
        return $this->modules;
    }

    public function getModuleById($id_module)
    {
        foreach ($this->modules as $module) {
            if ($module->getId() === $id_module) {
                return $module;
            }
        }
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

    public function enregistrerModuleDB(
        $objectif_pedagogique_1,
        $objectif_partiel_1,
        $contenu_sequence_1,
        $technique_pedagogique_1,
        $methode_pedagogique_1,
        $outils_supports_1,
        $evaluation_1,
        $objectif_partiel_2,
        $contenu_sequence_2,
        $technique_pedagogique_2,
        $methode_pedagogique_2,
        $outils_supports_2,
        $evaluation_2,
        $objectif_pedagogique_2,
        $objectif_partiel_3,
        $contenu_sequence_3,
        $technique_pedagogique_3,
        $methode_pedagogique_3,
        $outils_supports_3,
        $evaluation_3,
        $objectif_partiel_4,
        $contenu_sequence_4,
        $technique_pedagogique_4,
        $methode_pedagogique_4,
        $outils_supports_4,
        $evaluation_4,
        $objectif_pedagogique_3,
        $objectif_partiel_5,
        $contenu_sequence_5,
        $technique_pedagogique_5,
        $methode_pedagogique_5,
        $outils_supports_5,
        $evaluation_5,
        $objectif_partiel_6,
        $contenu_sequence_6,
        $technique_pedagogique_6,
        $methode_pedagogique_6,
        $outils_supports_6,
        $evaluation_6,
        $objectif_pedagogique_4,
        $objectif_partiel_7,
        $contenu_sequence_7,
        $technique_pedagogique_7,
        $methode_pedagogique_7,
        $outils_supports_7,
        $evaluation_7,
        $objectif_partiel_8,
        $contenu_sequence_8,
        $technique_pedagogique_8,
        $methode_pedagogique_8,
        $outils_supports_8,
        $evaluation_8,
        $label
    ) {
        if (!empty($objectif_pedagogique_1) && !empty($objectif_partiel_1)) {
            $data = [
                'objectif_pedagogique_1' => $objectif_pedagogique_1,
                'objectif_partiel_1' => $objectif_partiel_1,
                'contenu_sequence_1' => $contenu_sequence_1,
                'technique_pedagogique_1' => $technique_pedagogique_1,
                'methode_pedagogique_1' => $methode_pedagogique_1,
                'outils_supports_1' => $outils_supports_1,
                'evaluation_1' => $evaluation_1,
                'objectif_partiel_2' => $objectif_partiel_2,
                'contenu_sequence_2' => $contenu_sequence_2,
                'technique_pedagogique_2' => $technique_pedagogique_2,
                'methode_pedagogique_2' => $methode_pedagogique_2,
                'outils_supports_2' => $outils_supports_2,
                'evaluation_2' => $evaluation_2,

                'objectif_pedagogique_2' => $objectif_pedagogique_2,
                'objectif_partiel_3' => $objectif_partiel_3,
                'contenu_sequence_3' => $contenu_sequence_3,
                'technique_pedagogique_3' => $technique_pedagogique_3,
                'methode_pedagogique_3' => $methode_pedagogique_3,
                'outils_supports_3' => $outils_supports_3,
                'evaluation_3' => $evaluation_3,
                'objectif_partiel_4' => $objectif_partiel_4,
                'contenu_sequence_4' => $contenu_sequence_4,
                'technique_pedagogique_4' => $technique_pedagogique_4,
                'methode_pedagogique_4' => $methode_pedagogique_4,
                'outils_supports_4' => $outils_supports_4,
                'evaluation_4' => $evaluation_4,

                'objectif_pedagogique_3' => $objectif_pedagogique_3,
                'objectif_partiel_5' => $objectif_partiel_5,
                'contenu_sequence_5' => $contenu_sequence_5,
                'technique_pedagogique_5' => $technique_pedagogique_5,
                'methode_pedagogique_5' => $methode_pedagogique_5,
                'outils_supports_5' => $outils_supports_5,
                'evaluation_5' => $evaluation_5,
                'objectif_partiel_6' => $objectif_partiel_6,
                'contenu_sequence_6' => $contenu_sequence_6,
                'technique_pedagogique_6' => $technique_pedagogique_6,
                'methode_pedagogique_6' => $methode_pedagogique_6,
                'outils_supports_6' => $outils_supports_6,
                'evaluation_6' => $evaluation_6,

                'objectif_pedagogique_4' => $objectif_pedagogique_4,
                'objectif_partiel_7' => $objectif_partiel_7,
                'contenu_sequence_7' => $contenu_sequence_7,
                'technique_pedagogique_7' => $technique_pedagogique_7,
                'methode_pedagogique_7' => $methode_pedagogique_7,
                'outils_supports_7' => $outils_supports_7,
                'evaluation_7' => $evaluation_7,
                'objectif_partiel_8' => $objectif_partiel_8,
                'contenu_sequence_8' => $contenu_sequence_8,
                'technique_pedagogique_8' => $technique_pedagogique_8,
                'methode_pedagogique_8' => $methode_pedagogique_8,
                'outils_supports_8' => $outils_supports_8,
                'evaluation_8' => $evaluation_8,
                'date_creation' =>getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'],
                'label' => $label
            ];
            $req = $this->getBDD()->prepare("INSERT INTO fg_module (
                objectif_pedagogique_1,objectif_partiel_1,contenu_sequence_1,technique_pedagogique_1,methode_pedagogique_1,outils_supports_1,evaluation_1,
                objectif_partiel_2,contenu_sequence_2,technique_pedagogique_2,methode_pedagogique_2,outils_supports_2,evaluation_2,
                objectif_pedagogique_2,objectif_partiel_3,contenu_sequence_3,technique_pedagogique_3,methode_pedagogique_3,outils_supports_3,evaluation_3,
                objectif_partiel_4,contenu_sequence_4,technique_pedagogique_4,methode_pedagogique_4,outils_supports_4,evaluation_4,
                objectif_pedagogique_3,objectif_partiel_5,contenu_sequence_5,technique_pedagogique_5,methode_pedagogique_5,outils_supports_5,evaluation_5,
                objectif_partiel_6,contenu_sequence_6,technique_pedagogique_6,methode_pedagogique_6,outils_supports_6,evaluation_6,
                objectif_pedagogique_4,objectif_partiel_7,contenu_sequence_7,technique_pedagogique_7,methode_pedagogique_7,outils_supports_7,evaluation_7,
                objectif_partiel_8,contenu_sequence_8,technique_pedagogique_8,methode_pedagogique_8,outils_supports_8,evaluation_8,
                label,date_creation) VALUES (
                :objectif_pedagogique_1,:objectif_partiel_1,:contenu_sequence_1,:technique_pedagogique_1,:methode_pedagogique_1,:outils_supports_1,:evaluation_1,
                :objectif_partiel_2,:contenu_sequence_2,:technique_pedagogique_2,:methode_pedagogique_2,:outils_supports_2,:evaluation_2,
                :objectif_pedagogique_2,:objectif_partiel_3,:contenu_sequence_3,:technique_pedagogique_3,:methode_pedagogique_3,:outils_supports_3,:evaluation_3,
                :objectif_partiel_4,:contenu_sequence_4,:technique_pedagogique_4,:methode_pedagogique_4,:outils_supports_4,:evaluation_4,
                :objectif_pedagogique_3,:objectif_partiel_5,:contenu_sequence_5,:technique_pedagogique_5,:methode_pedagogique_5,:outils_supports_5,:evaluation_5,
                :objectif_partiel_6,:contenu_sequence_6,:technique_pedagogique_6,:methode_pedagogique_6,:outils_supports_6,:evaluation_6,
                :objectif_pedagogique_4,:objectif_partiel_7,:contenu_sequence_7,:technique_pedagogique_7,:methode_pedagogique_7,:outils_supports_7,:evaluation_7,
                :objectif_partiel_8,:contenu_sequence_8,:technique_pedagogique_8,:methode_pedagogique_8,:outils_supports_8,:evaluation_8,
                :label,:date_creation)");
            $req->execute($data);
            $req->closeCursor();
        }
    }
}
