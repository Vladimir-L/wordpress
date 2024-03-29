<?php

function pageBanner(array $params = []) {

    if (!isset($params['title'])) {
        $params['title'] = get_the_title();
    }

    if (!isset($params['subtitle'])) {
        $params['subtitle'] = get_field('page_banner_subtitle');
    }

    if (!isset($params['photo'])) {
        if (get_field('page_banner_background_image')) {
            $params['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
            $params['photo'] = get_theme_file_uri('/images/ocean.jpg');
        }
    }
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?= $params['photo'] ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?= $params['title']; ?></h1>
            <div class="page-banner__intro">
                <p><?= $params['subtitle']; ?></p>
            </div>
        </div>
    </div>
<?php }

function education_files() {
    wp_enqueue_script('main-education-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('education_main_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('education_additional_styles', get_theme_file_uri('/build/style-index.css'));
}

add_action('wp_enqueue_scripts', 'education_files');

function education_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'education_features');

function education_adjust_query($query) {
    if (!is_admin() && is_post_type_archive('program') && $query->is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }

    if (!is_admin() && is_post_type_archive('event') && $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', [
            [
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            ]
        ]);
    }
}

add_action('pre_get_posts', 'education_adjust_query');
