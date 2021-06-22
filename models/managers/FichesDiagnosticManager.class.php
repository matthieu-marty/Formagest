<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/FicheDiagnostic.class.php';

class FichesDiagnosticManager extends Model
{
    private $fiches_diagnostic;

    public function addFicheDiagnostic($fiche_diagnostic)
    {
        $this->fiches_diagnostic[] = $fiche_diagnostic;
    }

    public function getFichesDiagnostic()
    {
        return $this->fiches_diagnostic;
    }

    public function chargementFichesDiagnostic()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_fiche_diagnostic");
        $req->execute();
        $fiches = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($fiches as $fiche) {
            $f = new FicheDiagnostic(
                $fiche['id'],
                $fiche['communication'],
                $fiche['web'],
                $fiche['bureautique'],
                $fiche['marketing'],
                $fiche['comptabilite'],
                $fiche['management'],
                $fiche['techniques_de_vente'],
                $fiche['restauration'],
                $fiche['langues'],
                $fiche['pratiques'],
                $fiche['connaissances'],
                $fiche['aptitudes'],
                $fiche['date'],
                $fiche['etude_de_marche'],
                $fiche['clientele'],
                $fiche['type_clientele'],
                $fiche['nationalites'],
                $fiche['logo'],
                $fiche['charte_graphique'],
                $fiche['cartes_visites'],
                $fiche['flyers'],
                $fiche['fichier_client'],
                $fiche['quantite'],
                $fiche['mail'],
                $fiche['sms'],
                $fiche['outils'],
                $fiche['page_facebook'],
                $fiche['abonnes_facebook'],
                $fiche['publicite_facebook'],
                $fiche['page_instagram'],
                $fiche['abonnes_instagram'],
                $fiche['publicte_instagram'],
                $fiche['niveau_windows'],
                $fiche['niveau_mail'],
                $fiche['niveau_word'],
                $fiche['niveau_excel'],
                $fiche['site_web'],
                $fiche['date_creation_site_web'],
                $fiche['e_commerce'],
                $fiche['google_my_business'],
                $fiche['solocal'],
                $fiche['programme_fidelite'],
                $fiche['calendrier_commercial'],
                $fiche['chiffres_affaires'],
                $fiche['tableau_de_bords'],
                $fiche['bilan_comptable'],
                $fiche['cabinet_comptable'],
                $fiche['logiciel_comptable'],
                $fiche['anglais'],
                $fiche['niveau_espagnol'],
                $fiche['niveau_italien'],
                $fiche['niveau_allemand'],
                $fiche['id_entreprise'],
                $fiche['date_creation'],
                $fiche['date_maj']
            );
            $this->addFicheDiagnostic($f);
        }
    }
}
