<?php
$formations = get_category_by_slug('formations');

get_header();
?>

<body>
    <main>
        <div class="content">
            <div class="title">
                <hr>
                <h1>
                    Bienvenue sur Apical, votre plateforme d'apprentissage!
                </h1>
                <hr>
            </div>
            <div class='description'>
                Apical c'est votre plateforme d'apprentissage!<br><br>
                Vous y trouverez de nombreuses formations, principalement dans le domaine de l'informatique.<br><br>
                Bienvenue à tous!<br><br>
            </div>
            <div class="second-title">
                <h2>
                    <span>
                        Mes formations
                    </span>
                </h2>
            </div>
            <div class="formations">
                <div class="ui-sortable">
                    <div class="card border-bottom-0">
                        <?php
                        $posts = get_posts(['category' => $formations->term_id]);
                        foreach ($posts as $key => $post): ?>
                            <div class="card-header">
                                <a href="/formations/<?= $post->post_name ?>" class='category-title'>
                                    <?= ($key + 1) . '. ' . $post->post_title ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>


<?= get_footer() ?>