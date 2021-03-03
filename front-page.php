<?php get_header( );?>
<main class="front-page-header">
  <div class="container">
    <div class="hero"> 
      <div class="left">
      <?php
          //обьявляем глобальную переменную
          global $post;

          $myposts = get_posts([ 
            'numberposts' => 1, //количество постов 
            'category_name' => 'javascript,css, html, webdesign' //название категории
          ]);
            //проверяем есть ли посты
          if( $myposts ){
          //если естьб запускаем цикл
            foreach( $myposts as $post ){
              setup_postdata( $post ); // устанавливаем данные
              ?>
      <img src="<?php the_post_thumbnail_url( ) ?>" alt="" class="post-thumb">
        <?php $author_id = get_the_author_meta('ID') ?>
        <a href="<?php echo get_author_posts_url( $author_id ) ?>" class="author">
          <img class="avatar" src="<?php echo get_avatar_url($author_id)?>" alt="">
             <div class="author-bio">
             <span class="author-name"> <?php the_author(); ?> </span>
             <span class="author-rank"> Должность </span>
          </div>
        </a>
        <div class="post-text">
         <?php the_category();?> 
          <h2 class="post-title"> <?php echo wp_trim_words( get_the_title(), 60, '...' );?> </h2>
           <a href="<?php echo get_the_permalink();?>" class="more"> Читать далее </a>
        </div>
          <?php 
              }
            } else {
              ?><p>Постов нет</p><?php // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>

      <div class="right">
        <h3 class="recommend">Рекомендуем</h3>
        <ul class="posts-list">
            <?php
              //обьявляем глобальную переменную
              global $post;

              $myposts = get_posts([ 
                'numberposts' => 5, //количество постов 
                'offset' => 1,
                'category_name' => 'javascript, css, html, webdesign'
              ]);
                //проверяем есть ли посты
              if( $myposts ){
              //если естьб запускаем цикл
                foreach( $myposts as $post ){
                  setup_postdata( $post ); // устанавливаем данные
                  ?>
              <li class="post">
                <?php the_category();?>
                <a class="post-permalink" href="<?php echo get_the_permalink(); ?>" >
                  <h4 class="post-title"> <?php echo wp_trim_words( get_the_title(), 60, '...' );?> </h4>
                </a>
              </li>
              <?php 
                  }
                } else {
                  ?><p>Постов нет</p><?php // Постов не найдено
                }

                wp_reset_postdata(); // Сбрасываем $post
              ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<div class="container">
  <ul class="article-list">
      <?php
       //обьявляем глобальную переменную
          global $post;
           $myposts = get_posts([ 
               'numberposts' => 4, //количество постов 
                'category_name' => 'articles', //название категории
            ]);
               //проверяем есть ли посты
            if( $myposts ){
            //если есть, запускаем цикл
              foreach( $myposts as $post ){
                setup_postdata( $post ); // устанавливаем данные
      ?>
              <li class="article-item">
                <a class="article-permalink" href="<?php echo get_the_permalink(); ?>" >
                  <h4 class="article-title"> <?php echo wp_trim_words( get_the_title(), 5, '...' );?> </h4>
                </a>
                <img width="65" height="65" src="<?php echo get_the_post_thumbnail_url( null , 'homepage-thumb' ) ?>" alt="" >
              </li>
              <?php 
                  }
                } else {
              ?><p>Постов нет</p>
              <?php // Постов не найдено
                }

                wp_reset_postdata(); // Сбрасываем $post
              ?>
        </ul>
</div>