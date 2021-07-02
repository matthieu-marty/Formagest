<?php
require_once 'models/managers/FormateurManager.class.php';

class FormateurController
{
    private $formateur_manager;

    public function __construct()
    {
        $this->formateur_manager = new FormateurManager;
        $this->formateur_manager->chargementFormateurs();
    }

    public function afficherFormateurs()
    {
        $formateurs = $this->formateur_manager->getFormateurs();
        require_once 'views/formateurs.view.php';
    }

    public function creerFormateur($id_organisme_formation)
    {
        $id = $id_organisme_formation;
        require_once 'views/createFormateur.view.php';
    }

    public function enregistrerFormateur($id_organisme_formation)
    {
        $res = $this->formateur_manager->enregistrerFormateurDB(
            $id_organisme_formation,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['discipline'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['ville'],
            $_POST['telephone'],
            $_POST['mail'],
            $_POST['code_naf'],
            $_POST['numero_qualiopi'],
            $_POST['tva'],
            $_POST['date_creation']
        );
        if ($res === true) {
            header('location:' . URL . 'organismes-de-formation/read/' . $id_organisme_formation);
        } else {
            header('location:' . URL . 'erreur');
        }
    }

    public function supprimerFormateur($id_formateur)
    {
        $res = $this->formateur_manager->supprimerFormateurDB($id_formateur);
        if ($res === true) {
            $formateur = $this->formateur_manager->getFormateurById($id_formateur);
            header('location:' . URL . 'organismes-de-formation/read/' . $formateur->getId_Organisme_Formation());
        } else {
            header('location:' . URL . 'erreur');
        }
    }
}
