<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Formation.class.php';
class FormationManager extends Model
{
    private $formations;

    public function addFormation($formation)
    {
        $this->formations[] = $formation;
    }

    public function getFormations()
    {
        return $this->formations;
    }

    public function chargementFormations()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_formation");
        $req->execute();
        $formations = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($formations as $formation) {
            $f = new Formation(
                $formation['id'],
                $formation['date_debut'],
                $formation['date_fin'],
                $formation['reference'],
                $formation['budget'],
                $formation['id_of'],
                $formation['id_stagiaire'],
                $formation['id_entreprise'],
                $formation['programme'],
                $formation['total_h']
            );
            $this->addFormation($f);
        }
    }
}
