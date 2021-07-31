<?php
require_once 'models/managers/EntrepriseManager.class.php';
require_once 'models/managers/EffectifManager.class.php';
require_once 'models/managers/FicheDiagnosticManager.class.php';

class EntrepriseController
{
    private $entreprise_manager;
    private $effectif_manager;
    private $fiche_diagnostic_manager;

    public function __construct()
    {
        $this->entreprise_manager = new EntrepriseManager;
        $this->entreprise_manager->chargementEntreprises();
        $this->effectif_manager = new EffectifManager;
        $this->effectif_manager->chargementEffectifs();
        $this->fiche_diagnostic_manager = new FicheDiagnosticManager;
        $this->fiche_diagnostic_manager->chargementFichesDiagnostic();
    }

    public function afficherEntreprises()
    {
        $entreprises = $this->entreprise_manager->getEntreprises();
        require_once 'views/entreprises.view.php';
    }

    public function afficherEntreprise($id_entreprise)
    {
        $effectifs_entreprise = $this->effectif_manager->getEffectifsByEntreprise($id_entreprise);
        $entreprise = $this->entreprise_manager->getEntrepriseById($id_entreprise);
        $fiches_diagnostic = $this->fiche_diagnostic_manager->getFichesDiagnosticByEntreprise($id_entreprise);
        require_once 'views/entreprise.view.php';
    }

    public function afficherRechercheEntreprise($string)
    {
        if (!empty($string)) {
            $fichier_entreprises = $this->entreprise_manager->getEntreprises();
            $entreprises = [];
            foreach ($fichier_entreprises as $entreprise) {
                if (stristr($entreprise->getEnseigne(), $string) != false | stristr($entreprise->getVille(), $string) != false | stristr($entreprise->getCode_Postal(), $string) != false) {
                    $entreprises[] = $entreprise;
                }
            }
            require_once 'views/entreprises.view.php';
        } else {
            $this->afficherEntreprises();
        }
    }

    public function creerEntreprise()
    {
        require_once 'views/createEntreprise.view.php';
    }

    public function enregistrerEntreprise()
    {
        $this->entreprise_manager->enregistrerEntrepriseDB(
            $_POST['enseigne'],
            $_POST['siret'],
            $_POST['code_naf'],
            $_POST['forme_juridique'],
            $_POST['activite'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['date_creation'],
            $_POST['ville'],
            $_POST['telephone'],
            $_POST['mail']
        );
        header('location:' . URL . 'entreprises');
    }

    public function supprimerEntreprise($id_entreprise)
    {
        $res = $this->entreprise_manager->supprimerEntrepriseDB($id_entreprise);
        if ($res === true) {
            header('location:' . URL . 'entreprises');
        } else {
            header('location:' . URL . 'erreur');
        }
    }

    public function modifierEntreprise($id_entreprise)
    {
        $entreprise = $this->entreprise_manager->getEntrepriseById($id_entreprise);
        require_once 'views/editEntreprise.view.php';
    }

    public function actualiserEntreprise($id_entreprise)
    {
        $res = $this->entreprise_manager->actualiserEntrepriseDB(
            $id_entreprise,
            $_POST['enseigne'],
            $_POST['siret'],
            $_POST['code_naf'],
            $_POST['forme_juridique'],
            $_POST['activite'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['date_creation'],
            $_POST['ville'],
            $_POST['telephone'],
            $_POST['mail']
        );
        if ($res === true) {
            header('location:' . URL . 'entreprises');
        } else {
            header('location:' . URL . 'erreur');
        }
    }
}
