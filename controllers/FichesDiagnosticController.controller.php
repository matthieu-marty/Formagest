<?php
require_once 'models/managers/EntrepriseManager.class.php';
require_once 'models/managers/FicheDiagnosticManager.class.php';

class FichesDiagnosticController
{
    private $fiche_diagnostic_manager;
    private $entreprise_manager;

    public function __construct()
    {
        $this->entreprise_manager = new EntrepriseManager;
        $this->entreprise_manager->chargementEntreprises();
        $this->fiche_diagnostic_manager = new FichesDiagnosticManager;
        $this->fiches_diagnostic_manager->chargementFichesDiagnostic();
    }

    public function creerFicheDiagnostic($id_entreprise)
    {
        $id = $id_entreprise;
        require_once 'views/forms/diagnostic.form.view.php';
    }
}
