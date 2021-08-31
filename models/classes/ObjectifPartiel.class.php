<?php

class ObjectifPartiel
{
    private $id;
    private $label;
    private $contenu_sequence;
    private $methode_pedagogique;
    private $technique_pedagogique;
    private $outils_supports;
    private $evaluation;
    private $date_creation;

    public function __construct($id, $label, $contenu_sequence, $methode_pedagogique, $technique_pedagogique, $outils_supports, $evaluation, $date_creation)
    {
        $this->id = $id;
        $this->label = $label;
        $this->contenu_sequence = $contenu_sequence;
        $this->methode_pedagogique = $methode_pedagogique;
        $this->technique_pedagogique = $technique_pedagogique;
        $this->outils_supports = $outils_supports;
        $this->evaluation = $evaluation;
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

    public function getContenu_Sequence()
    {
        return $this->contenu_sequence;
    }

    public function getMethode_Pedagogique()
    {
        return $this->methode_pedagogique;
    }

    public function getTechnique_Pedagogique()
    {
        return $this->technique_pedagogique;
    }

    public function getOutils_Supports()
    {
        return $this->outils_supports;
    }

    public function getEvaluation()
    {
        return $this->evaluation;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }
}
