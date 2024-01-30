<?php get_header();

    while(have_posts()) {
        the_post();
        pageBanner([
            'title' => 'Hello it is default title',
            'subtitle' => 'Testing Subtitle'
        ]);
    ?>

        <div class="container container--narrow page-section">

            <?php
                $parentId = wp_get_post_parent_id(get_the_ID());
                if ($parentId) { ?>
                    <div class="metabox metabox--position-up metabox--with-home-link">
                        <p>
                            <a class="metabox__blog-home-link" href="<?= get_permalink($parentId) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?= get_the_title($parentId) ?></a> <span class="metabox__main"><?php the_title() ?></span>
                        </p>
                    </div>
                <?php }
            ?>

            <?php
                $existingPages = get_pages([
                        'child_of' => get_the_ID()
                    ]
                );

                if ($parentId || $existingPages) { ?>
                <div class="page-links">
                    <h2 class="page-links__title"><a href="<?= get_permalink($parentId) ?>"><?= get_the_title($parentId) ?></a></h2>
                    <ul class="min-list">
                        <?php
                        if ($parentId) {
                            $findChildren = $parentId;
                        } else {
                            $findChildren = get_the_ID();
                        }

                        wp_list_pages([
                            'title_li' => '',
                            'child_of' => $findChildren
                        ]);
                        ?>
                    </ul>
                </div>
            <?php } ?>

            <div class="generic-content">
                <?php the_content(); ?>
            </div>
        </div>

    <?php  }
    get_footer()
?>
