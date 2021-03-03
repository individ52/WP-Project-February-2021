
<!-- footer-page -->
<footer class="footer-page">
  <div class="container">
    <div class="footer-page__text"><?php echo carbon_get_theme_option( 'site_footer_text' );  ?></div>
  </div>
</footer>
<!-- /.footer-page -->


<!-- popup-menu -->
<div class="popup popup-menu">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content popup__content--fluid popup__content--centered">
        <button class="btn-close popup__btn-close popup-close"></button>
        <nav class="mobile-menu popup__mobile-menu">
            <?php 
              wp_nav_menu( [
                'theme_location'  => 'menu_main_header',
                'container'       => null, 
                'menu_class'      => 'mobile-menu__ul'
              ] );
            ?>  
        </nav>
        <div class="phone popup__phone">
          <a class="phone__item phone__item--accent" href="tel:<?php echo $GLOBALS['pizza_time']['phone_digits'] ?>"><?php echo $GLOBALS['pizza_time']['phone'] ?></a>
        </div>
        <ul class="socials">
            <?php if($GLOBALS['pizza_time']['vk_url']) : ?>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['pizza_time']['vk_url']; ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--vk" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo" d="M54,80.7h4.4a3.33,3.33,0,0,0,2-.9,3.37,3.37,0,0,0,.6-1.9s-.1-5.9,2.7-6.8,6.2,5.7,9.9,8.2c2.8,1.9,4.9,1.5,4.9,1.5l9.8-.1s5.1-.3,2.7-4.4c-.2-.3-1.4-3-7.3-8.5-6.2-5.7-5.3-4.8,2.1-14.7,4.5-6,6.3-9.7,5.8-11.3s-3.9-1.1-3.9-1.1l-11.1.1a2.32,2.32,0,0,0-1.4.3,3.58,3.58,0,0,0-1,1.2A60,60,0,0,1,70,50.9c-4.9,8.4-6.9,8.8-7.7,8.3-1.9-1.2-1.4-4.9-1.4-7.5,0-8.1,1.2-11.5-2.4-12.4a17.68,17.68,0,0,0-5.2-.5c-4,0-7.3,0-9.2.9-1.3.6-2.2,2-1.6,2.1a5.05,5.05,0,0,1,3.3,1.6c1.1,1.5,1.1,5,1.1,5s.7,9.6-1.5,10.7c-1.5.8-3.5-.8-7.9-8.4a67.05,67.05,0,0,1-4-8.2,2.82,2.82,0,0,0-.9-1.2,5.13,5.13,0,0,0-1.7-.7l-10.5.1s-1.6,0-2.2.7,0,1.9,0,1.9,8.2,19.3,17.6,29c8.5,9,18.2,8.4,18.2,8.4Z" />
                  </g>
                </svg>
              </a>
            </li>
            <?php endif; if($GLOBALS['pizza_time']['fb_url']) : ?>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['pizza_time']['fb_url']; ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo" d="M70.2,58.3h-10V95H45V58.3H37.8V45.4H45V37.1c0-6,2.8-15.3,15.3-15.3H71.5V34.3H63.3c-1.3,0-3.2.7-3.2,3.5v7.6H71.4Z" />
                  </g>
                </svg>
              </a>
            </li>
            <?php endif; if($GLOBALS['pizza_time']['insta_url']) : ?>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['pizza_time']['insta_url']; ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--inst" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35" height="35">
                  <g>
                    <path d="M332.3,136.2H179.7a44.21,44.21,0,0,0-44.2,44.2V333a44.21,44.21,0,0,0,44.2,44.2H332.3A44.21,44.21,0,0,0,376.5,333V180.4A44.21,44.21,0,0,0,332.3,136.2ZM256,336a79.3,79.3,0,1,1,79.3-79.3A79.42,79.42,0,0,1,256,336Zm81.9-142.2A18.8,18.8,0,1,1,356.7,175,18.78,18.78,0,0,1,337.9,193.8Z" />
                    <path d="M256,210.9a45.8,45.8,0,1,0,45.8,45.8A45.86,45.86,0,0,0,256,210.9Z" />
                    <path d="M256,0C114.6,0,0,114.6,0,256S114.6,512,256,512,512,397.4,512,256,397.4,0,256,0ZM410,333a77.78,77.78,0,0,1-77.7,77.7H179.7A77.78,77.78,0,0,1,102,333V180.4a77.84,77.84,0,0,1,77.7-77.7H332.3A77.84,77.84,0,0,1,410,180.4Z" />
                  </g>
                </svg>
              </a>
            </li>
            <?php endif; ?>
          </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-menu -->

<!-- popup-order -->
<div class="popup popup-order">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title popup__title">Заполните форму</h2>
        <p class="popup__subtitle popup__subtitle--order">Мы уже начали готовить ваш заказ</p>
        <div class="order">
          <img class="order__img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
          <h3 class="order__title">
            <span class="order-product-title"></span>
            <span class="order-product-price"></span> &#8381;
          </h3>
          <p class="order__size"></p>
          <form class="form form-send">
            <input class="order-info-title" type="hidden" name="пицца">
            <input class="order-info-price" type="hidden" name="цена">
            <input class="order-info-size" type="hidden" name="размер">
            <input class="form__input" type="text" name="имя" placeholder="Имя" required>
            <input class="form__input" type="text" name="телефон" placeholder="Телефон" required>
            <input class="form__input" type="text" name="адрес" placeholder="Адрес" required>
            <select class="form__input" name="оплата">
              <option value="Оплата наличными">Оплата наличными</option>
              <option value="Оплата картой">Оплата картой</option>
            </select>
            <button class="btn form__btn" type="submit">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-order -->

<!-- popup-thanks -->
<div class="popup popup-thanks">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title popup__title">Успешно отправлено</h2>
        <p class="popup__subtitle">Мы уже начали готовить вашу пиццу</p>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-thanks -->

<!-- popup-error -->
<div class="popup popup-error">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title popup__title">Произошла ошибка</h2>
        <p class="popup__subtitle">Пожалуйста, сделайте заказ по номеру <a class="popup__link" href="+79999999999"><?php echo $GLOBALS['pizza_time']['phone'] ?></a></p>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-error -->


  <?php wp_footer(); ?>
</body>
</html>