<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/FicheDiagnostic.class.php';

class FicheDiagnosticManager extends Model
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
        $req = $this->getBDD()->prepare("SELECT * FROM fg_fiche_diagnostic ORDER BY date_creation DESC");
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
                $fiche['publicite_instagram'],
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
                $fiche['chiffre_affaires'],
                $fiche['tableau_de_bords'],
                $fiche['bilan_comptable'],
                $fiche['cabinet_comptable'],
                $fiche['logiciel_comptable'],
                $fiche['niveau_anglais'],
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

    public function enregistrerFicheDiagnosticDB(
        $id_entreprise,
        $communication,
        $web,
        $bureautique,
        $marketing,
        $comptabilite,
        $management,
        $techniques_de_vente,
        $restauration,
        $langues,
        $pratiques,
        $connaissances,
        $aptitudes,
        $etude_de_marche,
        $clientele,
        $type_clientele,
        $nationalites,
        $logo,
        $charte_graphique,
        $cartes_visites,
        $flyers,
        $fichier_client,
        $quantite,
        $mail,
        $sms,
        $outils,
        $page_facebook,
        $abonnes_facebook,
        $publicite_facebook,
        $page_instagram,
        $abonnes_instagram,
        $publicite_instagram,
        $niveau_windows,
        $niveau_mail,
        $niveau_word,
        $niveau_excel,
        $site_web,
        $date_creation_site_web,
        $e_commerce,
        $google_my_business,
        $solocal,
        $programme_fidelite,
        $calendrier_commercial,
        $chiffre_affaires,
        $tableau_de_bords,
        $bilan_comptable,
        $cabinet_comptable,
        $logiciel_comptable,
        $niveau_anglais,
        $niveau_espagnol,
        $niveau_italien,
        $niveau_allemand,
        $date_creation,
        $date_maj
    ) {
        if (!empty($date_creation) && !empty($id_entreprise)) {
            $data = [
                'communication' => $communication,
                'web' => $web,
                'bureautique' => $bureautique,
                'marketing' => $marketing,
                'comptabilite' => $comptabilite,
                'management' => $management,
                'techniques_de_vente' => $techniques_de_vente,
                'restauration' => $restauration,
                'langues' => $langues,
                'pratiques' => $pratiques,
                'connaissances' => $connaissances,
                'aptitudes' => $aptitudes,
                'etude_de_marche' => $etude_de_marche,
                'clientele' => $clientele,
                'type_clientele' => $type_clientele,
                'nationalites' => $nationalites,
                'logo' => $logo,
                'charte_graphique' => $charte_graphique,
                'cartes_visites' => $cartes_visites,
                'flyers' => $flyers,
                'fichier_client' => $fichier_client,
                'quantite' => $quantite,
                'mail' => $mail,
                'sms' => $sms,
                'outils' => $outils,
                'page_facebook' => $page_facebook,
                'abonnes_facebook' => $abonnes_facebook,
                'publicite_facebook' => $publicite_facebook,
                'page_instagram' => $page_instagram,
                'abonnes_instagram' => $abonnes_instagram,
                'publicite_instagram' => $publicite_instagram,
                'niveau_windows' => $niveau_windows,
                'niveau_mail' => $niveau_mail,
                'niveau_word' => $niveau_word,
                'niveau_excel' => $niveau_excel,
                'site_web' => $site_web,
                'date_creation_site_web' => $date_creation_site_web,
                'e_commerce' => $e_commerce,
                'google_my_business' => $google_my_business,
                'solocal' => $solocal,
                'programme_fidelite' => $programme_fidelite,
                'calendrier_commercial' => $calendrier_commercial,
                'chiffre_affaires' => $chiffre_affaires,
                'tableau_de_bords' => $tableau_de_bords,
                'bilan_comptable' => $bilan_comptable,
                'cabinet_comptable' => $cabinet_comptable,
                'logiciel_comptable' => $logiciel_comptable,
                'niveau_anglais' => $niveau_anglais,
                'niveau_espagnol' => $niveau_espagnol,
                'niveau_italien' => $niveau_italien,
                'niveau_allemand' => $niveau_allemand,
                'id_entreprise' => $id_entreprise,
                'date_creation' => $date_creation,
                'date_maj' => $date_maj
            ];

            $req = $this->getBDD()->prepare(
                "INSERT INTO fg_fiche_diagnostic 
                (communication,
                web,
                bureautique,
                marketing,
                comptabilite,
                management,
                techniques_de_vente,
                restauration,
                langues,
                pratiques,
                connaissances,
                aptitudes,
                etude_de_marche,
                clientele,
                type_clientele,
                nationalites,
                logo,
                charte_graphique,
                cartes_visites,
                flyers,
                fichier_client,
                quantite,
                mail,
                sms,
                outils,
                page_facebook,
                abonnes_facebook,
                publicite_facebook,
                page_instagram,
                abonnes_instagram,
                publicite_instagram,
                niveau_windows,
                niveau_mail,
                niveau_word,
                niveau_excel,
                site_web,
                date_creation_site_web,
                e_commerce,
                google_my_business,
                solocal,
                programme_fidelite,
                calendrier_commercial,
                chiffre_affaires,
                tableau_de_bords,
                bilan_comptable,
                cabinet_comptable,
                logiciel_comptable,
                niveau_anglais,
                niveau_espagnol,
                niveau_italien,
                niveau_allemand,
                id_entreprise,
                date_creation,
                date_maj)
            VALUES 
            (:communication,
            :web,
            :bureautique,
            :marketing,
            :comptabilite,
            :management,
            :techniques_de_vente,
            :restauration,
            :langues,
            :pratiques,
            :connaissances,
            :aptitudes,
            :etude_de_marche,
            :clientele,
            :type_clientele,
            :nationalites,
            :logo,
            :charte_graphique,
            :cartes_visites,
            :flyers,
            :fichier_client,
            :quantite,
            :mail,
            :sms,
            :outils,
            :page_facebook,
            :abonnes_facebook,
            :publicite_facebook,
            :page_instagram,
            :abonnes_instagram,
            :publicite_instagram,
            :niveau_windows,
            :niveau_mail,
            :niveau_word,
            :niveau_excel,
            :site_web,
            :date_creation_site_web,
            :e_commerce,
            :google_my_business,
            :solocal,
            :programme_fidelite,
            :calendrier_commercial,
            :chiffre_affaires,
            :tableau_de_bords,
            :bilan_comptable,
            :cabinet_comptable,
            :logiciel_comptable,
            :niveau_anglais,
            :niveau_espagnol,
            :niveau_italien,
            :niveau_allemand,
            :id_entreprise,
            :date_creation,
            :date_maj)"
            );
            $res = $req->execute($data);
            $req->closeCursor();
            return $res;
        }
    }

    public function getFichesDiagnosticByEntreprise($id_entreprise)
    {
        $fiches_diagnostic = [];
        foreach ($this->fiches_diagnostic as $fiche) {
            if ($fiche->getId_Entreprise() === $id_entreprise) {
                $fiches_diagnostic[] = $fiche;
            }
        }
        return $fiches_diagnostic;
    }

    public function getFicheDiagnosticById($id_fiche_diagnostic)
    {
        foreach ($this->fiches_diagnostic as $fiche) {
            if ($fiche->getId() === $id_fiche_diagnostic) {
                return $fiche;
                break;
            }
        }
    }
}
