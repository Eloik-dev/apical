<?php
$fiches = get_category_by_slug('fiches');
$categories = get_categories(['child_of' => $fiches->term_id]);

?>

<?= get_header() ?>

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
            <div class="posts">
                <div class="ui-sortable">
                    <?php foreach ($categories as $category): ?>
                        <div class="card border-bottom-0">
                            <div class="card-header">
                                <a href="#" class='category-title'>
                                    <?= $category->name ?>
                                </a>
                            </div>
                            <?php
                            $posts = get_posts(['category' => $category->term_id]);
                            foreach ($posts as $post): ?>
                                <div class="collapse show">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <?= $post->post_title ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</body>


<?= get_footer() ?>

</html>