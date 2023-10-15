<!DOCTYPE html>
<html>

<head>
    <meta charset="<?= bloginfo('charset') ?>">
    <title>
        <?= bloginfo('name'); ?> |
        <?= is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <?= wp_head() ?>
</head>

<header>
    <div class="top">
        <div id="header-logo">
            <a href="/">
                <img width="350" src="<?= get_template_directory_uri() . '/assets/images/LogoApical-blanc.svg' ?>"
                    alt="Apical, ma plateforme d'apprentissage">
            </a>
        </div>
        <div class="links">
            <a href="/">
                <img src="<?= get_template_directory_uri() . '/assets/images/Accueil-MenuSecondaire.svg' ?>"
                    alt="Accueil" title="Accueil">
            </a>
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/assets/images/Rechercher-MenuSecondaire.svg' ?>"
                    alt="Rechercher" title="Rechercher">
            </a>
            <a href="#" id="login-popup-button">
                <img src="<?= get_template_directory_uri() . '/assets/images/Login-MenuSecondaire.svg' ?>"
                    alt="Authentification" title="Authentification">
            </a>
        </div>
        <login-popup>
            <span id='close-button'></span>
            <form method="post" action="https://apical.xyz/usagers/authentifier" class="form-horizontal">
                <div class="form-group row">
                    <label for="login" class="control-label col-sm-5 requis">* Usager: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="login" id="login" autofocus="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="motdepasse" class="control-label col-sm-5 requis">* Mot de passe: </label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="motdepasse" id="motdepasse">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="control-label col-sm-5"></div>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <label for="resterconnecte" class="form-check-label" checked="">
                                <input class="form-check-input" type="checkbox" id="resterconnecte"
                                    name="resterconnecte">
                                Rester connecté
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="control-label col-sm-5"></div>
                    <div class="col-sm-6">
                        <a id="soumettreauthentification" class="btn btn-secondary" href="#">Soumettre</a>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="control-label col-sm-5"></div>
                    <div class="col-sm-6">
                        <a href="https://apical.xyz/usagers/creation">Nouvel usager</a>
                    </div>
                </div>
            </form>
            <form action="">

            </form>
        </login-popup>
    </div>
    <nav>
        <ul>
            <li>
                <a href="/formations">Formations</a>
            </li>
            <li>
                <a href="/">Blogue</a>
            </li>
            <li class="dropdown">
                <a href="#" role="button">
                    Outils
                </a>
                <div class="dropdown-menu">
                    <a href="/">Hachage bcrypt</a>
                    <a href="/">Générateur aléatoire</a>
                    <a href="/">Icônes Font Awesome</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" role="button">
                    Aide
                </a>
                <div class="dropdown-menu">
                    <a href="/">Contact</a>
                    <hr>
                    <a href="/">À propos</a>
                </div>
            </li>
        </ul>
    </nav>
</header>