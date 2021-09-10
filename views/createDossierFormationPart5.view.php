<?php
session_start();
$_SESSION['id_programme'] = $programme->getId();
$_SESSION['programme'] = $programme->getLabel();

ob_start()
?>
<div class="step-line">
    <div class="step-card-active">
        <span>1</span>
        <p>Stagiaire</p>
        <a href="<?= URL ?>entreprises/read/<?= $_SESSION['id_entreprise'] ?>" class="text-grey"><?= $_SESSION['entreprise'] . ' - ' . $_SESSION['stagiaire'] ?></a>
    </div>
    <div class="step-card-active">
        <span>2</span>
        <p>Organisme</p>
        <a href="<?= URL ?>organismes-de-formation/read/<?= $_SESSION['id_organisme_formation'] ?>" class="text-grey"><?= $_SESSION['organisme_formation']?></a>

    </div>
    <div class="step-card-active">
        <span>3</span>
        <p>Formateur</p>
        <a href="<?= URL ?>organismes-de-formation/read/<?= $_SESSION['id_organisme_formation'] ?>" class="text-grey"><?= $_SESSION['formateur']?></a>
    </div>
    <div class="step-card-active">
        <span>4</span>
        <p>Programme</p>
        <a href="<?= URL ?>organismes-de-formation/read/<?= $_SESSION['id_programme'] ?>" class="text-grey"><?= $_SESSION['programme']?></a>

    </div>
    <div class="step-card-active">
        <span>5</span>
        <p>Logistique</p>
    </div>
    <div class="step-card">
        <span>6</span>
        <p>Financement</p>
    </div>
</div>


<h3>Créer un dossier de formation</h3>

<h5>5. Sélectionnez les modalités logistiques</h5>

<p>$_SESSION</p>
<pre>
    <?= var_dump($_SESSION) ?>
</pre>

<p>$programme</p>
<pre>
    <?= var_dump($programme) ?>
</pre>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Montage dossier : Sélection des modalités logistiques";
require_once 'views/templates/default.php';
?>