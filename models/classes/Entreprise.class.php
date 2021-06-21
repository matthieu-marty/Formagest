<?php

class Entreprise
{
    private $id;
    private $enseigne;
    private $siret;
    private $code_naf;
    private $forme_juridique;
    private $activite;
    private $adresse;
    private $code_postal;
    private $ville;
    private $date_maj;
    private $date_creation;
    private $mail;
    private $telephone;

    public function __construct($id, $enseigne, $siret, $code_naf, $forme_juridique, $activite, $adresse, $code_postal, $ville, $date_maj, $date_creation, $mail, $telephone)
    {
        $this->id = $id;
        $this->enseigne = $enseigne;
        $this->siret = $siret;
        $this->code_naf = $code_naf;
        $this->forme_juridique = $forme_juridique;
        $this->activite = $activite;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->date_maj = $date_maj;
        $this->date_creation = $date_creation;
        $this->mail = $mail;
        $this->telephone = $telephone;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEnseigne()
    {
        return $this->enseigne;
    }
    public function setEnseigne($enseigne)
    {
        $this->enseigne = $enseigne;
    }

    public function getSiret()
    {
        return $this->siret;
    }
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }

    public function getCode_Naf()
    {
        return $this->code_naf;
    }
    public function setCode_Naf($code_naf)
    {
        $this->code_naf = $code_naf;
    }


    public function getForme_Juridique()
    {
        return $this->forme_juridique;
    }
    public function setforme_Juridique($forme_juridique)
    {
        $this->forme_juridique = $forme_juridique;
    }


    public function getActivite()
    {
        return $this->activite;
    }
    public function setActivite($activite)
    {
        $this->activite = $activite;
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
        $this->vile = $ville;
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

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
}
