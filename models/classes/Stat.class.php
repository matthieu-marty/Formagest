<?php
require_once 'models/classes/Model.class.php';
class Stat extends Model
{
    private $nb_entreprise;
    private $nb_effectif;
    private $nb_formateur;
    private $nb_opca;
    private $nb_organisme_formation;
    private $nb_programme;
    private $nb_salle;
    private $nb_module;

    public function __construct()
    {
        $req = $this->getBDD()->prepare(
            "SELECT 
            (SELECT COUNT(*) FROM fg_entreprise) as nb_entreprise, 
            (SELECT COUNT(*) FROM fg_effectif) as nb_effectif, 
            (SELECT COUNT(*) FROM fg_formateur) as nb_formateur, 
            (SELECT COUNT(*) FROM fg_opca) as nb_opca, 
            (SELECT COUNT(*) FROM fg_organisme_formation) as nb_organisme_formation, 
            (SELECT COUNT(*) FROM fg_programme) as nb_programme,
            (SELECT COUNT(*) FROM fg_salle) as nb_salle,
            (SELECT COUNT(*) FROM fg_module) as nb_module
            "
        );
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        $res = $res[0];
        $req->closeCursor();
        $this->nb_entreprise = $res["nb_entreprise"];
        $this->nb_effectif = $res['nb_effectif'];
        $this->nb_formateur = $res['nb_formateur'];
        $this->nb_opca = $res['nb_opca'];
        $this->nb_organisme_formation = $res['nb_organisme_formation'];
        $this->nb_programme = $res['nb_programme'];
        $this->nb_salle = $res['nb_salle'];
        $this->nb_module = $res['nb_module'];
    }

    public function getNbEntreprise()
    {
        return $this->nb_entreprise;
    }

    public function getNbEffectif()
    {
        return $this->nb_effectif;
    }

    public function getNbFormateur()
    {
        return $this->nb_formateur;
    }

    public function getNbOpca()
    {
        return $this->nb_opca;
    }

    public function getNbOrganismeFormation()
    {
        return $this->nb_organisme_formation;
    }

    public function getNbProgramme()
    {
        return $this->nb_programme;
    }

    public function getNbSalle()
    {
        return $this->nb_salle;
    }

    public function getNbModule()
    {
        return $this->nb_module;
    }
}
