<?php
require_once 'models/managers/EntrepriseManager.class.php';
require_once 'models/managers/EffectifManager.class.php';

class EffectifController
{
    private $effectif_manager;

    public function __construct()
    {
        $this->effectif_manager = new EffectifManager;
        $this->effectif_manager->chargementEffectifs();
        $this->entreprise_manager = new EntrepriseManager;
        $this->entreprise_manager->chargementEntreprises();
    }

    public function enregistrerEffectif($id_entreprise)
    {
        $res = $this->effectif_manager->enregistrerEffectifDB(
            $id_entreprise,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['nom_naissance'],
            $_POST['genre'],
            $_POST['date_naissance'],
            $_POST['telephone'],
            $_POST['mail'],
            $_POST['securite_sociale'],
            $_POST['fonction'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['ville'],
            $_POST['diplome'],
            $_POST['date_creation']
        );
        if ($res === true) {
            header('location:' . URL . 'entreprises/read/' . $id_entreprise);
        } else {
            header('location:' . URL . 'erreur');
        }
    }
    public function creerEffectif($id_entreprise)
    {
        $id = $id_entreprise;
        require_once 'views/createEffectif.view.php';
    }

    public function supprimerEffectif($id_effectif)
    {
        $res = $this->effectif_manager->supprimerEffectifDB($id_effectif);
        if ($res === true) {
            $effectif = $this->effectif_manager->getEffectifById($id_effectif);
            header('location:' . URL . 'entreprises/read/' . $effectif->getId_Entreprise());
        } else {
            header('location:' . URL . 'erreur');
        }
    }

    public function modifierEffectif($id_effectif)
    {

        $effectif = $this->effectif_manager->getEffectieById($id_effectif);
        require_once 'views/editEffectif.view.php';
    }

    public function actualiserEffectif($id_effectif)
    {
        $res = $this->effectif_manager->actualiserEffectifDB(
            $id_effectif,
            $_POST['date_creation'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['nom_naissance'],
            $_POST['genre'],
            $_POST['date_naissance'],
            $_POST['fonction'],
            $_POST['securite_sociale'],
            $_POST['opca'],
            $_POST['diplome'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['ville'],
            $_POST['telephone'],
            $_POST['mail']
        );
        if ($res === true) {
            $effectif = $this->effectif_manager->getEffectifById($id_effectif);
            header('location:' . URL . 'entreprises/read/' . $effectif->getId_Entreprise());
        } else {
            header('location:' . URL . 'erreur');
        }
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
}
