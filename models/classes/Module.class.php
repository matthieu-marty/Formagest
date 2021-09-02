<?php

class Module
{
    private $id;
    private $label;
    private $date_creation;

    //// OBJECTIF PEDAGOGIQUE 1
    private $objectif_pedagogique_1;
    // OBJECTIF PARTIEL 1
    private $objectif_partiel_1;
    private $contenu_sequence_1;
    private $methode_pedagogique_1;
    private $technique_pedagogique_1;
    private $outils_supports_1;
    private $evaluation_1;
    // OBJECTIF PARTIEL 2
    private $objectif_partiel_2;
    private $contenu_sequence_2;
    private $methode_pedagogique_2;
    private $technique_pedagogique_2;
    private $outils_supports_2;
    private $evaluation_2;

    //// OBJECTIF PEDAGOGIQUE 2
    private $objectif_pedagogique_2;
    // OBJECTIF PARTIEL 3
    private $objectif_partiel_3;
    private $contenu_sequence_3;
    private $methode_pedagogique_3;
    private $technique_pedagogique_3;
    private $outils_supports_3;
    private $evaluation_3;
    // OBJECTIF PARTIEL 4
    private $objectif_partiel_4;
    private $contenu_sequence_4;
    private $methode_pedagogique_4;
    private $technique_pedagogique_4;
    private $outils_supports_4;
    private $evaluation_4;

    //// OBJECTIF PEDAGOGIQUE 3
    private $objectif_pedagogique_3;
    // OBJECTIF PARTIEL 5
    private $objectif_partiel_5;
    private $contenu_sequence_5;
    private $methode_pedagogique_5;
    private $technique_pedagogique_5;
    private $outils_supports_5;
    private $evaluation_5;
    // OBJECTIF PARTIEL 6
    private $objectif_partiel_6;
    private $contenu_sequence_6;
    private $methode_pedagogique_6;
    private $technique_pedagogique_6;
    private $outils_supports_6;
    private $evaluation_6;

    //// OBJECTIF PEDAGOGIQUE 4
    private $objectif_pedagogique_4;
    // OBJECTIF PARTIEL 7
    private $objectif_partiel_7;
    private $contenu_sequence_7;
    private $methode_pedagogique_7;
    private $technique_pedagogique_7;
    private $outils_supports_7;
    private $evaluation_7;
    // OBJECTIF PARTIEL 8
    private $objectif_partiel_8;
    private $contenu_sequence_8;
    private $methode_pedagogique_8;
    private $technique_pedagogique_8;
    private $outils_supports_8;
    private $evaluation_8;

