<?php get_header(); ?>
<!-- section-catalog -->
<section class="section section-catalog single-page" id="section-catalog">
  <div class="container">
    <header class="section__header">
      <h2 class="page-title">Hello picca!</h2>
      <nav class="catalog-nav">
        <?php 
          $catalog_nav_items = get_terms([
            'taxonomy' => 'product-categories',
            'parent'   => 0,
          ]);
          // print_r($catalog_nav_items);s
        ?>

        <?php echo "commit" ?>
        <ul class="catalog-nav__wrapper">
          <li class="catalog-nav__item">
            <a href="<?php echo get_site_url().'/products/'; ?>" class="catalog-nav__btn" >все</a>
          </li>
          <?php foreach($catalog_nav_items as $item) : 
                $product_active_class = strpos($_SERVER['REQUEST_URI'], "$item->slug") !== false ? ' is-active' : '';
            ?>
              <li class="catalog-nav__item">
                <a href="<?php echo get_site_url().'/product-categories/'.$item->slug; ?>" class="catalog-nav__btn <?php echo $product_active_class; ?>"><?php echo $item->name; ?></a>
              </li>
          <?php endforeach; ?> 
        </ul>
      </nav >
    </header>
          <?php if(have_posts()) : ?>
        <div class="catalog">
        <!-- цикл -->
        <?php while ( have_posts() ) : the_post(); ?>
            <?php 
            echo get_template_part('products-content');
            ?> 
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
        </div> <!-- ./catalog -->
        <?php endif; ?>
        <?php 
            $args = [
              'show_all'     => false, // показаны все страницы участвующие в пагинации
              'end_size'     => 1,     // количество страниц на концах
              'mid_size'     => 1,     // количество страниц вокруг текущей
              'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
              'prev_text'    => __('«Назад'),
              'next_text'    => __('Вперед»'),
              'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
              'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
              'screen_reader_text' => __( 'Posts navigation' ),
            ];
            the_posts_pagination( $args );
        ?>
  </div>
</section>
<!-- /.section-catalog -->
<?php get_footer(); ?>