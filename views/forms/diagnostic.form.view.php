<?php
ob_start()
?>
<h3>Fiche diagnostic</h3>

<form action="<?= URL ?>fiche-diagnostic/save/<?= $id ?>" method="post" enctype="multipart/form-data" class="mt-2" autocomplete="off">

    <h4>Projet de formation</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="communication">Communication</label>
            <select name="communication" id="communication" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="web">Web</label>
            <select name="web" id="web" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="bureautique">Bureautique</label>
            <select name="bureautique" id="bureautique" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="marketing">Marketing</label>
            <select name="marketing" id="marketing" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="comptabilite">Comptabilité</label>
            <select name="comptabilite" id="comptabilite" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="management">Management</label>
            <select name="management" id="management" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="techniques_de_vente">Techniques de vente</label>
            <select name="techniques_de_vente" id="techniques_de_vente" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="restauration">Restauration</label>
            <select name="restauration" id="restauration" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="langues">Langues</label>
            <select name="langues" id="langues" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <h4>Objectifs visés</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-12">
            <label for="pratiques">Améliorer ses pratiques : tableaux de bords, mailing, logiciels, outils de communication, réseaux sociaux...</label>
            <textarea id="pratiques" name="pratiques" class="form" rows="3"></textarea>
        </div>
        <div class="col-12">
            <label for="connaissances">Améliorer ses connaissances : Réglementations juridiues, immobilier...</label>
            <textarea id="connaissances" name="connaissances" class="form" rows="3"></textarea>
        </div>
        <div class="col-12">
            <label for="aptitudes">Améliorer ses aptitudes professionnelles : Animer une réunion, encadrer une équipe, développer son état d'esprit...</label>
            <textarea id="aptitudes" name="aptitudes" class="form" rows="3"></textarea>
        </div>
    </div>
    <h4>Diagnostic de l'entreprise</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-12">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation" value="">
        </div>
    </div>

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="etude_de_marche">Etude de marché</label>
            <select name="etude_de_marche" id="etude_de_marche" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="clientele">Clientele</label>
            <select name="clientele" id="clientele" class="form">
                <option value="B2C">B2C</option>
                <option value="B2B">B2B</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="type_clientele">Type clientele</label>
            <select name="type_clientele" id="type_clientele" class="form">
                <option value="Local">Local</option>
                <option value="Touristes">Touristes</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="nationalites">Nationalités</label>
            <input class="form" type="text" name="nationalites" id="nationalites">
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="logo">Logo</label>
            <select name="logo" id="clogo" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="charte_graphique">Charte graphique</label>
            <select name="charte_graphique" id="charte_graphique" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="cartes_visites">Cartes visite</label>
            <select name="cartes_visites" id="cartes_visites" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="flyers">Flyers</label>
            <select name="flyers" id="flyers" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="fichier_client">Fichier client</label>
            <select name="fichier_client" id="fichier_client" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="quantite">Quantité</label>
            <input type="text" name="quantite" id="quantite" class="form">
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="mail">Mail</label>
            <select name="mail" id="mail" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="sms">SMS</label>
            <select name="sms" id="sms" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-12">
            <label for="outils">Outils</label>
            <input type="text" name="outils" id="outils" class="form">
        </div>
    </div>
    <h4>Réseaux sociaux</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <label for="page_facebook"><img src="https://img.icons8.com/color/26/000000/facebook-new.png" style="vertical-align:top;" /> Page facebook</label>
            <input type="text" name="page_facebook" id="page_facebook" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="abonnes_facebook"><img src="https://img.icons8.com/color/26/000000/facebook-new.png" style="vertical-align:top;" /> Abonnés</label>
            <input type="text" name="abonnes_facebook" id="abonnes_facebook" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="publicite_facebook"><img src="https://img.icons8.com/color/26/000000/facebook-new.png" style="vertical-align:top;" /> Publicité</label>
            <select name="publicite_facebook" id="publicite_facebook" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-lg-6 col-md-8 col-sm-12">
            <label for="page_instagram"><img src="https://img.icons8.com/color/26/000000/instagram-new.png" style="vertical-align:top;" /> Page Instagram</label>
            <input type="text" name="page_instagram" id="page_instagram" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="abonnes_instagram"><img src="https://img.icons8.com/color/26/000000/instagram-new.png" style="vertical-align:top;" /> Abonnés</label>
            <input type="text" name="abonnes_instagram" id="abonnes_instagram" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="publicite_instagram"><img src="https://img.icons8.com/color/26/000000/instagram-new.png" style="vertical-align:top;" /> Publicité</label>
            <select name="publicite_instagram" id="publicite_instagram" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

    </div>
    <h4>Informatique & Bureautique</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_windows">Windows</label>
            <input type="number" value="0" min="0" max="10" name="niveau_windows" id="niveau_windows" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_mail">Mail</label>
            <input type="number" value="0" min="0" max="10" name="niveau_mail" id="niveau_mail" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_word">Word</label>
            <input type="number" value="0" min="0" max="10" name="niveau_word" id="niveau_word" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_excel">Excel</label>
            <input type="number" value="0" min="0" max="10" name="niveau_excel" id="niveau_excel" class="form">
        </div>
    </div>
    <h4>Site web & Référencement</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="site_web">Site web</label>
            <select name="site_web" id="site_web" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12">
            <label for="date_creation_site_web">Date création</label>
            <input class="form" type="date" name="date_creation_site_web" id="date_creation_site_web" value="">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="e_commerce">Ecommerce</label>
            <select name="e_commerce" id="e_commerce" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="google_my_business">Google MyBusiness</label>
            <select name="google_my_business" id="google_my_business" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="solocal">Solocal (pages Jaunes)</label>
            <select name="solocal" id="solocal" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <h4>Commerce et vente</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="programme_fidelite">Programme de fidélité</label>
            <select name="programme_fidelite" id="programme_fidelite" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="calendrier_commercial">Calendrier commercial</label>
            <select name="calendrier_commercial" id="calendrier_commercial" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <h4>Gestion et comptabilité</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="chiffre_affaires">Chiffre d'affaires</label>
            <input type="text" name="chiffre_affaires" id="chiffre_affaires" class="form">
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="tableau_de_bords">Tableau de bords</label>
            <select name="tableau_de_bords" id="tableau_de_bords" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="bilan_comptable">1er bilan comptable</label>
            <select name="bilan_comptable" id="bilan_comptable" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6">
            <label for="cabinet_comptable">Cabinet comptable</label>
            <select name="cabinet_comptable" id="cabinet_comptable" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="logiciel_comptable">Logiciel comptable</label>
            <input type="text" name="logiciel_comptable" id="logiciel_comptable" class="form">
        </div>
    </div>

    <h4>Langues étrangères</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_anglais"><img src="https://img.icons8.com/color/26/000000/great-britain-circular.png" style="vertical-align:top;" /> Anglais</label>
            <input type="number" value="0" min="0" max="10" name="niveau_anglais" id="niveau_anglais" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_espagnol"><img src="https://img.icons8.com/color/26/000000/spain-circular.png" style="vertical-align:top;" /> Espagnol</label>
            <input type="number" value="0" min="0" max="10" name="niveau_espagnol" id="niveau_espagnol" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_italien"><img src="https://img.icons8.com/color/26/000000/italy-circular.png" style="vertical-align:top;" /> Italien</label>
            <input type="number" value="0" min="0" max="10" name="niveau_italien" id="niveau_italien" class="form">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6">
            <label for="niveau_allemand"><img src="https://img.icons8.com/color/26/000000/germany-circular.png" style="vertical-align:top;" /> Allemand</label>
            <input type="number" value="0" min="0" max="10" name="niveau_allemand" id="niveau_allemand" class="form">
        </div>

    </div>
    <div class=" text-right">
        <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
    </div>
</form>
<?php
$content = ob_get_clean();
$title = "FORMAGEST | Fiche diagnostic";
require_once 'views/templates/default.php';
?>