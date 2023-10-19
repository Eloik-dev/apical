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
            <div class="posts">
                <div class="ui-sortable">
                    <?= the_content() ?>
                </div>
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