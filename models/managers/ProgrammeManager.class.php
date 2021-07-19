<?php

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
                $programme['reference'],
                $programme['label'],
                $programme['contenu'],
            );
            $this->addProgramme($p);
        }

    }
}