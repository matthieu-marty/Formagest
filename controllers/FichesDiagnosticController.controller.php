<?php
require_once 'models/managers/EntrepriseManager.class.php';
require_once 'models/managers/FichesDiagnosticManager.class.php';

class FichesDiagnosticController
{
    private $fiches_diagnostic_manager;
    private $entreprise_manager;

    public function __construct()
    {
        $this->entreprise_manager = new EntrepriseManager;
        $this->entreprise_manager->chargementEntreprises();
        $this->fiches_diagnostic_manager = new FichesDiagnosticManager;
        $this->fiches_diagnostic_manager->chargementFichesDiagnostic();
    }

    public function creerFicheDiagnostic($id_entreprise)
    {
        $id = $id_entreprise;
        require_once 'views/forms/diagnostic.form.view.php';
    }
}
