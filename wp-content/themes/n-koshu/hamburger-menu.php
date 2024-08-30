<!-- hamburger-menu.php -->
<div class="hamburger-menu">
    <button class="hamburger-button" id="hamburger-button">
        <!-- ハンバーガーアイコン -->
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
    <!-- ナビゲーションメニュー -->
    <nav class="hamburger-nav" id="hamburger-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // メニューのロケーションを指定
            'menu_class' => 'hamburger-menu-items' // CSSクラスを指定
        ));
        ?>
    </nav>
</div>