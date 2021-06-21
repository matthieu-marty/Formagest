<?php

class OF
{
    private $id;
    private $nom_commercial;
    private $siret;
    private $adresse;
    private $code_postal;
    private $ville;
    private $telephone;
    private $mail;
    private $code_ape;
    private $numero_declaration;
    private $discipline;
    private $numero_qualiopi;
    private $tva;
    private $date_maj;
    private $date_creation;

    public function __construct($id, $nom_commercial, $siret, $adresse, $code_postal, $ville, $telephone, $mail, $code_ape, $numero_declaration, $discipline, $numero_qualiopi, $tva, $date_maj, $date_creation)
    {
        $this->id = $id;
        $this->nom_commercial = $nom_commercial;
        $this->siret = $siret;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->telephone = $telephone;
        $this->mail = $mail;
        $this->code_ape = $code_ape;
        $this->numero_declaration = $numero_declaration;
        $this->discipline = $discipline;
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

    public function getNom_Commercial()
    {
        return $this->nom_commercial;
    }
    public function setNom_Commercial($nom_commercial)
    {
        $this->nom_commercial = $nom_commercial;
    }

    public function getSiret()
    {
        return $this->siret;
    }
    public function setSiret($siret)
    {
        $this->siret = $siret;
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

    public function getCode_Ape()
    {
        return $this->code_ape;
    }
    public function setCode_Ape($code_ape)
    {
        $this->code_ape = $code_ape;
    }

    public function getNumero_Declaration()
    {
        return $this->numero_declaration;
    }
    public function setNumero_Declaration($numero_declaration)
    {
        $this->numero_declaration = $numero_declaration;
    }

    public function getDiscipline()
    {
        return $this->discipline;
    }
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;
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
