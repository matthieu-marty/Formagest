<?php 

class Programme 
{

    private $id;
    private $label;
    private $id_module_1;
    private $id_module_2;
    private $id_module_3;
    private $id_module_4;
    private $date_creation;

    public function __construct($id, $label, $id_module_1, $id_module_2, $id_module_3, $id_module_4, $date_creation)
    {
        $this->id = $id;
        $this->label = $label;
        $this->id_module_1 = $id_module_1;
        $this->id_module_2 = $id_module_2;
        $this->id_module_3 = $id_module_3;
        $this->id_module_4 = $id_module_4;
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

    public function getId_Module_1()
    {
        return $this->id_module_1;
    }

    public function getId_Module_2()
    {
        return $this->id_module_2;
    }

    public function getId_Module_3()
    {
        return $this->id_module_3;
    }

    public function getId_Module_4()
    {
        return $this->id_module_4;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }


}