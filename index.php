<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta property="og:locale" content="ja_JP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>東京理科大学野球部 | Tokyo University Of Science Baseball Club</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/public/img/favicon.ico" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="main_h">
        <div class="row">
            <a class="l-header__logo" href="<?php echo home_url(); ?>">TUS.BBC</a>
            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <ul>
                    <li><a href=".l-section__0">HOME</a></li>
                    <li><a href=".l-section__1">GAME NEWS</a></li>
                    <li><a href=".l-section__2">MEMBER</a></li>
                    <li><a href=".l-section__3">SCHEDULE</a></li>
                    <li><a href=".l-section__4">CONTACT</a></li>
                </ul>
            </nav>
        </div> <!-- / row -->
    </header>
    <div class="l-section__0">
        <div class="l-section__0-box">
            <img src="<?php echo get_template_directory_uri(); ?>/public/img/bg.svg" alt="">
        </div>
        <div class="mouse">
            <span></span>
        </div>
    </div>
    <div class="l-section">
        <section class="image">
            <div class="backgroundImage" id="header"></div>
        </section>
        <section class="content">
            <article>
                <div class="l-section__1">
                    <h1 class="">GAME NEWS</h1>
                    <section class="game-logo slider">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10
                        );
                        $st_query = new WP_Query($args);
                        ?>
                        <?php if ($st_query->have_posts()) : ?>
                            <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
                                <div class="c-carousel">
                                    <img src="<?php echo get_template_directory_uri(); ?>/public/img/samune.jpg">
                                    <div class="c-carousel__contents">
                                        <h3><?php echo $cat_name; ?><?php the_title(); ?></h3>
                                        <p><?php the_time('Y年m月d日'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p>新しい記事はありません</p>
                        <?php endif; ?>
                    </section>
                </div>
            </article>
        </section>
        <section class="image">
            <div class="backgroundImage" id="first"></div>
        </section>
        <section class="content">
            <article>
                <div class="l-section__2">
                    <h1 class="">MEMBER</h1>
                    <table style="width: 100%; border-collapse: collapse; height: 1716px;">
                        <tbody>
                            <tr style="height: 72px; border: solid 1px black;">
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 15%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">位置 / 役職</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 20%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">氏名</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 25%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">学部</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 5%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">学年</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 5%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">投打</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 5%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">身長</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 5%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">体重</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 15%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">出身校</span></td>
                                <td style="height: 72px; border: 1px solid black; background-color: #3b3b3b; text-align: center; width: 5%;"><span style="color: #ffffff; font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">背番号</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">部長</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">黒木 善太</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">工学部工業化学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">182</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">72</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">志学館</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">27</span></td>
                            </tr>
                            <tr style="height: 72px; border: solid 1px black;">
                                <td style="height: 72px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">主将</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">小久保 泰我</span></td>
                                <td style="height: 72px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">工学部工業学科</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">170</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">71</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">横浜緑ケ丘</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">8</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">主務</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">奥 大輔</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">基礎工学部生物工学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">170</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">60</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">保善</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">65</span></td>
                            </tr>
                            <tr style="height: 72px; border: solid 1px black;">
                                <td style="height: 72px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">副将</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">高山 捷匡</span></td>
                                <td style="height: 72px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部化学科</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">164</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">54</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">芝浦工業大学柏</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">36</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">投手</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">舘 諒唯</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第二部数学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右左</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">173</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">65</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">緑岡</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">5</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">加藤 圭悟</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部物理学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">左左</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">165</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">56</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">新宿</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">11</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">野口 就生</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部経営学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">左左</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">168</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">58</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">井草</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">19</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="height: 96px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 96px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">柴田 馨</span></td>
                                <td style="height: 96px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部応用物理学科</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">1</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">178</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">85</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">渋谷教育学園渋谷</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"> </td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">捕手</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">木戸 碧</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部応用物理学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">166</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">75</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">小山台</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">谷口 朝飛</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部経営学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右左</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">175</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">70</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">長野吉田</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">55</span></td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">一塁手</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">滝本 勇貴</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部数学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">左左</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">168</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">72</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">太田東</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                            </tr>
                            <tr style="height: 72px; border: solid 1px black;">
                                <td style="height: 72px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">二塁手</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">花房 玄基</span></td>
                                <td style="height: 72px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部ビジネスエコノミクス学科</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">167</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">66</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">常葉大学付属橘</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">99</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;"> </span></td>
                                <td style="border: 1px solid black; width: 20%; text-align: center; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">今井 優佑</span></td>
                                <td style="border: 1px solid black; text-align: center; width: 25%; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部ビジネスエコノミクス学科</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 96px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">右左</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">171</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">64</span></td>
                                <td style="border: 1px solid black; width: 15%; text-align: center; height: 96px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">横浜翠嵐</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 96px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">23</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="height: 96px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">三塁手</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">仁平 凱</span></td>
                                <td style="height: 96px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部経営学科</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">3</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右左</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">163</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">56</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">芝浦工業大学柏</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">8</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="height: 96px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">遊撃手</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">菅原 純輝</span></td>
                                <td style="height: 96px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部ビジネスエコノミクス学科</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">166</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">66</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">江戸川学園取手</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">4</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="height: 96px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">外野手</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">鈴木 寛大</span></td>
                                <td style="height: 96px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部経営学科</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">175</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">68</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">東京都市大学付属</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">7</span></td>
                            </tr>
                            <tr style="height: 72px; border: solid 1px black;">
                                <td style="height: 72px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 72px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">加成 健太郎</span></td>
                                <td style="height: 72px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部応用数学科</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">171</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">67</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">聖望学園</span></td>
                                <td style="height: 72px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">9</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="height: 96px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 96px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">飯島 雄太</span></td>
                                <td style="height: 96px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理工学部数学科</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">2</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">168</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">75</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">江戸川学園取手</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">49</span></td>
                            </tr>
                            <tr style="height: 96px;">
                                <td style="height: 96px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 96px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">平田　鷹輔</span></td>
                                <td style="height: 96px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">理学部第一部化学科</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">1</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">173</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">90</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">東京都市大学付属</span></td>
                                <td style="height: 96px; border: 1px solid black; width: 5%; text-align: center;"> </td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="height: 48px; border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%;"> </td>
                                <td style="height: 48px; border: 1px solid black; width: 20%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">正田 純輝</span></td>
                                <td style="height: 48px; border: 1px solid black; text-align: center; width: 25%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部経営学科</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">1</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">172</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">72</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 15%; text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">桐生</span></td>
                                <td style="height: 48px; border: 1px solid black; width: 5%; text-align: center;"> </td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%; height: 48px;"> </td>
                                <td style="border: 1px solid black; width: 20%; text-align: center; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">冨樫 悠</span></td>
                                <td style="border: 1px solid black; text-align: center; width: 25%; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">経営学部経営学科</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">1</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">右右</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">178</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">58</span></td>
                                <td style="border: 1px solid black; width: 15%; text-align: center; height: 48px;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 14px;">桐蔭中等</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"> </td>
                            </tr>
                            <tr style="height: 72px;">
                                <td style="border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%; height: 72px;"> </td>
                                <td style="border: 1px solid black; width: 20%; text-align: center; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">長谷川 曉人</span></td>
                                <td style="border: 1px solid black; text-align: center; width: 25%; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">理学部第一部応用化学科</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">1</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">右右</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">183</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">77</span></td>
                                <td style="border: 1px solid black; width: 15%; text-align: center; height: 72px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">浅野</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 72px;"> </td>
                            </tr>
                            <tr style="height: 48px;">
                                <td style="border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%; height: 48px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">マネージャー</span></td>
                                <td style="border: 1px solid black; width: 20%; text-align: center; height: 48px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">西森 文香</span></td>
                                <td style="border: 1px solid black; text-align: center; width: 25%; height: 48px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">理学部第一部数学科</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">3</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"> </td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"> </td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"> </td>
                                <td style="border: 1px solid black; width: 15%; text-align: center; height: 48px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">鶴丸</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 48px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">38</span></td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="border: 1px solid black; background-color: #f0f0f0; text-align: center; width: 15%; height: 36px;"> </td>
                                <td style="border: 1px solid black; width: 20%; text-align: center; height: 36px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">田村 桃笑</span></td>
                                <td style="border: 1px solid black; text-align: center; width: 25%; height: 36px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">理学部第一部化学科</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 36px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">2</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 36px;"> </td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 36px;"> </td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 36px;"> </td>
                                <td style="border: 1px solid black; width: 15%; text-align: center; height: 36px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">浦和第一女子</span></td>
                                <td style="border: 1px solid black; width: 5%; text-align: center; height: 36px;"><span style="font-size: 14px; font-family: tahoma, arial, helvetica, sans-serif;">30</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
        <section class="image">
            <div class="backgroundImage" id="more"></div>
        </section>
        <section class="content">
            <article>
                <div class="l-section__3">
                    <h1 class="">Schedule</h1>
                    <div id="calendar">
                        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=dHVzLmJiYzIwMThAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233366CC&amp;color=%23329262&amp;color=%231F753C" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </article>
        </section>
        <section class="image">
            <div class="backgroundImage" id="last"></div>
        </section>
        <section class="content">
            <article>
                <div class="l-section__4">
                    <h1 class="">Contact</h1>
                    <p>
                        東京理科大学神楽坂硬式野球部公式HPへ足を運んでいただきありがとうございます。<br>
                        東京理科大学神楽坂硬式野球部は主に平日は神楽坂キャンパス、 休日は野田キャンパスで練習を行なっています。
                        春・秋のリーグ戦を終えると試験期間に入り部活動は休みとなり勉学に集中することができます。 現在新東京大学野球リーグでは3部に属していますが、メンバーは2部への復帰、1部への昇格を目指し日々研鑽を重ねています。
                        一緒に昇格を目指し戦っていくメンバーを求めています！
                        マネージャーも随時募集しています。選手のサポートがメインですが野球部の一員に興味がある方はお気軽にご連絡ください。
                        お手数ですが、練習試合の申し込みも含めお問い合せは以下のメールアドレスへご連絡ください。<br>
                        連絡先：<a href="mailto:tus_bbc@yahoo.co.jp">tus_bbc@yahoo.co.jp</a>
                    </p>
                </div>
            </article>
        </section>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.7541674180636!2d139.91205582921233!3d35.922091998758674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDU1JzE5LjUiTiAxMznCsDU0JzQ1LjQiRQ!5e0!3m2!1sja!2sjp!4v1567044209474!5m2!1sja!2sjp" width="100%" height="400" frameborder="0" style="border:0; margin: 0; padding: 0;" allowfullscreen=""></iframe>
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>東京理科大学<span>硬式野球部</span></h3>
            <p class="footer-links">
                Home · Game · Member · Schedule · Gallery · Contact
            </p>
            <p class="footer-company-name">tus.bbc &copy; 2020</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>神楽坂1-3</span> 東京都, 新宿区</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:tus_bbc@yahoo.co.jp">tus_bbc@yahoo.co.jp</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>私たちについて</span>
                新東京大学野球リーグの3部に属しているスポーツクラブチーム(硬式野球部)です。
            </p>
            <div class="footer-icons">
                <a href="https://twitter.com/tusbbc?lang=ja" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/build/js/carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/build/js/paralax.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/build/js/sticky.js"></script>
</body>
</html>