<?php get_header(); ?>

    <main>
        <!-- pictureタグを使うと簡単にレスポンシブ対応を使用できる -->
        <div class="container">

            <div class="img-box">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_2_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_2_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_3_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_3_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_4_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_4_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_5_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_5_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_6_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_6_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="main-photo">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_7_sp.png" media="(max-width: 767px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_7_pc.png" alt="アメリカンビレッジの夜景写真" />
                            </picture>
                        </div>


                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <picture class="sign-logo">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" media="(max-width: 767px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="アメリカンビレッジのサインロゴ" />
                </picture>

            </div>
            <div class="under-text">
                <p>進化し続ける「街」<br class="br-sp">アメリカンビレッジマガジン</p>
            </div>

            <!-- blog -->
            <?php if(have_posts()): ?>
            <section class="section">
                <h1 class="main-title">Latese Ariticles</h1>
                <div class="blog-center container">
                    <?php while (have_posts()): the_post(); ?>
                    <div class="blog">
                        <div class="img-cover">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <p class="time"><?php the_time('Y年m月d日') //投稿日時?></p>
                        <p class="contents">
                        <a href="<?php the_permalink(); //詳細へのリンク ?>"><?php the_title(); //タイトル　?></a>
                        </p>
                        <a class="read" href="#">READ MORE</a>
                    </div>
            <?php endwhile; ?>
                    <!-- <div class="blog">
                        <div class="img-cover">
                            <img src="img/post_img_2.png" alt="" />
                        </div>
                        <time class="time" datetime=”2018-5-19” itemprop=”datepublished”>2018 / 5 / 19</time>
                        <p>
                            あのネオンはいつ交換するのか！？観覧車の謎に迫る？
                        </p>
                        <a class="read" href="#">READ MORE</a>
                    </div>
                    <div class="blog">
                        <div class="img-cover">
                            <img src="img/post_img_3.png" alt="" />
                        </div>
                        <time class="time" datetime=”2018-5-19” itemprop=”datepublished”>2018 / 5 / 18</time>
                        <p>
                            ラソナの車内はこんなのよ
                        </p>
                        <a class="read" href="#">READ MORE</a>
                    </div>
                    <div class="blog">
                        <div class="img-cover">
                            <img src="img/post_img_4.png" alt="" />
                        </div>
                        <time class="time" datetime=”2018-5-19” itemprop=”datepublished”>2018 / 5 / 17</time>
                        <p>
                            お隣のアラハはハワイ？
                        </p>
                        <a class="read" href="#">READ MORE</a>
                    </div>
                    <div class="blog">
                        <div class="img-cover">
                            <img src="img/post_img_5.png" alt="" />
                        </div>
                        <time class="time" datetime=”2018-5-16” itemprop=”datepublished”>2018 / 5 / 16</time>
                        <p>
                            なぜテント？ラソナの人に聞いてみた
                        </p>
                        <a class="read" href="#">READ MORE</a>
                    </div>
                    <div class="blog">
                        <div class="img-cover">
                            <img src="img/post_img_6.png" alt="" />
                        </div>
                        <time class="time" datetime=”2018-5-15” itemprop=”datepublished”>2018 / 5 / 15</time>
                        <p>
                            ベイエリアオシャレすぎる問題
                        </p>
                        <a class="read" href="#">READ MORE</a>
                    </div> -->

                </div>
            </section>


    </main>
            <?php else: ?>
                <h2 class="subtitle">投稿はありません</h2>
            <?php endif; ?>

    <?php get_footer(); ?>
