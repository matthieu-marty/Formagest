<?php

class Module
{
    private $id;
    private $label;
    private $id_objectif_pedagogique_1;
    private $id_objectif_pedagogique_2;
    private $id_objectif_pedagogique_3;
    private $id_objectif_pedagogique_4;
    private $date_creation;

    public function __construct($id, $label, $id_objectif_pedagogique_1, $id_objectif_pedagogique_2, $id_objectif_pedagogique_3, $id_objectif_pedagogique_4, $date_creation)
    {
        $this->id = $id;
        $this->label = $label;
        $this->id_objectif_pedagogique_1 = $id_objectif_pedagogique_1;
        $this->id_objectif_pedagogique_2 = $id_objectif_pedagogique_2;
        $this->id_objectif_pedagogique_3 = $id_objectif_pedagogique_3;
        $this->id_objectif_pedagogique_4 = $id_objectif_pedagogique_4;
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

    public function getId_Objectif_Pedagogique_1()
    {
        return $this->objectif_pedagogique_1;
    }

    public function getId_Objectif_Pedagogique_2()
    {
        return $this->objectif_pedagogique_2;
    }

    public function getId_Objectif_Pedagogique_3()
    {
        return $this->objectif_pedagogique_3;
    }

    public function getId_Objectif_Pedagogique_4()
    {
        return $this->objectif_pedagogique_4;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }
}
