<?php
ob_start()
?>

<h3><?= $of->getNom_Commercial(); ?></h3>

<!-- FICHE ORGNISME FORMATION -->
<div class="grid gap-2 ">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <h5>Organisme</h5>
        <p class="text-border"><a href="<?= URL ?>organismes-de-formation">Retour</a> | <a href="<?= URL ?>organismes-de-formation/edit/<?= $of->getId() ?>">Modifier</a> | <a href="<?= URL ?>organismes-de-formation/delete/<?= $of->getId() ?>" onclick="return confirm ('Supprimer <?= $of->getNom_Commercial() ?> ?')" class="text-red">Supprimer</a></p>

        <div class="card mb-1">
            
                <h4 class="text-center"><?= $of->getNom_Commercial(); ?></h4>
            
            
                <table class="table-details">
                    <tbody>
                        <tr>
                            <th>Nom commercial</th>
                            <th><?= $of->getNom_Commercial(); ?></th>
                        </tr>
                        <tr>
                            <th>Siret</th>
                            <th><?= $of->getSiret(); ?></th>
                        </tr>
                        <tr>
                            <th>Code APE</th>
                            <th><?= $of->getCode_Ape(); ?></th>
                        </tr>
                        <tr>
                            <th>Numéro déclaration</th>
                            <th><?= $of->getNumero_Declaration(); ?></th>
                        </tr>
                        <tr>
                            <th>Discipline</th>
                            <th><?= $of->getDiscipline(); ?></th>
                        </tr>
                        <tr>
                            <th>Numéro Qualiopi</th>
                            <th><?= $of->getNumero_Qualiopi(); ?></th>
                        </tr>
                        <tr>
                            <th>TVA</th>
                            <th><?= $of->getTva(); ?></th>
                        </tr>
                        <tr>
                            <th>Date modification</th>
                            <th><?= $of->getDate_Maj(); ?></th>
                        </tr>
                        <tr>
                            <th>date création</th>
                            <th><?= $of->getDate_Creation(); ?></th>
                        </tr>
                    </tbody>
                </table>
            
        </div>

        <h5>Coordonnées</h5>
        <div class="card mb-1">
            <table class="table-details">
                <tbody>
                    <tr>
                        <th>Téléphone</th>
                        <th><a href="tel:<?= $of->getTelephone(); ?>"><?= $of->getTelephone(); ?></a></th>
                    </tr>
                    <tr>
                        <th>Mail</th>
                        <th><a href="mailto:<?= $of->getMail(); ?>"><?= $of->getMail(); ?></a></th>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <th><?= $of->getAdresse(); ?></th>
                    </tr>
                    <tr>
                        <th>Code postal</th>
                        <th><?= $of->getCode_Postal(); ?></th>
                    </tr>
                    <tr>
                        <th>Ville</th>
                        <th><?= $of->getVille(); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Formateurs -->
    <div class="col-lg-8 col-md-6 col-sm-12">
        <h5>Formateurs</h5>
        <p class="text-border"><a href="<?= URL ?>formateurs/create/<?= $of->getId() ?>">Ajouter</a></p>

        <div class="grid gap-1">

            <?php if (!empty($formateurs)) : ?>
                <?php foreach ($formateurs as $formateur) : ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 card">
                        <h4><?= $formateur->getPrenom() . ' ' . $formateur->getNom(); ?></h4>
                        <div>
                            <table class="table-details">
                                <tbody>
                                    <tr>
                                        <th>Nom</th>
                                        <th><?= $formateur->getNom(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Prénom</th>
                                        <th><?= $formateur->getPrenom(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Discipline</th>
                                        <th><?= $formateur->getDiscipline(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Adresse</th>
                                        <th><?= $formateur->getAdresse(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Code postal</th>
                                        <th><?= $formateur->getCode_postal(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Ville</th>
                                        <th><?= $formateur->getVille(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Telephone</th>
                                        <th><a href="tel:<?= $formateur->getTelephone(); ?>"><?= $formateur->getTelephone(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Mail</th>
                                        <th><a href="mailto:<?= $formateur->getMail(); ?>"><?= $formateur->getMail(); ?></a></th>
                                    </tr>
                                    <tr>
                                        <th>Code NAF</th>
                                        <th><?= $formateur->getCode_Naf(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Numéro Qualiopi</th>
                                        <th><?= $formateur->getNumero_Qualiopi(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>TVA</th>
                                        <th><?= $formateur->getTVA(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Date modification</th>
                                        <th><?= $formateur->getNumero_Qualiopi(); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Date création</th>
                                        <th><?= $formateur->getDate_Creation(); ?></th>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-border text-right mt-1 mb-0"><a href="<?= URL ?>formateurs/edit/<?= $formateur->getId(); ?>">Modifier</a> | <a href="<?= URL ?>formateurs/delete/<?= $formateur->getId(); ?>" onclick="return confirm ('Supprimer <?= $formateur->getNom() . $formateur->getPrenom() ?> ?')" class="text-red">Supprimer</a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="p-2 border dashed text-grey col-12 text-center text-bold">Section vide</p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$title = 'FORMAGEST | Fiche O.F. : ' . $of->getNom_Commercial();
require_once 'views/templates/default.php';
?>