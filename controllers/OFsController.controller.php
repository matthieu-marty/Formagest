<?php
require_once 'models/managers/OFManager.class.php';
require_once 'models/managers/FormateurManager.class.php';

class OFsController
{
    private $of_manager;
    private $formateur_manager;

    public function __construct()
    {
        $this->of_manager = new OFManager;
        $this->of_manager->chargementOfs();
        $this->formateur_manager = new FormateurManager();
        $this->formateur_manager->chargementFormateurs();
    }

    public function afficherOfs()
    {
        $ofs = $this->of_manager->getOfs();

        require_once 'views/organismesFormation.view.php';
    }

    public function afficherOf($id_of)
    {
        $formateurs = $this->formateur_manager->getFormateursByOf($id_of);
        $of = $this->of_manager->getOfById($id_of);
        require_once 'views/OF.view.php';
    }

    public function afficherRechercheOf($string)
    {
        if (!empty($string)) {
            $fichier_ofs = $this->of_manager->getOfs();
            $ofs = [];
            foreach ($fichier_ofs as $of) {
                if (stristr($of->getNom_Commercial(), $string) != false | stristr($of->getVille(), $string) != false | stristr($of->getCode_Postal(), $string) != false) {
                    $ofs[] = $of;
                }
            }
            require_once 'views/organismesFormation.view.php';
        } else {
            $ofs = $this->of_manager->getOfs();
            require_once 'views/organismesFormation.view.php';
        }
    }

    public function creerOf()
    {
        require_once 'views/createOf.view.php';
    }

    public function enregistrerOf()
    {
        $this->of_manager->enregistrerOfDB(
            $_POST['nom_commercial'],
            $_POST['siret'],
            $_POST['code_ape'],
            $_POST['numero_declaration'],
            $_POST['discipline'],
            $_POST['numero_qualiopi'],
            $_POST['tva'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['ville'],
            $_POST['telephone'],
            $_POST['mail'],
            $_POST['date_creation'],
        );
        header('location:' . URL . 'organismes-de-formation');
    }

    public function supprimerOf($id_of)
    {
        $res = $this->of_manager->supprimerOfDB($id_of);
        if ($res === true) {
            header('location:' . URL . 'organismes-de-formation');
        } else {
            header('location:' . URL . 'erreur');
        }
    }

    public function modifierOf($id_of)
    {
        $of = $this->of_manager->getOfById($id_of);
        require_once 'views/editOF.view.php';
    }

    public function actualiserOf($id_of)
    {
        $of = $this->of_manager->getOfById($id_of);
        $res = $this->of_manager->actualiserOfDB(
            $id_of,
            $_POST['date_creation'],
            $_POST['nom_commercial'],
            $_POST['siret'],
            $_POST['code_ape'],
            $_POST['numero_declaration'],
            $_POST['discipline'],
            $_POST['numero_qualiopi'],
            $_POST['tva'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['ville'],
            $_POST['telephone'],
            $_POST['mail']
        );
        if ($res === true) {
            header('location:' . URL . 'organismes-de-formation/read/' . $of->getId());
        } else {
            header('location:' . URL . 'erreur');
        }
    }

    
}
