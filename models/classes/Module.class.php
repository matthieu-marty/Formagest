<?php

class Module
{

    private $id;
    private $label;
    private $description;
    private $volume_horaire;
    private $date_creation;
    private $date_modification;

    public function __construct($id, $label, $description, $volume_horaire, $date_creation, $date_modification)
    {
        $this->id = $id;
        $this->label = $label;
        $this->description = $description;
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
