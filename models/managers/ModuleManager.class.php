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

    public function getModuleById($id)
    {
        foreach ($this->modules as $module) {
            if ($module->getId() === $id) {
                return $module;
            }
        }
    }

    public function chargementModules()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_module ORDER BY date_creation DESC");
        $req->execute();
        $modules = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();


        foreach ($modules as $module) {
            $m = new Module(
                $module['id'],
                $module['label'],
                $module['description'],
                $module['objectif_pedagogique'],
                $module['volume_horaire'],
                $module['date_creation'],
                $module['date_modification'],
            );
            $this->addModule($m);
        }
    }

    public function enregistrerModuleDB($label, $objectif_pedagogique, $description)
    {
        if (!empty($label)) {
            $date = getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
            $data = [
                'label' => $label,
                'objectif_pedagogique' => $objectif_pedagogique,
                'description' => $description,
                'date_modification' => $date,
                'date_creation' => $date
            ];
            $req = $this->getBDD()->prepare(
                "INSERT INTO 
                fg_module (label, objectif_pedagogique, description, date_modification, date_creation)
                VALUES (:label, :objectif_pedagogique, :description, :date_modification, :date_creation)"
            );
            $req->execute($data);
            $req->closeCursor();
        }
    }

    public function actualiserModuleDB($id_module, $label, $objectif_pedagogique, $description)
    {
        $date_maj = getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
        $data = [
            'id_module' => $id_module,
            'label' => $label,
            'objectif_pedagogique' => $objectif_pedagogique,
            'description' => $description,
            'date_modification' => $date_maj,
        ];
        $req = $this->getBDD()->prepare(
            "UPDATE fg_module
            SET
            label = :label,
            objectif_pedagogique = :objectif_pedagogique,
            description = :description,
            date_modification = :date_modification
            WHERE id = :id_module"
        );
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }

    public function supprimerModuleDB($id_module)
    {
        $data = ['id_module' => $id_module];
        $req = $this->getBDD()->prepare("DELETE FROM fg_module WHERE id = :id_module");
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }
}
