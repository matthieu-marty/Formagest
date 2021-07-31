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
}
