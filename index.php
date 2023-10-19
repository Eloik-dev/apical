<?php get_header(); ?>

<body>
    <main>
        <div class="content">
            <div class="title">
                <hr>
                <h1>
                    Formation PUB020: WordPress, 2023
                </h1>
                <hr>
            </div>
            <div class="posts">
                <button class="develop btn btn-secondary">
                    Tout développer
                </button>
                <div class="ui-sortable">
                    <?php
                    if (have_posts()) {
                        $posts = get_posts();
                        foreach ($posts as $key => $post) {
                            ob_start();
                            $key++;
                            ?>
                            <div class="card border-bottom-0">
                                <div class="card-header">
                                    <a href="<?= get_post_permalink($post->ID) ?>" class='category-title'>
                                        <?= "{$key}. {$post->post_title}" ?>
                                    </a>
                                </div>
                                <?php
                                $comments = get_comments(['post_id' => $post->ID]);
                                foreach ($comments as $comment): ?>
                                    <div class="collapse show">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <?= $comment->comment_content ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php
                            echo ob_get_clean();
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?= get_footer() ?>
</body>
</script>