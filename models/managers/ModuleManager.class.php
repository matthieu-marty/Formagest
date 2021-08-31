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

    public function chargementModules()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_module ORDER BY label ASC");
        $req->execute();
        $modules = $req->fetAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($modules as $module) {
            $m = new Module(
                $module['id'],
                $module['label'],
                $module['id_objectif_pedagogique_1'],
                $module['id_objectif_pedagogique_2'],
                $module['id_objectif_pedagogique_3'],
                $module['id_objectif_pedagogique_4'],
                $module['date_creation'],
            );
            $this->addModule($m);
        }
    }


    public function getModuleById($id)
    {
        foreach ($this->modules as $module) {
            if ($module->getId() === $id) {
                return $module;
            }
        }
    }
}
