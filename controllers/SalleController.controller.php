<?php
require_once 'models/managers/SalleManager.class.php';

class SalleController
{
    private $salle_manager;

    public function __construct()
    {
        $this->salle_manager = new SalleManager;
        $this->salle_manager->chargementSalles();
    }

    public function afficherSalles()
    {
        $salles = $this->salle_manager->getSalles();
        require_once 'views/salles.view.php';
    }

    public function afficherSalle($id_salle)
    {
        $salle = $this->salle_manager->getSalleById($id_salle);
        require_once 'views/salle.view.php';
    }

    public function supprimerSalle($id_salle)
    {
        $res = $this->salle_manager->supprimerSalleDB($id_salle);
        if ($res === true) {
            header('location:' . URL . 'salles');
        } else {
            header('location:' . URL . 'erreur');
        }
    }
}
