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
                        break;
                    case "delete":
                        $organisme_formation_controller->supprimerOf($url[2]);
                        break;
                    case "edit":
                        $organisme_formation_controller->modifierOf($url[2]);
                        break;
                    case "create":
                        $organisme_formation_controller->creerOf();
                        break;
                    case "save":
                        $organisme_formation_controller->enregistrerOf();
                        break;
                    case "search":
                        $organisme_formation_controller->afficherRechercheOf($url[2]);
                        break;
                    case "update":
                        $organisme_formation_controller->actualiserOf($url[2]);
                        break;
                }
            } else {
                $organisme_formation_controller->AfficherOfs();
            }
            break;


            /**
             * MODULES
             */
        case "modules":
            require_once "controllers/ModuleController.controller.php";
            $module_controller = new ModuleController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete":
                        //$module_controller->supprimerModule($url[2]);
                        break;
                    case "create":
                        //$module_controller->creerModule(); //OK
                        break;
                    case "save":
                        //$module_controller->enregistrerModule(); //OK
                        break;
                    case "read":
                        $module_controller->afficherModule($url[2]); //OK
                        break;
                    case "update":
                        //$module_controller->actualiserModule($url[2]); //OK
                        break;
                    case "edit":
                        //$module_controller->modifierModule($url[2]); //OK
                        break;
                    case "search":;
                        break;
                }
            } else {
                $module_controller->AfficherModules();
            }
            break;

            /**
             * SALLES
             */
        case "salles":
            require_once "controllers/SalleController.controller.php";
            $salle_controller = new SalleController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete":
                        $salle_controller->supprimerSalle($url[2]);
                        break;
                    case "edit":;
                        break;
                    case "create":;
                        break;
                    case "save":;
                        break;
                    case "read":
                        $salle_controller->afficherSalle($url[2]); //OK
                        break;
                    case "update":;
                        break;
                    case "search":;
                        break;
                }
            } else {
                $salle_controller->AfficherSalles();
            }
            break;

            /**
             * OPCAS
             */
        case "opcas":
            require_once "controllers/OpcaController.controller.php";
            $opca_controller = new OpcaController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete":;
                        break;
                    case "edit":;
                        break;
                    case "create":;
                        break;
                    case "save":;
                        break;
                    case "read":
                        $opca_controller->afficherOpca($url[2]); //OK
                        break;
                    case "update":;
                        break;
                    case "search":;
                        break;
                }
            } else {
                $opca_controller->AfficherOpcas();
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
        case "montage-dossier":
            require_once "controllers/DossierFormation.controller.php";
            $dossier_formation_controller = new DossierFormationController;

            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "search":
                        $dossier_formation_controller->afficherRechercheEffectif($url[2]);
                        break;
                    case "organisme-formation":
                        if (!empty($url[2])) {
                            $dossier_formation_controller->selectionnerOrganismeFormation($url[2]);
                        }
                        break;
                    case "formateur":
                        if (!empty($url[2])) {
                            $dossier_formation_controller->selectionnerFormateur($url[2]);
                        }
                        break;
                    case "programme":
                        $dossier_formation_controller->selectionnerProgramme($url[2]);
                        break;
                    case "logistique":
                        $dossier_formation_controller->selectionnerLogistique($url[2]);
                        break;
                    case "formalites":;
                        break;
                }
            } else {
                $dossier_formation_controller->afficherEffectifs();
            }
            break;


            /**
             * Back Office
             */
        case  "back-office":
            require_once 'models/classes/Stat.class.php';
            $stat = new Stat;
            require_once "views/backOffice.view.php";
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
            //require_once "views/prints/conventionDeFormation.print.php";
            //require_once "views/prints/devisDeFormation.print.php";
            //require_once "views/prints/factureDeFormation.print.php";
            //require_once "views/prints/attestationAssiduite.print.php";
            break;

        default:
            require_once "views/accueil.view.php";
            break;
    }
}
