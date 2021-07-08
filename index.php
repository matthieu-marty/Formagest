<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")));

if (empty($_GET['page'])) {
    require_once "views/accueil.view.php";
} else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));

    switch ($url[0]) {
            /**
         * ENTREPRISES
         */
        case "entreprises":
            require_once "controllers/EntrepriseController.controller.php";
            $entreprise_controller = new EntrepriseController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "search":
                        $entreprise_controller->afficherRechercheEntreprise($url[2]);
                        break;     //OK
                    case "create":
                        $entreprise_controller->creerEntreprise();
                        break;                        //OK
                    case "save":
                        $entreprise_controller->enregistrerEntreprise();
                        break;                    //OK
                    case "read":
                        $entreprise_controller->afficherEntreprise($url[2]);
                        break;                //OK
                    case "delete":
                        $entreprise_controller->supprimerEntreprise($url[2]);
                        break;             //OK
                    case "edit":
                        $entreprise_controller->modifierEntreprise($url[2]);
                        break;                //OK
                    case "update":
                        $entreprise_controller->actualiserEntreprise($url[2]);
                        break;            //OK
                }
            } else {
                $entreprise_controller->afficherEntreprises();
            }
            break;

            /**
             * FICHE DIAGNOSTIC
             */
        case "fiche-diagnostic":
            require_once "controllers/FicheDiagnosticController.controller.php";
            $fiches_diagnostic_controller = new FicheDiagnosticController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "create":
                        $fiches_diagnostic_controller->creerFicheDiagnostic($url[2]);
                        break;         //OK
                    case "save":
                        $fiches_diagnostic_controller->enregistrerFicheDiagnostic($url[2]);
                        break;     //OK
                    case "read":
                        $fiches_diagnostic_controller->afficherFicheDiagnostic($url[2]);
                        break;        //OK
                }
            }
            break;

            /**
             * ORGANISMES DE FORMATION
             */
        case "organismes-de-formation":
            require_once "controllers/OrganismeFormationController.controller.php";
            $organisme_formation_controller = new OrganismeFormationController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "read":
                        $organisme_formation_controller->afficherOf($url[2]);
                        break;               //OK
                    case "delete":
                        $organisme_formation_controller->supprimerOf($url[2]);
                        break;            //OK
                    case "edit":
                        $organisme_formation_controller->modifierOf($url[2]);
                        break;               //OK
                    case "create":
                        $organisme_formation_controller->creerOf();
                        break;                       //OK
                    case "save":
                        $organisme_formation_controller->enregistrerOf();
                        break;                   //OK
                    case "search":
                        $organisme_formation_controller->afficherRechercheOf($url[2]);
                        break;    //OK
                    case "update":
                        $organisme_formation_controller->actualiserOf($url[2]);
                        break;           //OK
                }
            } else {
                $organisme_formation_controller->AfficherOfs();
            }
            break;

            /**
             * FORMATEURS
             */
        case "formateurs":
            require_once "controllers/FormateurController.controller.php";
            $formateur_controller = new FormateurController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete":
                        $formateur_controller->supprimerFormateur($url[2]);
                        break;   //OK
                    case "edit":
                        $formateur_controller->modifierFormateur($url[2]);
                        break;      //OK
                    case "update":
                        $formateur_controller->actualiserFormateur($url[2]);
                        break; //OK
                    case "create":
                        $formateur_controller->creerFormateur($url[2]);
                        break;       //OK
                    case "save":
                        $formateur_controller->enregistrerFormateur($url[2]);
                        break;   //OK
                }
            } else {
                $formateur_controller->AfficherFormateurs();
            }
            break;

            /**
             * EFFECTIFFS
             */
        case "effectifs":
            require_once "controllers/EffectifController.controller.php";
            $effectif_controller = new EffectifController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete":
                        $effectif_controller->supprimerEffectif($url[2]);
                        break;      //OK
                    case "edit":
                        $effectif_controller->modifierEffectif($url[2]);
                        break;         //OK
                    case "create":
                        $effectif_controller->creerEffectif($url[2]);
                        break;          //OK
                    case "save":
                        $effectif_controller->enregistrerEffectif($url[2]);
                        break;      //OK
                    case "update":
                        $effectif_controller->actualiserEffectif($url[2]);
                        break;     //OK

                }
            } else {
                $entreprise_controller->afficherEntreprises();
            }
            break;

            /**
             * DOSSIERS DE FORMATION
             */
        case "dossier-formation-individuelle":
            require_once "controllers/DossierFormation.controller.php";
            $dossier_formation_controller = new DossierFormationController;

            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "search":
                        $dossier_formation_controller->afficherRechercheEffectif($url[2]);
                        break;
                    case "create":
                        if (!empty($url[2])) {
                            $dossier_formation_controller->selectionnerOrganismeFormation($url[2]);
                        } else {
                           
                        }
                }
            } else {
                $dossier_formation_controller->afficherEffectifs();
            }
            break;




        case "dossiers-en-cours":
            require_once "views/dossiersEnCours.view.php";
            break;
        case "fiche-montage":
            require_once "views/forms/montage.form.view.php";
            break;
        case "dossiers-de-formation":
            require_once "views/dossiersDeFormation.view.php";
            break;

            /**
             * AUTRES
             */

        case "accueil":
            require_once "views/accueil.view.php";
            break;
        case "erreur":
            require_once "views/erreur.view.php";
            break;
        case "rapport":
            require_once "views/rapport.view.php";
            break;
        case "test":
            require_once "views/organismeDeFormation.view.php";
            break;
        case "mobile":
            require_once "views/templates/mobile.php";
            break;
        default:
            require_once "views/accueil.view.php";
            break;
    }
}
