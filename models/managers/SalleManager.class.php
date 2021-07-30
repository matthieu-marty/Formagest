<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Salle.class.php';

class SalleManager extends Model
{
    private $salles;

    public function addSalle($salle)
    {
        $this->salles[] = $salle;
    }

    public function getSalles()
    {
        return $this->salles;
    }

    public function getSallebyId($id)
    {
        foreach ($this->salles as $salle) {
            if ($salle->getId() === $id) {
                return $salle;
            }
        }
    }

    public function chargementSalles()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_salle ORDER BY date_creation DESC");
        $req->execute();
        $salles = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($salles as $salle) {
            $s = new Salle(
                $salle['id'],
                $salle['label'],
                $salle['adresse'],
                $salle['code_postal'],
                $salle['ville'],
                $salle['date_creation'],
                $salle['date_modification'],
            );
            $this->addSalle($s);
        }
    }
}
