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
            require_once "controllers/EntreprisesController.controller.php";
            $entreprise_controller = new EntrepriseController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "search": $entreprise_controller->afficherRechercheEntreprise($url[2]); break; //OK
                    case "create": $entreprise_controller->creerEntreprise(); break; //OK
                    case "save"  : $entreprise_controller->enregistrerEntreprise(); break; //OK
                    case "read"  : $entreprise_controller->afficherEntreprise($url[2]); break; //OK
                    case "delete": $entreprise_controller->supprimerEntreprise($url[2]); break; //OK
                    case "edit"  : $entreprise_controller->modifierEntreprise($url[2]); break; //OK
                    case "update": $entreprise_controller->actualiserEntreprise($url[2]); break; //OK
                }
            } else { $entreprise_controller->afficherEntreprises();}
            break;
        
        /**
         * FICHE DIAGNOSTIC
         */
        case "fiche-diagnostic" :
            require_once "controllers/FichesDiagnosticController.controller.php";
            $fiches_diagnostic_controller = new FichesDiagnosticController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "create" : $fiches_diagnostic_controller->creerFicheDiagnostic($url[2]); break;
                    case "save"   : $fiches_diagnostic_controller->enregistrerFicheDiagnostic($url[2]); break;
                }
            }
        break;
        
        /**
         * ORGANISMES DE FORMATION
         */
        case "organismes-de-formation":
            require_once "controllers/OFsController.controller.php";
            $ofs_controller = new OFsController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "read"  : $ofs_controller->afficherOf($url[2]); break;//OK
                    case "delete": $ofs_controller->supprimerOf($url[2]); break; //OK
                    case "edit"  : $ofs_controller->modifierOf($url[2]); break; //OK
                    case "create": $ofs_controller->creerOf(); break; //OK
                    case "save"  : $ofs_controller->enregistrerOf(); break; //OK
                    case "search": $ofs_controller->afficherRechercheOf($url[2]); break;//OK
                    case "update": $ofs_controller->actualiserOf($url[2]); break;//OK
                }
            } else { $ofs_controller->AfficherOfs();}
            break;

        /**
         * FORMATEURS
         */
        case "formateurs":
            require_once "controllers/FormateursController.controller.php";
            $formateurs_controller = new FormateursController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete": $formateurs_controller->supprimerFormateur($url[2]); break;//OK
                    case "edit"  : $formateurs_controller->modifierFormateur($url[2]); break;
                    case "create": $formateurs_controller->creerFormateur($url[2]); break; //OK
                    case "save"  : $formateurs_controller->enregistrerFormateur($url[2]); break;//OK
                }
            } else {
                $formateur_controller->AfficherFormateurs();
            }
            break;
        
        /**
         * EFFECTIFFS
         */
        case "effectifs":
            require_once "controllers/EffectifsController.controller.php";
            $effectifs_controller = new EffectifsController;
            if (!empty($url[1])) {
                switch ($url[1]) {
                    case "delete": $effectifs_controller->supprimerEffectif($url[2]); break;//OK
                    case "edit"  : $effectifs_controller->modifierEffectif($url[2]); break;//OK
                    case "create": $effectifs_controller->creerEffectif($url[2]); break;//OK
                    case "save"  : $effectifs_controller->enregistrerEffectif($url[2]); break; //OK
                    case "update": $effectifs_controller->actualiserEffectif($url[2]); break;//OK
                }
            } else { $entreprise_controller->afficherEntreprises();}
            break;

        /**
         * AUTRES
         */
        case "fiche-montage" : require_once "views/forms/montage.form.view.php"; break;
        case "dossiers-de-formation" : require_once "views/dossiers-de-formation.view.php"; break;
        case "accueil": require_once "views/accueil.view.php";break;
        case "erreur" : require_once "views/erreur.view.php"; break;
        case "rapport": require_once "views/rapport.view.php"; break;
        case "test"   : require_once "views/OF.view.php"; break;
        case "mobile" : require_once "views/templates/mobile.php"; break;
        default: require_once "views/accueil.view.php"; break;
    }
}
