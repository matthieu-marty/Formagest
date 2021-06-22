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

    public function enregistrerFicheDiagnostic($id_entreprise)
    {
        $res = $this->fiches_diagnostic_manager->enregistrerFicheDiagnosticDB(
            $id_entreprise,
            $_POST['id'],
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
            $_POST['date'],
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
            $_POST['publicte_instagram'],
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
            $_POST['anglais'],
            $_POST['niveau_espagnol'],
            $_POST['niveau_italien'],
            $_POST['niveau_allemand'],
            $_POST['date_creation'],
            $_POST['date_maj']
        );
        if ($res === true) {
            header('location:' . URL . 'entreprises/read/' . $id_entreprise);
        } else {
            header('location:' . URL . 'erreur');
        }
    }
}