    public function __construct(
        $id,
        $label,
        $date_creation,
        $objectif_pedagogique_1,
        $objectif_partiel_1,
        $contenu_sequence_1,
        $methode_pedagogique_1,
        $technique_pedagogique_1,
        $outils_supports_1,
        $evaluation_1,
        $objectif_partiel_2,
        $contenu_sequence_2,
        $methode_pedagogique_2,
        $technique_pedagogique_2,
        $outils_supports_2,
        $evaluation_2,
        $objectif_pedagogique_2,
        $objectif_partiel_3,
        $contenu_sequence_3,
        $methode_pedagogique_3,
        $technique_pedagogique_3,
        $outils_supports_3,
        $evaluation_3,
        $objectif_partiel_4,
        $contenu_sequence_4,
        $methode_pedagogique_4,
        $technique_pedagogique_4,
        $outils_supports_4,
        $evaluation_4,
        $objectif_pedagogique_3,
        $objectif_partiel_5,
        $contenu_sequence_5,
        $methode_pedagogique_5,
        $technique_pedagogique_5,
        $outils_supports_5,
        $evaluation_5,
        $objectif_partiel_6,
        $contenu_sequence_6,
        $methode_pedagogique_6,
        $technique_pedagogique_6,
        $outils_supports_6,
        $evaluation_6,
        $objectif_pedagogique_4,
        $objectif_partiel_7,
        $contenu_sequence_7,
        $methode_pedagogique_7,
        $technique_pedagogique_7,
        $outils_supports_7,
        $evaluation_7,
        $objectif_partiel_8,
        $contenu_sequence_8,
        $methode_pedagogique_8,
        $technique_pedagogique_8,
        $outils_supports_8,
        $evaluation_8
    ) {
        $this->id = $id;
        $this->label = $label;
        $this->date_creation = $date_creation;

        $this->objectif_pedagogique_1 = $objectif_pedagogique_1;
        $this->objectif_partiel_1 = $objectif_partiel_1;
        $this->contenu_sequence_1 = $contenu_sequence_1;
        $this->methode_pedagogique_1 = $methode_pedagogique_1;
        $this->technique_pedagogique_1 = $technique_pedagogique_1;
        $this->outils_supports_1 = $outils_supports_1;
        $this->evaluation_1 = $evaluation_1;
        $this->objectif_partiel_2 = $objectif_partiel_2;
        $this->contenu_sequence_2 = $contenu_sequence_2;
        $this->methode_pedagogique_2 = $methode_pedagogique_2;
        $this->technique_pedagogique_2 = $technique_pedagogique_2;
        $this->outils_supports_2 = $outils_supports_2;
        $this->evaluation_2 = $evaluation_2;
        $this->objectif_pedagogique_2 = $objectif_pedagogique_2;
        $this->objectif_partiel_3 = $objectif_partiel_3;
        $this->contenu_sequence_3 = $contenu_sequence_3;
        $this->methode_pedagogique_3 = $methode_pedagogique_3;
        $this->technique_pedagogique_3 = $technique_pedagogique_3;
        $this->outils_supports_3 = $outils_supports_3;
        $this->evaluation_3 = $evaluation_3;
        $this->objectif_partiel_4 = $objectif_partiel_4;
        $this->contenu_sequence_4 = $contenu_sequence_4;
        $this->methode_pedagogique_4 = $methode_pedagogique_4;
        $this->technique_pedagogique_4 = $technique_pedagogique_4;
        $this->outils_supports_4 = $outils_supports_4;
        $this->evaluation_4 = $evaluation_4;
        $this->objectif_pedagogique_3 = $objectif_pedagogique_3;
        $this->objectif_partiel_5 = $objectif_partiel_5;
        $this->contenu_sequence_5 = $contenu_sequence_5;
        $this->methode_pedagogique_5 = $methode_pedagogique_5;
        $this->technique_pedagogique_5 = $technique_pedagogique_5;
        $this->outils_supports_5 = $outils_supports_5;
        $this->evaluation_5 = $evaluation_5;
        $this->objectif_partiel_6 = $objectif_partiel_6;
        $this->contenu_sequence_6 = $contenu_sequence_6;
        $this->methode_pedagogique_6 = $methode_pedagogique_6;
        $this->technique_pedagogique_6 = $technique_pedagogique_6;
        $this->outils_supports_6 = $outils_supports_6;
        $this->evaluation_6 = $evaluation_6;
        $this->objectif_pedagogique_4 = $objectif_pedagogique_4;
        $this->objectif_partiel_7 = $objectif_partiel_7;
        $this->contenu_sequence_7 = $contenu_sequence_7;
        $this->methode_pedagogique_7 = $methode_pedagogique_7;
        $this->technique_pedagogique_7 = $technique_pedagogique_7;
        $this->outils_supports_7 = $outils_supports_7;
        $this->evaluation_7 = $evaluation_7;
        $this->objectif_partiel_8 = $objectif_partiel_8;
        $this->contenu_sequence_8 = $contenu_sequence_8;
        $this->methode_pedagogique_8 = $methode_pedagogique_8;
        $this->technique_pedagogique_8 = $technique_pedagogique_8;
        $this->outils_supports_8 = $outils_supports_8;
        $this->evaluation_8 = $evaluation_8;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getDate_Creation()
    {
        return $this->date_creation;
    }

    public function getObjectif_Pedagogique_1()
    {
        return $this->objectif_pedagogique_1;
    }
    public function getObjectif_Partiel_1()
    {
        return $this->objectif_partiel_1;
    }
    public function getContenu_Sequence_1()
    {
        return $this->contenu_sequence_1;
    }
    public function getMethode_Pedagogique_1()
    {
        return $this->methode_pedagogique_1;
    }
    public function getTechnique_Pedagogique_1()
    {
        return $this->technique_pedagogique_1;
    }
    public function getOutils_Supports_1()
    {
        return $this->outils_supports_1;
    }
    public function getEvaluation_1()
    {
        return $this->evaluation_1;
    }
    public function getObjectif_Partiel_2()
    {
        return $this->objectif_partiel_2;
    }
    public function getContenu_Sequence_2()
    {
        return $this->contenu_sequence_2;
    }
    public function getMethode_Pedagogique_2()
    {
        return $this->methode_pedagogique_2;
    }
    public function getTechnique_Pedagogique_2()
    {
        return $this->technique_pedagogique_2;
    }
    public function getOutils_Supports_2()
    {
        return $this->outils_supports_2;
    }
    public function getEvaluation_2()
    {
        return $this->evaluation_2;
    }
    public function getObjectif_Pedagogique_2()
    {
        return $this->objectif_pedagogique_2;
    }
    public function getObjectif_Partiel_3()
    {
        return $this->objectif_partiel_3;
    }
    public function getContenu_Sequence_3()
    {
        return $this->contenu_sequence_3;
    }
    public function getMethode_Pedagogique_3()
    {
        return $this->methode_pedagogique_3;
    }
    public function getTechnique_Pedagogique_3()
    {
        return $this->technique_pedagogique_3;
    }
    public function getOutils_Supports_3()
    {
        return $this->outils_supports_3;
    }
    public function getEvaluation_3()
    {
        return $this->evaluation_3;
    }
    public function getObjectif_Partiel_4()
    {
        return $this->objectif_partiel_4;
    }
    public function getContenu_Sequence_4()
    {
        return $this->contenu_sequence_4;
    }
    public function getMethode_Pedagogique_4()
    {
        return $this->methode_pedagogique_4;
    }
    public function getTechnique_Pedagogique_4()
    {
        return $this->technique_pedagogique_4;
    }
    public function getOutils_Supports_4()
    {
        return $this->outils_supports_4;
    }
    public function getEvaluation_4()
    {
        return $this->evaluation_4;
    }
    public function getObjectif_Pedagogique_3()
    {
        return $this->objectif_pedagogique_3;
    }
    public function getObjectif_Partiel_5()
    {
        return $this->objectif_partiel_5;
    }
    public function getContenu_Sequence_5()
    {
        return $this->contenu_sequence_5;
    }
    public function getMethode_Pedagogique_5()
    {
        return $this->methode_pedagogique_5;
    }
    public function getTechnique_Pedagogique_5()
    {
        return $this->technique_pedagogique_5;
    }
    public function getOutils_Supports_5()
    {
        return $this->outils_supports_5;
    }
    public function getEvaluation_5()
    {
        return $this->evaluation_5;
    }
    public function getObjectif_Partiel_6()
    {
        return $this->objectif_partiel_6;
    }
    public function getContenu_Sequence_6()
    {
        return $this->contenu_sequence_6;
    }
    public function getMethode_Pedagogique_6()
    {
        return $this->methode_pedagogique_6;
    }
    public function getTechnique_Pedagogique_6()
    {
        return $this->technique_pedagogique_6;
    }
    public function getOutils_Supports_6()
    {
        return $this->outils_supports_6;
    }
    public function getEvaluation_6()
    {
        return $this->evaluation_6;
    }
    public function getObjectif_Pedagogique_4()
    {
        return $this->objectif_pedagogique_4;
    }
    public function getObjectif_Partiel_7()
    {
        return $this->objectif_partiel_7;
    }
    public function getContenu_Sequence_7()
    {
        return $this->contenu_sequence_7;
    }
    public function getMethode_Pedagogique_7()
    {
        return $this->methode_pedagogique_7;
    }
    public function getTechnique_Pedagogique_7()
    {
        return $this->technique_pedagogique_7;
    }
    public function getOutils_Supports_7()
    {
        return $this->outils_supports_7;
    }
    public function getEvaluation_7()
    {
        return $this->evaluation_7;
    }
    public function getObjectif_Partiel_8()
    {
        return $this->objectif_partiel_8;
    }
    public function getContenu_Sequence_8()
    {
        return $this->contenu_sequence_8;
    }
    public function getMethode_Pedagogique_8()
    {
        return $this->methode_pedagogique_8;
    }
    public function getTechnique_Pedagogique_8()
    {
        return $this->technique_pedagogique_8;
    }
    public function getOutils_Supports_8()
    {
        return $this->outils_supports_8;
    }
    public function getEvaluation_8()
    {
        return $this->evaluation_8;
    }
}
