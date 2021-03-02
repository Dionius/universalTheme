<?php get_header( );?>
<main class="front-page-header">
  <div class="container">
    <div class="hero"> 
      <div class="left">
      <img src="<?php echo get_template_directory_uri(  ) .'/assets/images/image.jpg' ?>" alt="" class="post-thumb">
        <a href="#" class="author">
          <img class="avatar" src="<?php echo get_template_directory_uri(  ) . '/assets/images/avatar.png' ?>" alt="">
             <div class="author-bio">
             <span class="author-name"> Имя Автора </span>
             <span class="author-rank"> Должность </span>
          </div>
        </a>
        <div class="post-text">
        <a href="#" class="category-name"> Рубрики </a>
        <h2 class="post-title">название поста</h2>
        <a href="#" class="more"> Читать далее </a>
        </div>
      </div>

      <div class="right">
        <h3 class="recommend">Рекомендуем</h3>
        <ul class="posts-list">
          <li class="post">
            <span class="category-name">Категория</span>
            <h4 class="post-title">Название поста в две строки</h4>
          </li>
          <li class="post">
            <span class="category-name">Категория</span>
            <h4 class="post-title">Название поста в две строки</h4>
          </li>
          <li class="post">
            <span class="category-name">Категория</span>
            <h4 class="post-title">Название поста в две строки</h4>
          </li>
          <li class="post">
            <span class="category-name">Категория</span>
            <h4 class="post-title">Название поста в две строки</h4>
          </li>
          <li class="post">
            <span class="category-name">Категория</span>
            <h4 class="post-title">Название поста в две строки</h4>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>