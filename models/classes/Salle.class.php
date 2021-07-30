<?php

class Salle
{

    private $id;
    private $label;
    private $adresse;
    private $code_postal;
    private $ville;
    private $date_creation;
    private $date_modification;

    public function __construct($id, $label, $adresse, $code_postal, $ville, $date_creation, $date_modification)
    {
        $this->id = $id;
        $this->label = $label;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->date_creation = $date_creation;
        $this->date_modification = $date_modification;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
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

    public function getDate_Creation()
    {
        return $this->date_creation;
    }

    public function getDate_Modification()
    {
        return $this->date_modification;
    }
}
