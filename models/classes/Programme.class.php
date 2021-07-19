<?php 

class Programme 
{

    private $id;
    private $reference;
    private $label;
    private $contenu;

    public function __construct($id, $reference, $label, $contenu)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->label = $label;
        $this->contenu = $contenu;

    }
}