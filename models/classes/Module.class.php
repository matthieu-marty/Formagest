<?php

class Module
{

    private $id;
    private $label;
    private $description;
    private $objectif_pedagogique;
    private $volume_horaire;
    private $date_creation;
    private $date_modification;

    public function __construct($id, $label, $description, $objectif_pedagogique, $volume_horaire, $date_creation, $date_modification)
    {
        $this->id = $id;
        $this->label = $label;
        $this->description = $description;
        $this->objectif_pedagogique = $objectif_pedagogique;
        $this->volume_horaire = $volume_horaire;
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

    public function getDescription()
    {
        return $this->description;
    }


    public function getobjectif_Pedagogique()
    {
        return $this->objectif_pedagogique;
    }

    public function getVolume_Horaire()
    {
        return $this->volume_horaire;
    }

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function getDate_Modification()
    {
        return $this->date_modification;
    }
}
