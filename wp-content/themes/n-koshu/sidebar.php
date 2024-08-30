  <!-- ボタン -->
  <div style="display: flex ; justify-content: center;">
      <button class="button-login">
          <div class="button--login-text">
              会員ページ
          </div>
      </button>
  </div>


  <!-- お知らせ -->
  <div>
      <?php render_common_section('お知らせ', 'Nortice', true); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="post-item">
                  <span class="post-date"><?php echo get_the_date(); ?></span>
                  <span class="post-title"><?php the_title(); ?></span>
              </div>
      <?php endwhile;
        endif; ?>
  </div>

  <!--交通・アクセス-->
  <div>
      <?php render_common_section('交通・アクセス', 'Access', true); ?>
      <div class="address">
          <div>住所</div>
          <div style="margin-left: 10px">〒111-1111 <br> 三重県〇〇市××××</div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209437.33002386533!2d136.43265270233442!3d34.89494713321664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60040d6570141741%3A0x4e306eb309cb0b71!2z5LiJ6YeN55yM5bqB!5e0!3m2!1sja!2sjp!4v1724924805376!5m2!1sja!2sjp" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  </div>
  <!-- お問い合わせリンク -->
  <div>
      <?php render_common_section('お問い合わせ', 'Contact'); ?>
      <?php echo do_shortcode('[contact-form-7 id="123" title="コンタクトフォーム 1"]'); ?>

  </div>