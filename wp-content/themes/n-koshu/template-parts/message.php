<div style="display: flex ; justify-content: center;">
    <button class="button-login">
        <div class="button--login-text">
            会員ページ
        </div>
    </button>
</div>

<?php render_common_section('代表あいさつ', 'Message', true); ?>
<div style="display: flex;flex-direction: column; align-items: center; justify-content: center;">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/daihyo.webp" alt="画像の説明" style="width: 300px; height: 300px;">
    <div style="height:700px;width:300px;background-color: #D9D9D9;text-align:center">
        代表挨拶文
    </div>
</div>