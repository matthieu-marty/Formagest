<?php

class Module
{

    private $id;
    private $label;
    private $description;
    private $volume_horaire;

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
}
