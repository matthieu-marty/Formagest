<?php

class Effectif
{
    private $id;
    private $nom;
    private $prenom;
    private $nom_naissance;
    private $genre;
    private $date_naissance;
    private $telephone;
    private $mail;
    private $securite_sociale;
    private $fonction;
    private $adresse;
    private $code_postal;
    private $ville;
    private $id_entreprise;
    private $id_opca;
    private $diplome;
    private $date_maj;
    private $date_creation;

    public function __construct($id, $nom, $prenom, $nom_naissance, $genre, $date_naissance, $telephone, $mail, $securite_sociale, $fonction, $adresse, $code_postal, $ville, $id_entreprise, $id_opca, $diplome, $date_maj, $date_creation)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nom_naissance = $nom_naissance;
        $this->genre = $genre;
        $this->date_naissance = $date_naissance;
        $this->telephone = $telephone;
        $this->mail = $mail;
        $this->securite_sociale = $securite_sociale;
        $this->fonction = $fonction;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->id_entreprise = $id_entreprise;
        $this->id_opca = $id_opca;
        $this->diplome = $diplome;
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

    public function getNom_Naissance()
    {
        return $this->nom_naissance;
    }
    public function setNom_Naissance($nom_naissance)
    {
        $this->nom_naissance = $nom_naissance;
    }

    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getDate_Naissance()
    {
        return $this->date_naissance;
    }
    public function setDate_Naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
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

    public function getSecurite_Sociale()
    {
        return $this->securite_sociale;
    }
    public function setSecurite_Sociale($securite_sociale)
    {
        $this->securite_sociale = $securite_sociale;
    }

    public function getFonction()
    {
        return $this->fonction;
    }
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
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

    public function getId_Entreprise()
    {
        return $this->id_entreprise;
    }
    public function setId_Entreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;
    }

    public function getId_Opca()
    {
        return $this->id_opca;
    }
    public function setId_OPCA($id_opca)
    {
        $this->id_opca = $id_opca;
    }

    public function getDiplome()
    {
        return $this->diplome;
    }
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
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
