<?php
wp_enqueue_style('single-style', get_template_directory_uri() . '/assets/css/single.css');
get_header();
?>

<body>
    <main>
        <div class="content">
            <div class="title">
                <hr>
                <h1>
                    <?= wp_title('') . ', ' . get_the_date('Y') ?>
                </h1>
                <hr>
            </div>
            <div class="description">
                <p>Comme pour tout programme, il est possible d'éditer le code d'un site Web, qu'il soit écrit en PHP
                    pur, en WordPress ou dans tout autre langage ou framework, avec un éditeur simple. Il est cependant
                    plus intéressant d'utiliser un environnement de développement plus évolué afin de profiter des
                    nombreuses fonctionnalités qu'il offre.</p>
                <p>On utilise l'acronyme IDE (Integrated Development Environment) pour désigner un tel environnement de
                    développement.</p>
                <p>Parmi les fonctionnalités qu'un IDE peut offrir, notons&nbsp;:</p>
                <ul>
                    <li>Possibilité de voir d'un coup d'oeil l'ensemble des fichiers du projet;</li>
                    <li>Coloration syntaxique;</li>
                    <li>Complétion de code;</li>
                    <li>Détection d'erreurs (analyse du code en temps réel);</li>
                    <li>Historique des modifications pour chaque fichier;</li>
                    <li>Aperçu des couleurs correspondant aux codes RGB;</li>
                    <li>Modèles de base pour les fichiers selon leur type;</li>
                    <li>Possibilité de créer des <em>snippets</em>&nbsp;(extraits de codes automatiques) pour faciliter
                        l'entrée de code souvent utilisé;</li>
                    <li><span class="clavier">Ctrl</span>+Clic pour atteindre une définition de classe ou de fonction
                        (ou<span class="clavier">⌘ Cmd</span>+Clic sous Mac);</li>
                    <li>Intégration de Git pour gérer les versions;</li>
                    <li>Liste des tâches à réaliser présentée dans une fenêtre (commentaires dans le code débutant par
                        TODO);</li>
                    <li>Sélectioner une colonne sur plusieurs lignes, opération aussi appelée <span
                            class="terme">sélection rectangulaire</span> (selon l'éditeur, Sous Windows : <span
                            class="clavier">Alt</span>+Sélectionner ou <span class="clavier">Ctrl</span>+<span
                            class="clavier">Alt</span>+<span class="clavier">Maj</span>+Sélection, Sous Mac : <span
                            class="clavier">⌃ Ctrl</span>+<span class="clavier">⇧ Maj</span>+Sélection ou <span
                            class="clavier">⌥ Option</span>+<span class="clavier">⇧ Maj</span>+Sélection);</li>
                    <li>Outil de gestion de la base de données intégré;</li>
                    <li>Mais le plus important est sans aucun doute la possibilité d'utiliser le débogueur pour exécuter
                        le programme une ligne à la fois, pour consulter la valeur des variables, etc.</li>
                </ul>
                <p>Les fonctionnalités varieront bien sûr selon l'IDE choisi mais cette liste vous donne un bon aperçu
                    de ce à quoi vous pouvez vous attendre.</p>
                <h2>Quelques IDE intéressants</h2>
                <p>Il existe de nombreux IDE adaptés au PHP. En voici quelques-uns.</p>
                <ul>
                    <li><a href="https://www.jetbrains.com/phpstorm/" target="_blank"
                            rel="nofollow noopener">PhpStorm</a>&nbsp;: payant mais gratuit pour les étudiants inscrits
                        dans une institution autorisée. Très complet et très utilisé sur le marché du travail. PhpStorm
                        est spécialisé pour lePHP. Il existe des IDE équivalents pour Python, pour Java, etc.</li>
                    <li><a href="https://code.visualstudio.com/" target="_blank" rel="nofollow noopener">Visual Studio
                            Code</a>&nbsp;: cet IDE gratuit s'est taillé une place intéressante sur le marché. De
                        nombreuses extensions permettent d'y ajouter des fonctionnalités et de répondre aux besoins de
                        différents langages de programmation.</li>
                    <li><a href="http://www.codelobster.com/" target="_blank"
                            rel="nofollow noopener">CodeLobster</a>&nbsp;: gratuit, spécialisé pour le PHP, mais les
                        fonctionnalités sont limitées.</li>
                </ul>
            </div>
        </div>
        <div class="comments">
            <?= comments_template() ?>
            <?php foreach (get_comments() as $comment): ?>
                <div class="comment">
                    <h3>
                        <?= $comment->comment_author ?>
                    </h3>
                    <p>
                        <?= $comment->comment_content ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?= get_footer() ?>
</body>