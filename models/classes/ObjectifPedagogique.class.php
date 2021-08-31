<?php

class ObjectifPedagogique
{
    private $id;
    private $label;
    private $id_objectif_partiel_1;
    private $id_objectif_partiel_2;
    private $id_objectif_partiel_3;
    private $id_objectif_partiel_4;
    private $date_creation;

    public function __construct($id, $label, $id_objectif_partiel_1, $id_objectif_partiel_2, $id_objectif_partiel_3, $id_objectif_partiel_4, $date_creation)
    {
        $this->id = $id;
        $this->label = $label;
        $this->id_objectif_partiel_1 = $id_objectif_partiel_1;
        $this->id_objectif_partiel_2 = $id_objectif_partiel_2;
        $this->id_objectif_partiel_3 = $id_objectif_partiel_3;
        $this->id_objecitf_partiel_4 = $id_objectif_partiel_4;
        $this->date_creation = $date_creation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getId_Objectif_Partiel_1()
    {
        return $this->id_objectif_partiel_1;
    }

    public function getId_Objectif_Partiel_2()
    {
        return $this->id_objectif_partiel_2;
    }

    public function getId_Objectif_Partiel_3()
    {
        return $this->id_objectif_partiel_3;
    }

    public function getId_Objectif_Partiel_4()
    {
        return $this->id_objectif_partiel_4;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }
}
