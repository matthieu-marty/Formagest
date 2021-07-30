<?php
ob_start()
?>

<h3>Fiche diagnostic</h3>
<p class="text-border"><a href="<?= URL ?>entreprises/read/<?= $fiche_diagnostic->getId_entreprise() ?>">Retour</a></p>

<h4>Projet de formation</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Communication</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getCommunication() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Web</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getWeb() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Bureautique</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getBureautique() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Marketing</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getMarketing() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Comptabilité</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getComptabilite() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Management</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getManagement() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Techniques de vente</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getTechniques_de_vente() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Restauration</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getRestauration() ?></p>

    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Langues</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getLangues() ?></p>

    </div>
</div>


<h4>Objectifs visés</h4>

<div class="card grid gap-1 mb-2">
    <div class="col-12">
        <h6>Améliorer ses pratiques : tableaux de bords, mailing, logiciels, outils de communication, réseaux sociaux...</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getPratiques() ?></p>
    </div>
    <div class="col-12">
        <h6>Améliorer ses connaissances : Réglementations juridiues, immobilier...</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getConnaissances() ?></p>
    </div>
    <div class="col-12">
        <h6>Améliorer ses aptitudes professionnelles : Animer une réunion, encadrer une équipe, développer son état d'esprit...</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getAptitudes() ?></p>
    </div>
</div>

<h4>Diagnostic de l'entreprise</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Etude de marché</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getEtude_de_marche() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Clientele</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getClientele() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Type clientele</h6>
        <p class="text-grey"></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Nationalités</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getNationalites() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Logo</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getLogo() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Charte graphique</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getCharte_graphique() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Cartes visite</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getCartes_visites() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="flyers">Flyers</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getFlyers() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="fichier_client">Fichier client</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getFichier_client() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="quantite">Quantité</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getQuantite() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="mail">Mail</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getMail() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6 for="sms">SMS</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getSms() ?></p>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-12">
        <h6 for="outils">Outils</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getOutils() ?></p>
    </div>
</div>

<h4>Réseaux sociaux</h4>
<div class="grid gap-2 mb-2">
    <div class="col-lg-6 col-md-12 col-sm-12 grid gap-1 card">
        <div class="col-lg- col-md-8 col-sm-12">
            <h6><img src="https://img.icons8.com/color/26/000000/facebook-new.png" style="vertical-align:top;" /> Page facebook</h6>
            <a href="<?= $fiche_diagnostic->getPage_facebook() ?>" target="_blank">Visiter la page</a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-6">
            <h6><img src="https://img.icons8.com/color/26/000000/facebook-new.png" style="vertical-align:top;" /> Publicité</h6>
            <p class="text-grey"><?= $fiche_diagnostic->getPublicite_facebook() ?></p>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-12">
            <h6><img src="https://img.icons8.com/color/26/000000/instagram-new.png" style="vertical-align:top;" /> Page Instagram</h6>
            <a href="<?= $fiche_diagnostic->getPage_instagram() ?>" target="_blank">Visiter la page</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <h6><img src="https://img.icons8.com/color/26/000000/instagram-new.png" style="vertical-align:top;" /> Publicité</h6>
            <p class="text-grey"><?= $fiche_diagnostic->getPublicite_instagram() ?></p>
        </div>
    </div>

    <div class="card col-lg-3 col-md-6 col-sm-12">
        <h6><img src="https://img.icons8.com/color/26/000000/facebook-new.png" style="vertical-align:top;" /> Abonnés</h6>
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getAbonnes_facebook() ?></p>
    </div>

    <div class="card col-lg-3 col-md-6 col-sm-12">
        <h6><img src="https://img.icons8.com/color/26/000000/instagram-new.png" style="vertical-align:top;" /> Abonnés</h6>
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getAbonnes_instagram() ?></p>
    </div>

</div>


<h4>Informatique & Bureautique</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_Windows() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6 for="niveau_windows">Windows</h6>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_Mail() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6 for="niveau_mail">Mail</h6>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_Word() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6 for="niveau_word">Word</h6>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_Excel() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6 for="niveau_excel">Excel</h6>

    </div>
</div>

<h4>Site web & Référencement</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-2 col-sm-6">
        <h6>Site web</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getSite_web() ?></p>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <h6>Date création</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getDate_creation_site_web() ?></p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6">
        <h6>Ecommerce</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getE_commerce() ?></p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6">
        <h6>Google MyBusiness</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getGoogle_my_business() ?></p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6">
        <h6>Solocal (pages Jaunes)</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getSolocal() ?></p>
    </div>
</div>

<h4>Commerce et vente</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-2 col-sm-6">
        <h6>Programme de fidélité</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getProgramme_fidelite() ?></p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6">
        <h6>Calendrier commercial</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getCalendrier_commercial() ?></p>
    </div>
</div>

<h4>Gestion et comptabilité</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Chiffre d'affaires</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getChiffre_affaires() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Tableau de bords</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getTableau_de_bords() ?></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>1er bilan comptable</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getBilan_comptable() ?></p>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-6">
        <h6>Cabinet comptable</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getCabinet_comptable() ?></p>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <h6>Logiciel comptable</h6>
        <p class="text-grey"><?= $fiche_diagnostic->getLogiciel_comptable() ?></p>
    </div>
</div>

<h4>Langues étrangères</h4>
<div class="card grid gap-1 mb-2">
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_anglais() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6>Anglais</h6>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_espagnol() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6>Espagnol</h6>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_italien() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6>Italien</h6>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p style="font-size: 4rem; font-weight:200;"><?= $fiche_diagnostic->getNiveau_allemand() ?><span style="color: var(--grey); font-size:1.5rem;">/10</span></p>
        <h6>Allemand</h6>
    </div>

</div>





<?php
$content = ob_get_clean();
$title = "FORMAGEST | FIche Diagnostic";
require_once 'views/templates/default.php';
?>