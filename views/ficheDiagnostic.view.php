<?php
ob_start()
?>

<h3 class="mb-2">Fiche diagnostic</h3>
<h4>Projet de formation</h4>


<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Communication</h6>
        <p><?= $fiche_diagnostic->getCommunication() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Web</h6>
        <p><?= $fiche_diagnostic->getWeb() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Bureautique</h6>
        <p><?= $fiche_diagnostic->getBureautique() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Marketing</h6>
        <p><?= $fiche_diagnostic->getMarketing() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Comptabilité</h6>
        <p><?= $fiche_diagnostic->getComptabilite() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Management</h6>
        <p><?= $fiche_diagnostic->getManagement() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Techniques de vente</h6>
        <p><?= $fiche_diagnostic->getTechniques_de_vente() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Restauration</h6>
        <p><?= $fiche_diagnostic->getRestauration() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Langues</h6>
        <p><?= $fiche_diagnostic->getLangues() ?></p>

    </div>
</div>


<h4>Objectifs visés</h4>

<div class="card grid gap-1 mb-2">
    <div class="col-12">
        <h6>Améliorer ses pratiques : tableaux de bords, mailing, logiciels, outils de communication, réseaux sociaux...</h6>
        <p><?= $fiche_diagnostic->getPratiques() ?></p>
    </div>
    <div class="col-12">
        <h6>Améliorer ses connaissances : Réglementations juridiues, immobilier...</h6>
        <p><?= $fiche_diagnostic->getConnaissances() ?></p>
    </div>
    <div class="col-12">
        <h6>Améliorer ses aptitudes professionnelles : Animer une réunion, encadrer une équipe, développer son état d'esprit...</h6>
        <p><?= $fiche_diagnostic->getAptitudes() ?></p>
    </div>
</div>

<h4>Diagnostic de l'entreprise</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Etude de marché</h6>
        <p><?= $fiche_diagnostic->getEtude_de_marche() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Clientele</h6>
        <p><?= $fiche_diagnostic->getClientele() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Type clientele</h6>
        <p></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Nationalités</h6>
        <p><?= $fiche_diagnostic->getNationalites() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Logo</h6>
        <p><?= $fiche_diagnostic->getLogo() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Charte graphique</h6>
        <p><?= $fiche_diagnostic->getCharte_graphique() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Cartes visite</h6>
        <p><?= $fiche_diagnostic->getCartes_visites() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="flyers">Flyers</h6>
        <p><?= $fiche_diagnostic->getFlyers() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="fichier_client">Fichier client</h6>
        <p><?= $fiche_diagnostic->getFichier_client() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="quantite">Quantité</h6>
        <p><?= $fiche_diagnostic->getQuantite() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="mail">Mail</h6>
        <p><?= $fiche_diagnostic->getMail() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="sms">SMS</h6>
        <p><?= $fiche_diagnostic->getSms() ?></p>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-12">
        <h6 for="outils">Outils</h6>
        <p><?= $fiche_diagnostic->getOutils() ?></p>
    </div>
</div>




<?php
$content = ob_get_clean();
$title = "FORMAGEST | FIche Diagnostic";
require_once 'views/templates/default.php';
?>