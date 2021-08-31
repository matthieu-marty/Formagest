<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Objectifpartiel.php';

class ObjectifpartielManager extends Model
{
    private $objectifs_partiels;

    public function addObjectif_partiel($objectif_partiel)
    {
        $this->objectifs_partiels [] = $objectif_partiel;
    }

    public function getObjectifs_partiels()
    {
        return $this->objectifs_partiels;
    }

    public function chargementObjectifs_partiels()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_objectif_partiel ORDER BY label ASC");
        $req->execute();
        $objectifs_partiels = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($objectifs_partiels as $objectif_partiel) {
            $o = new Objectifpartiel(
                $objectif_partiel['id'],
                $objectif_partiel['label'],
                $objectif_partiel['contenu_sequence'],
                $objectif_partiel['methode_pedagogique'],
                $objectif_partiel['technique_pedagogique'],
                $objectif_partiel['outils_supports'],
                $objectif_partiel['evaluation'],
                $objectif_partiel['date_creation'],
            );
            $this->addObjectif_partiel($objectif_partiel);
        }
    }

    public function getObjectifpartielById($id)
    {
        foreach ($this->objectifs_partiels as $objectif_partiel) {
            if ($objectif_partiel->getId() === $id) {
                return $objectif_partiel;
            }
        }
    }
}