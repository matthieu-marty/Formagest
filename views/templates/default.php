<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="icon" href="<?= URL ?>public/icon/icon.png" type="image/png">
    <link rel="stylesheet" href="<?= URL ?>public/style/formagest.css">
    <title><?= $title ?></title>
</head>

<body>

    <!-- DASHBOARD WRAPPER-->
    <div class="dashboard-grid">

        <!-- SIDEBAR-->
        <div class="sidebar">
            <img src="<?= URL ?>public/logo/logo-blue.svg" class="sidebar-logo">
            <h1 class="sidebar-title">FormaGest</h1>
            <a class="sidebar-link" href="<?= URL ?>accueil">
                <span class="iconify" data-icon="fluent:home-48-filled" data-inline="false"></span>
                <p>Accueil</p>
            </a>
            <a class="sidebar-link" href="<?= URL ?>accueil">
                <span class="iconify" data-icon="fluent:board-28-filled" data-inline="false"></span>
                <p>Tableau suivi</p>
            </a>
            <a class="sidebar-link" href="<?= URL ?>dossiers-de-formation">
                <span class="iconify" data-icon="fluent:folder-28-filled" data-inline="false"></span>
                <p>Dossiers</p>
            </a>
            <a class="sidebar-link" href="<?= URL ?>back-office">
                <span class="iconify" data-icon="fluent:database-24-filled" data-inline="false"></span>
                <p>Back Office</p>
            </a>
        </div>

        <!-- MOBILE MENU -->
        <div class="mobile">
            <label class="menu-icon" for="display-menu"><span class="iconify" data-icon="fluent:line-horizontal-3-20-filled" data-inline="false"></span></label>
            <input type="checkbox" id="display-menu" name="display-menu">
            <a href="<?= URL ?>accueil" style="text-decoration:none; font-weight:bold; color:var(--blue); margin-left: 1rem; font-size:1.5rem;line-height:2rem; vertical-align:middle;">Formagest</a>
            <div class="mobile-menu">
                <div class="text-center" style="border: 1px solid var(--border);border-bottom: 1px solid var(--border); padding-bottom: 0.5rem;padding-top: 0.5rem;">
                    <a href="#" class="mobile-link"><span class="iconify" data-icon="fluent:alert-24-filled" data-inline="false"></a>
                    <a href="#" class="mobile-link"><span class="iconify" data-icon="fluent:person-circle-20-filled" data-inline="false"></span></a></a>
                    <a href="#" class="mobile-link"><span class="iconify" data-icon="fluent:settings-28-filled" data-inline="false"></span></a>
                    <a href="#" class="mobile-link"><span class="iconify" data-icon="fluent:door-16-filled" data-inline="false"></span></a>
                </div>
                <div class="flex-col">
                    <a class="mobile-link" href="<?= URL ?>accueil"><span class="iconify" data-icon="fluent:home-48-filled" data-inline="false"></span> Accueil</a>
                    <a class="mobile-link" href="<?= URL ?>accueil"><span class="iconify" data-icon="fluent:board-28-filled" data-inline="false"></span> Tableau suivi</a>
                    <a class="mobile-link" href="<?= URL ?>dossiers-de-formation"><span class="iconify" data-icon="fluent:folder-28-filled" data-inline="false"></span> Dossiers</a>
                    <a class="mobile-link" href="<?= URL ?>entreprises"><span class="iconify" data-icon="fluent:database-20-filled" data-inline="false"></span> Entreprises</a>
                    <a class="mobile-link" href="<?= URL ?>organismes-de-formation"><span class="iconify" data-icon="fluent:database-20-filled" data-inline="false"></span> Organismes</a>
                    <a class="mobile-link" href="<?= URL ?>opcas"><span class="iconify" data-icon="fluent:database-20-filled" data-inline="false"></span> OPCAs</a>
                </div>
            </div>
        </div>

        <!-- PAGE-->
        <div style="padding: 0.5rem;">
            <!-- CONTENT -->
            <?= $content ?>
        </div>

    </div>


</body>

</html>