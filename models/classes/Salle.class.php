<?php

class Salle
{

    private $id;
    private $label;
    private $adresse;
    private $code_postal;
    private $ville;

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

    public function getVille()
    {
        return $this->ville;
    }
}
