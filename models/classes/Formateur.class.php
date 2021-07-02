<?php

class Formateur
{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $code_postal;
    private $ville;
    private $telephone;
    private $mail;
    private $id_organisme_formation;
    private $discipline;
    private $code_naf;
    private $numero_qualiopi;
    private $tva;
    private $date_maj;
    private $date_creation;

    public function __construct($id, $nom, $prenom, $adresse, $code_postal, $ville, $telephone, $mail, $id_organisme_formation, $discipline, $code_naf, $numero_qualiopi, $tva, $date_maj, $date_creation)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->telephone = $telephone;
        $this->mail = $mail;
        $this->id_organisme_formation = $id_organisme_formation;
        $this->discipline = $discipline;
        $this->code_naf = $code_naf;
        $this->numero_qualiopi = $numero_qualiopi;
        $this->tva = $tva;
        $this->date_maj = $date_maj;
        $this->date_creation = $date_creation;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getCode_Postal()
    {
        return $this->code_postal;
    }
    public function setCode_Postal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getMail()
    {
        return $this->mail;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getId_Organisme_Formation()
    {
        return $this->id_organisme_formation;
    }
    public function setId_Organisme_Formation($id_organisme_formation)
    {
        $this->id_organisme_formation = $id_organisme_formation;
    }

    public function getDiscipline()
    {
        return $this->discipline;
    }
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;
    }

    public function getCode_Naf()
    {
        return $this->code_naf;
    }
    public function setCode_Naf($code_naf)
    {
        $this->ccoe_naf = $code_naf;
    }

    public function getNumero_Qualiopi()
    {
        return $this->numero_qualiopi;
    }
    public function setNumero_Qualiopi($numero_qualiopi)
    {
        $this->numero_qualiopi = $numero_qualiopi;
    }

    public function getTva()
    {
        return $this->tva;
    }
    public function setTva($tva)
    {
        $this->tva = $tva;
    }

    public function getDate_Maj()
    {
        return $this->date_maj;
    }
    public function setDate_Maj($date_maj)
    {
        $this->date_maj = $date_maj;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }
    public function setDate_Creation($date_creation)
    {
        $this->date_creation = $date_creation;
    }
}
