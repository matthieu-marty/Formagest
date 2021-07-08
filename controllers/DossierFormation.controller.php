<?php
require_once 'models/managers/EntrepriseManager.class.php';
require_once 'models/managers/EffectifManager.class.php';
require_once 'models/managers/OFManager.class.php';

class DossierFormationController {

    public function __construct ()
    {
        $this->effectif_manager = new EffectifManager;
        $this->effectif_manager->chargementEffectifs();
        $this->entreprise_manager = new EntrepriseManager;
        $this->entreprise_manager->chargementEntreprises();
        $this->of_manager = new OFManager;
        $this->of_manager->chargementOfs();
    }

    public function afficherEffectifs()
    {  
        $effectifs = $this->effectif_manager->getEffectifs();
        $entreprise_manager = $this->entreprise_manager;
        require_once "views/createDossierFormationPart1.view.php";
    }

    public function afficherRechercheEffectif($string)
    {
        if (!empty($string)) {
            $entreprise_manager = $this->entreprise_manager;
            $fichier_effectifs = $this->effectif_manager->getEffectifs();
            $effectifs = [];
            foreach ($fichier_effectifs as $effectif) {
                if (stristr($effectif->getNom(), $string) != false | stristr($effectif->getPrenom(), $string) != false | stristr($effectif->getTelephone(), $string) != false | stristr($effectif->getFonction(), $string) != false | stristr($effectif->getMail(), $string) != false) {
                    $effectifs[] = $effectif;
                }
            }
            require_once 'views/createDossierFormationPart1.view.php';
        } else {
            $this->afficherEffectifs();
        }
    }

    public function selectionnerOrganismeFormation($id_effectif)
    {   $ofs = $this->of_manager->getOfs();
        $effectif = $this->effectif_manager->getEffectifById($id_effectif);
        $entreprise = $this->entreprise_manager->getEntrepriseById($effectif->getId_Entreprise());
        require_once "views/createDossierFormationPart2.view.php";
    }

    public function selectionnerFormateur($id_organisme_formation)
    {
        $effectif = $this->effectif_manager->getEffectifById($id_effectif);
        $of = $this->of_manager->getOfById($id_organisme_formation);
    }
}