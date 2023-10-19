<!DOCTYPE html>
<html>

<head>
    <meta charset="<?= bloginfo('charset') ?>">
    <title>
        <?= bloginfo('name'); ?> |
        <?= !is_404() ? (is_front_page() ? 'Apprendre, Participer, Interagir, Collaborer, Améliorer sa Logique' : wp_title('')) : 'Page inexistante'; ?>
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
            <form method="post" action="<?= esc_url(admin_url('admin-post.php')); ?>?action=custom_login"
                class="form-horizontal">
                <div class="form-group row">
                    <label for="user_login" class="control-label col-sm-5 requis">* Usager: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="user_login" id="login" autofocus="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_pass" class="control-label col-sm-5 requis">* Mot de passe: </label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="user_pass" id="motdepasse">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="control-label col-sm-5"></div>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <label for="resterconnecte" class="form-check-label" checked="">
                                <input class="form-check-input" type="checkbox" id="resterconnecte" name="rememberme">
                                Rester connecté
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="control-label col-sm-5"></div>
                    <div class="col-sm-6">
                        <button name="wp-submit" class="btn btn-primary" href="#">Soumettre</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="control-label col-sm-5"></div>
                    <div class="col-sm-6">
                        <a href="https://apical.xyz/usagers/creation">Nouvel usager</a>
                    </div>
                </div>
            </form>
        </login-popup>
    </div>
    <nav>
        <ul>
            <?php
            $pages = get_pages(['sort_column' => 'menu_order']);
            foreach ($pages as $page) {
                $page_link = get_page_link($page->ID);

                $children = get_page_children($page->ID, $pages);

                ob_start();
                if ($children) {
                    ?>
                    <li class="dropdown">
                        <a href="<?= get_page_link($page->ID) ?>" role="button">
                            <?= $page->post_title ?>
                        </a>
                        <div class="dropdown-menu">
                            <?php foreach ($children as $child): ?>
                                <a href="<?= get_page_link($child->ID) ?>">
                                    <?= $child->post_title ?>
                                </a>
                            <?php endforeach ?>
                        </div>
                    </li>
                    <?php
                } else if (!$page->post_parent) {
                    ?>
                        <li>
                            <a href="<?= get_page_link($page->ID) ?>">
                            <?= $page->post_title ?>
                            </a>
                        </li>
                    <?php
                }
                echo ob_get_clean();
            }
            ?>
        </ul>
    </nav>
</header>