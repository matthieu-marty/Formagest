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
}