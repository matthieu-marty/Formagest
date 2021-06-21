<?php

class Formation
{
    private $id;
    private $date_debut;
    private $date_fin;
    private $reference;
    private $id_of;
    private $id_stagiaire;
    private $id_entreprise;
    private $programme;
    private $total_h;

    public function __construct($id, $date_debut, $date_fin, $reference, $id_of, $id_stagiaire, $id_entreprise, $programme, $total_h)
    {
        $this->id = $id;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->reference = $reference;
        $this->id_of = $id_of;
        $this->id_stagiaire = $id_stagiaire;
        $this->id_entreprise = $id_entreprise;
        $this->programme = $programme;
        $this->total_h = $total_h;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate_Debut($date_debut)
    {
        return $this->date_debut;
    }
    public function setDate_Debut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    public function getDate_Fin()
    {
        return $this->date_fin;
    }
    public function setDate_Fin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    public function getReference()
    {
        return $this->reference;
    }
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function getId_Of()
    {
        return $this->id_of;
    }
    public function setIf_Of($id_of)
    {
        $this->id_of = $id_of;
    }

    public function getId_Stagiaire()
    {
        return $this->id_stagiaire;
    }
    public function setId_Stagiaire($id_stagiaire)
    {
        $this->id_stagiaire = $id_stagiaire;
    }

    public function getId_Entreprise()
    {
        return $this->id_entreprise;
    }
    public function setId_Entreprise($id_entreprise)
    {
        $this->id_entreprise;
    }

    public function getProgramme()
    {
        return $this->programme;
    }
    public function setIdProgramme($id_programme)
    {
        $this->id_programme = $id_programme;
    }

    public function getTotal_H()
    {
        return $this->total_h;
    }
    public function setTotal_H($total_h)
    {
        $this->total_H = $total_h;
    }
}
