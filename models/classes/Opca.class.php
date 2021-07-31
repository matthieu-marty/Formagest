<?php

class Opca
{
    private $id;
    private $nom;
    private $adresse;
    private $code_postal;
    private $ville;
    private $date_modification;
    private $date_creation;

    public function __construct($id, $nom, $adresse, $code_postal, $ville, $date_modification, $date_creation)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->date_modification = $date_modification;
        $this->date_creation = $date_creation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }


    public function getCode_Postal()
    {
        return $this->code_postal;
    }

    public function getVille()
    {
        return $this->ville;
    }


    public function getDate_Modification()
    {
        return $this->date_modification;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }
}
