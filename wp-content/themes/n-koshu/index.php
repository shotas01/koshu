<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- テーマサポートによるタイトル管理 -->
    <?php wp_head(); ?>
    <style>
        @media (min-width: 640px) {
            .sidebar {
                width: 400px !important;
                max-width: 400px !important;
            }

            header {
                display: none;
            }

            h1 {
                display: inline !important;
                padding-left: 200px;
                padding-top: 400px;
            }

            body {
                display: flex;
                flex-direction: row;
            }
        }

        .background-image {
            background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/2A8A0762.jpg");
            background-size: cover;
            background-position: center;
            height: max-content;
        }


        body {
            width: 100%;
            max-width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;

        }

        header {
            background-color: #f2f2f2;
            width: 100%;
            max-width: 100%;
        }

        .sidebar {
            position: absolute;
            right: 0;
            width: 100%;
            max-width: 100%;
            /* サイドバーの幅 */
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;

        }

        .sidebar-button {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .sidebar>div {
            padding-top: 50px;
            padding-bottom: 50px;
            width: calc(100% - 40px);
            max-width: calc(100% - 40px);
            display: inline-block;
        }

        h1 {
            color: aliceblue;
            font-size: 90px;
        }

        .button-login {
            width: 300px;
            height: 60px;
            background-color: #57A63D;
            border-radius: 20px;
            border: none;
            color: white;
            display: inline-block;
        }

        .button--login-text {
            font-size: 32px;
            color: white;
        }

        .address {
            display: flex;
            flex-direction: row;
            align-items: center;
            font-size: -16px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .post-item {
            display: flex;
            align-items: center;
            /* 縦方向の中央揃え */
            gap: 10px;
            /* 日付とタイトルの間のスペース */
            margin-bottom: 10px;
            /* 各投稿の間のスペース */
        }

        .post-date {
            color: #333;
            /* 日付の色 */
        }

        .post-title {
            color: #555;
            /* タイトルの色 */
        }
    </style>

</head>

<body class="background-image body-flex">
    <!-- メインコンテンツ -->
    </ul>
    <h1 style="display: none;">三重公衆衛生学会</h1>
    <?php get_template_part('menu-pc'); ?>

    <main>
        <!-- サイドバー -->
        <header>
            <?php get_header(); ?>
        </header>
        <div class="sidebar">
            <?php
            if (is_page('company-info')) {
                get_custom_template('company-info'); // template-parts/company-info.php を読み込む
            } elseif (is_page('message')) {
                get_custom_template('message');      // template-parts/message.php を読み込む
            } elseif (is_page('report')) {
                get_custom_template('report');       // template-parts/report.php を読み込む
            } elseif (is_page('recruit')) {
                get_custom_template('recruit');      // template-parts/recruit.php を読み込む
            } else {
                get_sidebar(); // その他のページの場合はサイドバーを表示
            }
            ?>

        </div>
        <?php get_footer(); ?>
    </main>
</body>

</html>