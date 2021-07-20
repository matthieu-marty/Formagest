<?php

class FicheDiagnostic
{
    private $id;
    private $communication;
    private $web;
    private $bureautique;
    private $marketing;
    private $comptabilite;
    private $management;
    private $techniques_de_vente;
    private $restauration;
    private $langues;
    private $pratiques;
    private $connaissances;
    private $aptitudes;
    private $etude_de_marche;
    private $clientele;
    private $type_clientele;
    private $nationalites;
    private $logo;
    private $charte_graphique;
    private $cartes_visites;
    private $flyers;
    private $fichier_client;
    private $quantite;
    private $mail;
    private $sms;
    private $outils;
    private $page_facebook;
    private $abonnes_facebook;
    private $publicite_facebook;
    private $page_instagram;
    private $abonnes_instagram;
    private $publicte_instagram;
    private $niveau_windows;
    private $niveau_mail;
    private $niveau_word;
    private $niveau_excel;
    private $site_web;
    private $date_creation_site_web;
    private $e_commerce;
    private $google_my_business;
    private $solocal;
    private $programme_fidelite;
    private $calendrier_commercial;
    private $chiffre_affaires;
    private $tableau_de_bords;
    private $bilan_comptable;
    private $cabinet_comptable;
    private $logiciel_comptable;
    private $anglais;
    private $niveau_espagnol;
    private $niveau_italien;
    private $niveau_allemand;
    private $id_entreprise;
    private $date_creation;
    private $date_maj;

