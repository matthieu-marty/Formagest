<?php
require_once 'models/managers/EntrepriseManager.class.php';
require_once 'models/managers/FicheDiagnosticManager.class.php';

class FicheDiagnosticController
{
    private $fiche_diagnostic_manager;
    private $entreprise_manager;

    public function __construct()
    {
        $this->entreprise_manager = new EntrepriseManager;
        $this->entreprise_manager->chargementEntreprises();
        $this->fiche_diagnostic_manager = new FicheDiagnosticManager;
        $this->fiche_diagnostic_manager->chargementFichesDiagnostic();
    }

    public function creerFicheDiagnostic($id_entreprise)
    {
        $id = $id_entreprise;
        require_once 'views/forms/diagnostic.form.view.php';
    }

    public function enregistrerFicheDiagnostic($id_entreprise)
    {
        $res = $this->fiche_diagnostic_manager->enregistrerFicheDiagnosticDB(
            $id_entreprise,
            $_POST['communication'],
            $_POST['web'],
            $_POST['bureautique'],
            $_POST['marketing'],
            $_POST['comptabilite'],
            $_POST['management'],
            $_POST['techniques_de_vente'],
            $_POST['restauration'],
            $_POST['langues'],
            $_POST['pratiques'],
            $_POST['connaissances'],
            $_POST['aptitudes'],
            $_POST['etude_de_marche'],
            $_POST['clientele'],
            $_POST['type_clientele'],
            $_POST['nationalites'],
            $_POST['logo'],
            $_POST['charte_graphique'],
            $_POST['cartes_visites'],
            $_POST['flyers'],
            $_POST['fichier_client'],
            $_POST['quantite'],
            $_POST['mail'],
            $_POST['sms'],
            $_POST['outils'],
            $_POST['page_facebook'],
            $_POST['abonnes_facebook'],
            $_POST['publicite_facebook'],
            $_POST['page_instagram'],
            $_POST['abonnes_instagram'],
            $_POST['publicite_instagram'],
            $_POST['niveau_windows'],
            $_POST['niveau_mail'],
            $_POST['niveau_word'],
            $_POST['niveau_excel'],
            $_POST['site_web'],
            $_POST['date_creation_site_web'],
            $_POST['e_commerce'],
            $_POST['google_my_business'],
            $_POST['solocal'],
            $_POST['programme_fidelite'],
            $_POST['calendrier_commercial'],
            $_POST['chiffre_affaires'],
            $_POST['tableau_de_bords'],
            $_POST['bilan_comptable'],
            $_POST['cabinet_comptable'],
            $_POST['logiciel_comptable'],
            $_POST['niveau_anglais'],
            $_POST['niveau_espagnol'],
            $_POST['niveau_italien'],
            $_POST['niveau_allemand'],
            $_POST['date_creation'],
            $_POST['date_creation']
        );
        if ($res === true) {
            header('location:' . URL . 'entreprises/read/' . $id_entreprise);
        } else {
            header('location:' . URL . 'erreur');
        }
    }


    public function afficherFicheDiagnostic($id_fiche_diagnostic)
    {
        $fiche_diagnostic = $this->fiche_diagnostic_manager->getFicheDiagnosticById($id_fiche_diagnostic);
        require_once "views/ficheDiagnostic.view.php";
    }
}
