<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Programme.class.php';
class ProgrammeManager extends Model
{
    private $programmes;

    public function addProgramme($programme)
    {
        $this->programmes[] = $programme;
    }

    public function getProgrammes()
    {
        return $this->programmes;
    }

    public function chargementProgrammes()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_programme");
        $req->execute();
        $programmes = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($programmes as $programme) {
            $p = new Programme(
                $programme['id'],
                $programme['label'],
                $programme['id_module_1'],
                $programme['id_module_2'],
                $programme['id_module_3'],
                $programme['id_module_4'],
                $programme['date_creation'],
            );
            $this->addProgramme($p);
        }
    }

    public function getProgrammeById($id_programme)
    {
        foreach ($this->programmes as $programme) {
            if ($programme->getId() === $id_programme) {
                return $programme;
            }
        }
    }
}
