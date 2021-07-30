<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Opca.class.php';
class OpcaManager extends Model
{
    private $opcas;

    public function addOpca($opca)
    {
        $this->opcas[] = $opca;
    }

    public function getOpcas()
    {
        return $this->opcas;
    }

    public function getOpcaById($id)
    {
        foreach ($this->opcas as $opca) {
            if ($opca->getId() === $id) {
                return $opca;
            }
        }
    }

    public function chargementOpcas()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_opca ORDER BY date_creation DESC");
        $req->execute();
        $opcas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($opcas as $opca) {
            $o = new Opca(
                $opca['id'],
                $opca['nom'],
                $opca['adresse'],
                $opca['code_postal'],
                $opca['ville'],
                $opca['date_modification'],
                $opca['date_creation'],
            );
            $this->addOpca($o);
        }
    }
}
