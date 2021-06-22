<?php
ob_start()
?>
<h3><?= $entreprise->getEnseigne(); ?></h3>

<!-- FICHE ENTREPRISE -->
<div class="grid gap-1">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <h5>Entreprise</h5>
        <p class="text-border"><a href="<?= URL ?>entreprises/edit/<?= $entreprise->getId() ?>">Modifier</a> | <a href="<?= URL ?>entreprises/delete/<?= $entreprise->getId() ?>" onclick="return confirm ('Supprimer <?= $entreprise->getEnseigne() ?> ?')" class="red">Supprimer</a></p>

        <div class="bg-white rounded border mb-1">
            <div class="p-2">
                <h3 class="text-center"><?= $entreprise->getEnseigne(); ?></h3>
                <table class="table-details">
                    <tbody>
                        <tr>
                            <th>Enseigne</th>
                            <th><?= $entreprise->getEnseigne(); ?></th>
                        </tr>
                        <tr>
                            <th>Siret</th>
                            <th><?= $entreprise->getSiret(); ?></th>
                        </tr>
                        <tr>
                            <th>Code NAF</th>
                            <th><?= $entreprise->getCode_Naf(); ?></th>
                        </tr>
                        <tr>
                            <th>Forme juridique</th>
                            <th><?= $entreprise->getForme_Juridique(); ?></th>
                        </tr>
                        <tr>
                            <th>Activité</th>
                            <th><?= $entreprise->getActivite(); ?></th>
                        </tr>
                        <tr>
                            <th>Date modification</th>
                            <th><?= $entreprise->getDate_Maj(); ?></th>
                        </tr>
                        <tr>
                            <th>Date création</th>
                            <th><?= $entreprise->getDate_Creation(); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <h5>Coordonnées</h5>
        <div class="bg-white grid p-2 rounded border mb-1 col-12">
            <table class="col-12 table-details">
                <tbody>
                    <tr>
                        <th>Téléphone</th>
                        <th><a href="tel:<?= $entreprise->getTelephone(); ?>"><?= $entreprise->getTelephone(); ?></a></th>
                    </tr>
                    <tr>
                        <th>Mail</th>
                        <th><a href="mailto:<?= $entreprise->getMail(); ?>"><?= $entreprise->getMail(); ?></a></th>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <th><?= $entreprise->getAdresse(); ?></th>
                    </tr>
                    <tr>
                        <th>Code postal</th>
                        <th><?= $entreprise->getCode_Postal(); ?></th>
                    </tr>
                    <tr>
                        <th>Ville</th>
                        <th><?= $entreprise->getVille(); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5>Fiches diagnostic</h5>
        <p class="text-border"><a href="<?= URL ?>fiche-diagnostic/create/<?= $entreprise->getId() ?>">Ajouter</a></p>
        <?php if (!empty($fiches_diagnostic)) : ?>
            <div class="bg-white grid p-2 rounded border mb-1 col-12">
                <table class="col-12 table-details">
                    <tbody>
                        <?php foreach ($fiches_diagnostic as $fiche) : ?>
                            <tr>
                                <th>Date</th>
                                <th><a href="#"><?= $fiche->getDate_creation() ?></a></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <p class="p-2 rounded border-dashed text-grey col-12 text-center text-bold">Section vide</p>
        <?php endif; ?>

    </div>
    <!-- EFFECTIFS -->
    <div class="col-lg-8 col-md-6 col-sm-12">
        <h5>Effectifs</h5>
        <p class="text-border"><a href="<?= URL ?>effectifs/create/<?= $entreprise->getId() ?>">Ajouter</a></p>

        <div class="grid gap-1">

            <?php if (!empty($effectifs_entreprise)) : ?>
                <?php foreach ($effectifs_entreprise as $effectif) : ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 bg-white rounded border p-2">
                        <h4><?= $effectif->getPrenom() . ' ' . $effectif->getNom(); ?></h4>

                        <table class="table-details">
                            <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <th><?= $effectif->getNom(); ?></th>
                                </tr>
                                <tr>
                                    <th>Prénom</th>
                                    <th><?= $effectif->getPrenom(); ?></th>
                                </tr>
                                <tr>
                                    <th>Fonction</th>
                                    <th><?= $effectif->getFonction(); ?></th>
                                </tr>
                                <tr>
                                    <th>Genre</th>
                                    <th><?= $effectif->getGenre(); ?></th>
                                </tr>
                                <tr>
                                    <th>Nom de naissance</th>
                                    <th><?= $effectif->getNom_Naissance(); ?></th>
                                </tr>
                                <tr>
                                    <th>Date de naissance</th>
                                    <th><?= $effectif->getDate_Naissance(); ?></th>
                                </tr>
                                <tr>
                                    <th>Diplôme</th>
                                    <th><?= $effectif->getDiplome(); ?></th>
                                </tr>
                                <tr>
                                    <th>Sécurité sociale</th>
                                    <th><?= $effectif->getSecurite_Sociale(); ?></th>
                                </tr>
                                <tr>
                                    <th>OPCA</th>
                                    <th><?= $effectif->getId_Opca(); ?></th>
                                </tr>
                                <tr>
                                    <th>Dernière modification</th>
                                    <th><?= $effectif->getDate_Maj(); ?></th>
                                </tr>
                                <tr>
                                    <th>Date création</th>
                                    <th><?= $effectif->getDate_Creation(); ?></th>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-border text-right mb-0 mt-1"><a href="<?= URL ?>effectifs/edit/<?= $effectif->getId(); ?>">Modifier</a> | <a href="<?= URL ?>effectifs/delete/<?= $effectif->getId(); ?>" onclick="return confirm ('Supprimer <?= $effectif->getNom() . $effectif->getPrenom() ?> ?')" class="red">Supprimer</a></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="p-2 rounded border-dashed text-grey col-12 text-center text-bold">Section vide</p>
            <?php endif; ?>

        </div>
    </div>
</div>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Fiche entreprise : " . $entreprise->getEnseigne();
require_once 'views/templates/default.php';
?>