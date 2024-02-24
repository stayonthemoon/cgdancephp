<?php 
get_header(); 
?>

<section class="classes" id="classes">
    <div class="classes__wrapper">
      <div class="classes__header">
        <h2 class="classes__title">
          Salsa & bachata classes 2024
        </h2>
        <h3 class="classes__subtitle classes__subtitle_weeks">
          Intermediate 4-weeks series
        </h3>
        <h3 class="classes__subtitle classes__subtitle_days">
        <?php the_content()?>
        </h3>
      </div>
      <h4 class="classes__list-title">
      <?php the_title()?>
      </h4>
      <ul class="classes__list">
        <?php 
       $datesList = new WP_Query(array(
        'post_type' => 'dates',
        'orderby' => 'date',
        'order' => 'ASC',
       ));
            while($datesList->have_posts()) {
                $datesList->the_post();        ?>
        <li class="classes__list-item">
          <div class="classes__list-item_date">
            <p class="classes__list-item_day"><?php get_the_title(); ?></>
            <div class="classes__list-item_block">
              <span class="classes__list-item_block-text">The Room YYC</span>
            </div>
          </div>
          <div class="classes__list-item_class">
            <p class="classes__list-item_names">With Catherine &amp; Gabriel</p>
            <div class="classes__salsa">
              <p class="classes__list-item_salsa">salsa on1 int.</p>
              <p class="classes__list-item_salsa-time">7-8PM</p>
            </div>
            <div class="classes__bachata">
              <p class="classes__list-item_bachata">bachata int.</p>
              <p class="classes__list-item_bachata-time">8-9PM</p>
            </div>
          </div>
        </li>
<?php } ?>
      </ul>
      <?php wp_reset_query(); ?> 
      <div class="classes__location">
        <div class="classes__location-wrapper">
          <h4 class="classes__location-title">location:</h4>
          <div class="classes__list-item_block">
            <span class="classes__list-item_block-text">The Room YYC</span>
          </div>
        </div>
        <p class="classes__location-address">5918 5 St sE bay 3, calgary, ab t2h 1l4</p>
      </div>
    </div>
  </section>
  <section class="plans" id="plans">
    <div class="plans__wrapper">
      <h2 class="plans__title">
        4-weeks series pricing
      </h2>
      <ul class="plans__list">
        <li class="plans__list-item">
          <div class="plans__list-item_colour single">
            <ul class="plans__prices">
              <li class="plans__prices-item_title">Single</li>
              <li class="plans__prices-wrapper">
                <span class="plans__dollar">&#36</span>
                <h5 class="plans__price">88</h5>
              </li>
              <li class="plans__price-each">
                &#36 22.00 each class
              </li>
              <li class="plans__length">
                1 hour class
              </li>
            </ul>
          </div>
          <div class="plans__list-item_white">
            <ul class="plans__conditions">
              <li class="plans__conditions-item">1 class per week</li>
              <li class="plans__conditions-item">4 weeks cycle</li>
              <li class="plans__conditions-item">Total of 4 hours</li>
            </ul>
          </div>
        </li>
        <li class="plans__list-item">
          <div class="plans__list-item_colour couple">
            <ul class="plans__prices">
              <li class="plans__prices-item_title">Couple</li>
              <li class="plans__prices-wrapper">
                <span class="plans__dollar">&#36</span>
                <h5 class="plans__price">160</h5>
              </li>
              <li class="plans__price-each">
                &#36 20.00 per person
              </li>
              <li class="plans__length">
                1 hour class
              </li>
            </ul>
          </div>
          <div class="plans__list-item_white">
            <ul class="plans__conditions">
              <li class="plans__conditions-item">1 class per week</li>
              <li class="plans__conditions-item">4 weeks cycle</li>
              <li class="plans__conditions-item">Total of 4 hours</li>
            </ul>
          </div>
        </li>
        <li class="plans__list-item">
          <div class="plans__list-item_colour single-combo">
            <ul class="plans__prices">
              <li class="plans__prices-item_title">Single combo</li>
              <li class="plans__prices-wrapper">
                <span class="plans__dollar">&#36</span>
                <h5 class="plans__price">140</h5>
              </li>
              <li class="plans__price-each">
                &#36 17.50 each class
              </li>
              <li class="plans__length">
                1 hour class
              </li>
            </ul>
          </div>
          <div class="plans__list-item_white">
            <ul class="plans__conditions">
              <li class="plans__conditions-item">2 classes per week</li>
              <li class="plans__conditions-item">4 weeks cycle</li>
              <li class="plans__conditions-item">Total of 8 hours</li>
            </ul>
          </div>
        </li>
        <li class="plans__list-item">
          <div class="plans__list-item_colour couple-combo">
            <ul class="plans__prices">
              <li class="plans__prices-item_title">Couple combo</li>
              <li class="plans__prices-wrapper">
                <span class="plans__dollar">&#36</span>
                <h5 class="plans__price">240</h5>
              </li>
              <li class="plans__price-each">
                &#36 15.00 per person
              </li>
              <li class="plans__length">
                1 hour class
              </li>
            </ul>
          </div>
          <div class="plans__list-item_white">
            <ul class="plans__conditions">
              <li class="plans__conditions-item">2 classes per week</li>
              <li class="plans__conditions-item">4 weeks cycle</li>
              <li class="plans__conditions-item">Total of 8 hours</li>
            </ul>
          </div>
        </li>
      </ul>
      <div class="plans__drop-in">
        <div class="plans__drop-in_colour">
          <ul class="plans__prices plans__prices_drop">
            <li class="plans__prices-item_title">Drop-in</li>
            <li class="plans__prices-wrapper">
              <span class="plans__dollar">&#36</span>
              <h5 class="plans__price">24</h5>
            </li>
            <li class="plans__price-each">
              per class
            </li>
            <li class="plans__length">
              1 hour class
            </li>
          </ul>
        </div>
        <div class="plans__drop-in_white">
          <p class="plans__drop-in_white-descr">A drop-in fee for a dance class is a one-time payment option, allowing
            you to attend a single class without committing to a full course.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="aboutus" id="aboutus">
    <div class="aboutus__wrapper">
      <h2 class="aboutus__title">About us</h2>
      <ul class="aboutus__list">
        <li class="aboutus__list-item">

          <img src="<?php echo get_theme_file_uri('/images/aboutus__photo_cat.png') ?>" alt="photo" class="aboutus__list-item_photo">
          <div class="aboutus__group">
            <h6 class="aboutus__list-item_name">Catherine S. Cereceda</h6>
            <a target="_blank" href="https://www.instagram.com/cat.cereceda/" class="aboutus__list-item_instagram"></a>
            <p class="aboutus__list-item_descr">Lorem ipsum dolor sit amet consectetur. Dui mauris id mus magna. Leo
              mattis faucibus viverra sed nec. Convallis viverra magna libero interdum. At molestie eget eget id vitae
              pulvinar. Lorem ipsum dolor sit amet consectetur. Dui mauris id mus magna. Leo mattis faucibus viverra sed
              nec. Convallis viverra magna libero interdum. At molestie eget eget id vitae pulvinar.</p>
          </div>
        </li>
        <li class="aboutus__list-item">
          <img src="<?php echo get_theme_file_uri('/images/aboutus__photo_gabe.png') ?>" alt="photo" class="aboutus__list-item_photo">
          <div class="aboutus__group">
            <h6 class="aboutus__list-item_name">Gabriel Andres</h6>
            <a target="_blank" href="https://www.instagram.com/gabriel_andres94/" class="aboutus__list-item_instagram"></a>
            <p class="aboutus__list-item_descr">Lorem ipsum dolor sit amet consectetur. Dui mauris id mus magna. Leo
              mattis faucibus viverra sed nec. Convallis viverra magna libero interdum. At molestie eget eget id vitae
              pulvinar. Lorem ipsum dolor sit amet consectetur. Dui mauris id mus magna. Leo mattis faucibus viverra sed
              nec. Convallis viverra magna libero interdum. At molestie eget eget id vitae pulvinar.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="reviews" id="reviews">
    <div class="reviews__wrapper">
      <h2 class="reviews__title">Reviews</h2>
      <h5 class="reviews__name">Anastasia Felde</h5>
      <div class="slider">
        <div class="slider__content">
          <button class="slider__content_arrow-left"></button>
          <p class="slider__content_descr">Fantastic Bachata class! Friendly atmosphere, and a perfect balance of fun
            and learning. Highly recommended!</p>
          <button class="slider__content_arrow-right"></button>
        </div>
        <div class="slider__buttons">
          <button class="slider_dot slider_dot-active"></button>
          <button class="slider_dot"></button>
          <button class="slider_dot"></button>
        </div>
      </div>
    </div>
  </section>
  <section class="studio" id="studio">
    <div class="studio__wrapper">
      <h2 class="studio__title">The studio</h2>
      <h3 class="studio__name">the room yyc</h3>
      <p class="studio__address">5918 5 St sE bay 3, calgary, ab t2h 1l4</p>
      <div class="studio__map">
      </div>
    </div>
  </section>

<?php get_footer();
?>