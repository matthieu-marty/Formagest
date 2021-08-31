<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/ObjectifPedagogique.php';

class ObjectifPedagogiqueManager extends Model
{
    private $objectifs_pedagogiques;

    public function addObjectif_Pedagogique($objectif_pedagogique)
    {
        $this->objectifs_pedagogiques [] = $objectif_pedagogique;
    }

    public function getObjectifs_Pedagogiques()
    {
        return $this->objectifs_pedagogiques;
    }

    public function chargementObjectifs_Pedagogiques()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_objectif_pedagogique ORDER BY label ASC");
        $req->execute();
        $objectifs_pedagogiques = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($objectifs_pedagogiques as $objectif_pedagogique) {
            $o = new ObjectifPedagogique(
                $objectif_pedagogique['id'],
                $objectif_pedagogique['label'],
                $objectif_pedagogique['id_objectif_partiel_1'],
                $objectif_pedagogique['id_objectif_partiel_2'],
                $objectif_pedagogique['id_objectif_partiel_3'],
                $objectif_pedagogique['id_objectif_partiel_4'],
                $objectif_pedagogique['date_cration'],
            );
            $this->addObjectif_Pedagogique($objectif_pedagogique);
        }
    }

    public function getObjectifPedagogiqueById($id)
    {
        foreach ($this->objectifs_pedagogiques as $objectif_pedagogique) {
            if ($objectif_pedagogique->getId() === $id) {
                return $objectif_pedagogique;
            }
        }
    }
}