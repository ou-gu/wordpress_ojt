<?php get_header(); ?>

<main>


    <!-- pictureタグを使うと簡単にレスポンシブ対応を使用できる -->
        <div class="img-box">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </div>
            <div class="pc-menu">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type'      => 'attachment',
                            'numberposts'    => -1,
                            'post_status'    => null,
                            'post_mime_type' => 'image'
                        );
                        
                        $attachments = get_posts( $args );
                        
                        if ( $attachments ) {
                            foreach ( $attachments as $attachment ) :
                                if ( 1 === preg_match( "/visual_pc_/u" , $attachment->post_title ) ) {
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="pc-img" src="' . wp_get_attachment_url( $attachment->ID ) . '">'; // 画像パス
                                    echo '</div>';
                                }
                            endforeach;
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
            </div>
            <div class="sp-img">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $args2 = array(
                            'post_type'      => 'attachment',
                            'numberposts'    => -1,
                            'post_status'    => null,
                            'post_mime_type' => 'image'
                        );
                        
                        $attachments2 = get_posts( $args2 );
                        
                        if ( $attachments2 ) {
                            foreach ( $attachments2 as $attachment2 ) :
                                if ( 1 === preg_match( "/visual_sp_/u" , $attachment2->post_title ) ) {
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="sp-img" src="' . wp_get_attachment_url( $attachment2->ID ) . '">'; // 画像パス
                                    echo '</div>';
                                }
                            endforeach;
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
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
        <?php if (have_posts()) : ?>
            <section class="section">
                <h1 class="main-title">Latese Ariticles</h1>
                <div class="blog-center container">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="blog">
                            <a href="<?php the_permalink(); //詳細へのリンク 
                                        ?>">
                                <div class="img-cover">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                                <p class="time"><?php the_time('Y年m月d日') //投稿日時
                                                ?></p>
                                <p class="contents">
                                    <?php the_title(); //タイトル　
                                    ?>
                                </p>
                                <div class="read">
                                    <P class="read-more">READ MORE</P>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>


</main>
<?php else : ?>
    <h2 class="subtitle">投稿はありません</h2>
<?php endif; ?>

<?php get_footer(); ?>