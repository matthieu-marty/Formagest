<?php

class Opca
{
    private $id;
    private $nom;
    private $adresse;
    private $code_postal;
    private $ville;

    public function __constuct($id, $nom, $adresse, $code_postal, $ville)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function setCode_postal($code_postal)
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

    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
}
