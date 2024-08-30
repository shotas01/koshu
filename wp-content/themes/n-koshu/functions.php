<?php
function my_custom_theme_setup()
{
    // HTML5マークアップサポート
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // タイトルタグサポート
    add_theme_support('title-tag');

    // アイキャッチ画像サポート
    add_theme_support('post-thumbnails');

    // カスタムメニューサポート
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function render_common_section($title, $content, $hr = false)
{
?>
    <div class="common-section" style="text-align: center; margin: 0;margin-bottom:10px">
        <h2 style="text-align: center; margin: 0;"><?php echo esc_html($title); ?></h2>
        <p style="text-align: center; margin: 0;"><?php echo esc_html($content); ?></p>
        <?php if ($hr === true) : ?>
            <hr style="margin-top: 20px;"><?php endif; ?>
    </div>
<?php
}

function enqueue_header_styles()
{
    // header.cssを読み込む
    wp_enqueue_style('header-style', get_template_directory_uri() . '/header.css');
}
add_action('wp_enqueue_scripts', 'enqueue_header_styles');

function enqueue_menu_pc_styles()
{
    wp_enqueue_style('menu-pcstyle', get_template_directory_uri() . '/menu-pc.css');
}
add_action('wp_enqueue_scripts', 'enqueue_menu_pc_styles');


function enqueue_hamburger_menu_scripts()
{
    wp_enqueue_script('hamburger-menu-js', get_template_directory_uri() . '/hamburger.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_hamburger_menu_scripts');

function register_my_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function get_custom_template($template_name)
{
    // テンプレート名が指定されている場合に専用のディレクトリからテンプレートを読み込む
    if (!empty($template_name)) {
        get_template_part('template-parts/' . $template_name);
    }
}
