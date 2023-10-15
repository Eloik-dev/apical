<?php
wp_enqueue_style('404-style', get_template_directory_uri() . '/assets/css/404.css');
get_header();
?>

<body>
    <main>
        <div class="content">
            <div class="title">
                <hr>
                <h1>
                    La page demandée n'existe pas
                </h1>
                <hr>
            </div>
            <div class='description'>
                La page demandée n'existe pas. Voici les pages disponibles sur Apical :
            </div>
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>
                    <a href="/formations">Formations</a>
                </li>
                <li>
                    <a href="/blog">Blogue</a>
                </li>
                <li>
                    <a href="/about">À propos</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </main>
</body>


<?= get_footer() ?>