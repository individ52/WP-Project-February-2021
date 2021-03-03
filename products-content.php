<!-- 18 minut -->

<?php 
$product_id = get_the_ID();

$product_price = carbon_get_post_meta($product_id, 'product_price');
$product_attributes = carbon_get_post_meta($product_id, 'product_attributes');
$product_img_src = get_the_post_thumbnail_url( $product_id, 'product' );
$product_img_src_webp = convertToWebpSrc($product_img_src);


$product_categories = get_the_terms($product_id, 'product-categories');
$product_categories_str = '';
foreach($product_categories as $category) {
    $product_categories_str .= "$category->slug,";
}
$product_categories_str = substr($product_categories_str, 0,-1);
?>
<pre>
<!-- <?php print_r(); ?> -->

</pre>
<div class="catalog__item" data-category="<?php echo $product_categories_str; ?>">
<?php 
$terms = get_the_terms( $product_id, 'product-categories');
if($terms) {
    foreach( $terms as $term ) {
        $term = get_term_by("id", $term->parent, "product-categories");
        if ($term->parent > 0) {
            $term = get_term_by("id", $term->parent, "product-categories");
        }
        $cat_obj = get_term($term->term_id, 'product-categories');
        $cat_name = $cat_obj->slug;
    }
}
// echo '<br />('. $cat_name . ')';

?>
    <div class="product catalog__product">
        <picture>
        <source type="image/webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-srcset="<?php echo $product_img_src_webp; ?>">
        <img class="product__img lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="<?php echo $product_img_src; ?>" alt="">
        </picture>
        <div class="product__content">
        <h3 class="product__title"><?php echo get_the_title(); ?></h3>
        <div class="product__description"><?php echo the_excerpt(); ?></div>
        </div>
        <footer class="product__footer">
        <div class="product__sizes">
        <?php $is_first_item = true; ?>
            <?php
            if ($product_attributes) :
                // echo '<pre>';
                // print_r($product_attributes);
                // echo '</pre>';
            ?>
            <?php foreach($product_attributes as $attribute) : 
                $attribute_active_class = $is_first_item ? ' is-active' : '';
                ?>
            <button data-product-size-price="<?php echo $attribute['price'] ?>" class="product__size<?php echo $attribute_active_class; ?>" type="button"><?php echo $attribute['name'] ?></button>
            <?php 
                $is_first_item = false;
                endforeach; 
            ?>
            <?php endif; ?>
        </div>
        <div class="product__bottom">
            <div class="product__price">
            <span class="product__price-value"><?php echo $product_price; ?></span>
            <span class="product__currency">&#8381;</span>
            </div>
            <button class="btn product__btn" type="button" data-popup="popup-order">заказать</button>
        </div>
        </footer>
    </div>
</div>