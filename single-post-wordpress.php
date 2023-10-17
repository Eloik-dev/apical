<?php
$fiches = get_category_by_slug('fiches');
$categories = get_term_children($fiches->term_id, 'category');
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
                    <?php foreach ($categories as $category):
                        $category = get_category($category);
                        ?>
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
                                                <a href="/<?= $post->post_name ?>">
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
    <?= get_footer() ?>
</body>