    public function __construct(
        $id,
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
        $id_entreprise,
        $date_creation,
        $date_maj
    ) {
        $this->id = $id;
        $this->communication = $communication;
        $this->web = $web;
        $this->bureautique = $bureautique;
        $this->marketing = $marketing;
        $this->comptabilite = $comptabilite;
        $this->management = $management;
        $this->techniques_de_vente = $techniques_de_vente;
        $this->restauration    = $restauration;
        $this->langues = $langues;
        $this->pratiques = $pratiques;
        $this->connaissances = $connaissances;
        $this->aptitudes = $aptitudes;
        $this->etude_de_marche = $etude_de_marche;
        $this->clientele = $clientele;
        $this->type_clientele = $type_clientele;
        $this->nationalites    = $nationalites;
        $this->logo    = $logo;
        $this->charte_graphique    = $charte_graphique;
        $this->cartes_visites = $cartes_visites;
        $this->flyers = $flyers;
        $this->fichier_client = $fichier_client;
        $this->quantite    = $quantite;
        $this->mail    = $mail;
        $this->sms = $sms;
        $this->outils = $outils;
        $this->page_facebook = $page_facebook;
        $this->abonnes_facebook    = $abonnes_facebook;
        $this->publicite_facebook = $publicite_facebook;
        $this->page_instagram = $page_instagram;
        $this->abonnes_instagram = $abonnes_instagram;
        $this->publicite_instagram = $publicite_instagram;
        $this->niveau_windows = $niveau_windows;
        $this->niveau_mail = $niveau_mail;
        $this->niveau_word = $niveau_word;
        $this->niveau_excel    = $niveau_excel;
        $this->site_web    = $site_web;
        $this->date_creation_site_web = $date_creation_site_web;
        $this->e_commerce = $e_commerce;
        $this->google_my_business = $google_my_business;
        $this->solocal = $solocal;
        $this->programme_fidelite = $programme_fidelite;
        $this->calendrier_commercial = $calendrier_commercial;
        $this->chiffre_affaires = $chiffre_affaires;
        $this->tableau_de_bords    = $tableau_de_bords;
        $this->bilan_comptable = $bilan_comptable;
        $this->cabinet_comptable = $cabinet_comptable;
        $this->logiciel_comptable = $logiciel_comptable;
        $this->niveau_anglais = $niveau_anglais;
        $this->niveau_espagnol = $niveau_espagnol;
        $this->niveau_italien = $niveau_italien;
        $this->niveau_allemand = $niveau_allemand;
        $this->id_entreprise = $id_entreprise;
        $this->date_creation = $date_creation;
        $this->date_maj = $date_maj;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getCommunication()
    {
        return $this->communication;
    }
    public function getWeb()
    {
        return $this->web;
    }
    public function getBureautique()
    {
        return $this->bureautique;
    }
    public function getMarketing()
    {
        return $this->marketing;
    }
    public function getComptabilite()
    {
        return $this->comptabilite;
    }
    public function getManagement()
    {
        return $this->management;
    }
    public function getTechniques_de_vente()
    {
        return $this->techniques_de_vente;
    }
    public function getRestauration()
    {
        return $this->restauration;
    }
    public function getLangues()
    {
        return $this->langues;
    }
    public function getPratiques()
    {
        return $this->pratiques;
    }
    public function getConnaissances()
    {
        return $this->connaissances;
    }
    public function getAptitudes()
    {
        return $this->aptitudes;
    }
    public function getEtude_de_marche()
    {
        return $this->etude_de_marche;
    }
    public function getClientele()
    {
        return $this->clientele;
    }
    public function getType_clientele()
    {
        return $this->type_clientele;
    }
    public function getNationalites()
    {
        return $this->nationalites;
    }
    public function getLogo()
    {
        return $this->logo;
    }
    public function getCharte_graphique()
    {
        return $this->charte_graphique;
    }
    public function getCartes_visites()
    {
        return $this->cartes_visites;
    }
    public function getFlyers()
    {
        return $this->flyers;
    }
    public function getFichier_client()
    {
        return $this->fichier_client;
    }
    public function getQuantite()
    {
        return $this->quantite;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getSms()
    {
        return $this->sms;
    }
    public function getOutils()
    {
        return $this->outils;
    }
    public function getPage_facebook()
    {
        return $this->page_facebook;
    }
    public function getAbonnes_facebook()
    {
        return $this->abonnes_facebook;
    }
    public function getPublicite_facebook()
    {
        return $this->publicite_facebook;
    }
    public function getPage_instagram()
    {
        return $this->page_instagram;
    }
    public function getAbonnes_instagram()
    {
        return $this->abonnes_instagram;
    }
    public function getPublicite_instagram()
    {
        return $this->publicite_instagram;
    }
    public function getNiveau_windows()
    {
        return $this->niveau_windows;
    }
    public function getNiveau_mail()
    {
        return $this->niveau_mail;
    }
    public function getNiveau_word()
    {
        return $this->niveau_word;
    }
    public function getNiveau_excel()
    {
        return $this->niveau_excel;
    }
    public function getSite_web()
    {
        return $this->site_web;
    }
    public function getDate_creation_site_web()
    {
        return $this->date_creation_site_web;
    }
    public function getE_commerce()
    {
        return $this->e_commerce;
    }
    public function getGoogle_my_business()
    {
        return $this->google_my_business;
    }
    public function getSolocal()
    {
        return $this->solocal;
    }
    public function getProgramme_fidelite()
    {
        return $this->programme_fidelite;
    }
    public function getCalendrier_commercial()
    {
        return $this->calendrier_commercial;
    }
    public function getChiffre_affaires()
    {
        return $this->chiffre_affaires;
    }
    public function getTableau_de_bords()
    {
        return $this->tableau_de_bords;
    }
    public function getBilan_comptable()
    {
        return $this->bilan_comptable;
    }
    public function getCabinet_comptable()
    {
        return $this->cabinet_comptable;
    }
    public function getLogiciel_comptable()
    {
        return $this->logiciel_comptable;
    }
    public function getNiveauAnglais()
    {
        return $this->niveau_anglais;
    }
    public function getNiveau_espagnol()
    {
        return $this->niveau_espagnol;
    }
    public function getNiveau_italien()
    {
        return $this->niveau_italien;
    }
    public function getNiveau_allemand()
    {
        return $this->niveau_allemand;
    }
    public function getId_entreprise()
    {
        return $this->id_entreprise;
    }
    public function getDate_creation()
    {
        return $this->date_creation;
    }
    public function getDate_maj()
    {
        return $this->date_maj;
    }
}
