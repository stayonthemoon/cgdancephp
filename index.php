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
        $datesList->the_post(); ?>
        <li class="classes__list-item">
          <div class="classes__list-item_date">
            <div class="classes__list-item_day">
              <?php the_title(); ?>
            </div>
            <div class="classes__list-item_block">
              <span class="classes__list-item_block-text">The Room YYC</span>
            </div>
          </div>
          <div class="classes__list-item_class">
            <p class="classes__list-item_names">With Catherine &amp; Gabriel</p>
            <div class="classes__salsa">
              <p class="classes__list-item_salsa">
                <?php the_field('salsa_class'); ?>
              </p>
              <p class="classes__list-item_salsa-time">
                <?php the_field('salsa_time'); ?>
              </p>
            </div>
            <div class="classes__bachata">
              <p class="classes__list-item_bachata">
                <?php the_field('bachata_class'); ?>
              </p>
              <p class="classes__list-item_bachata-time">
                <?php the_field('bachata_time'); ?>
              </p>
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
      <?php 
       $teacherList = new WP_Query(array(
        'post_type' => 'teachers',
        'orderby' => 'date',
        'order' => 'ASC',
       ));
        while($teacherList->have_posts()) {
          $teacherList->the_post(); ?>
        <li class="aboutus__list-item">
          <div class="aboutus__list-item_photo">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="aboutus__group">
            <h6 class="aboutus__list-item_name"><?php the_title(); ?></h6>
            <a target="_blank" href="<?php the_field('insta_link'); ?>" class="aboutus__list-item_instagram"></a>
            <div class="aboutus__list-item_descr">
            <?php the_content(); ?>
          </div>
        </li>
        <?php } ?>
      </ul>
      <?php wp_reset_query(); ?> 
    </div>
</section>


<section class="reviews" id="reviews">
  <div class="reviews__wrapper">
    <h2 class="reviews__title">Reviews</h2>
    <div class="glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <li class="glide__slide">
      <h5 class="reviews__name">Anastasia Felde</h5>
      <span class="line"></span>
      <p class="reviews__descr">Fantastic Bachata class! Friendly atmosphere, and a perfect balance of fun and learning. Highly recommended!</p>
      </li>
      <li class="glide__slide">
      <h5 class="reviews__name">Anastasia</h5>
      <span class="line"></span>
      <p class="reviews__descr">s</p>
      </li>
      <li class="glide__slide">
      <h5 class="reviews__name">Felde</h5>
      <span class="line"></span>
      <p class="reviews__descr">sasaa</p>
      </li>
    </ul>
  </div>
  <div class="glide__arrows glide__arrows_custom" data-glide-el="controls">
    <button class="glide__arrow glide__arrow_prev" data-glide-dir="<"></button>
    <button class="glide__arrow glide__arrow_next" data-glide-dir=">"></button>
  </div>
  <div class="glide__bullets" data-glide-el="controls[nav]">
    <button class="glide__bullet" data-glide-dir="=0"></button>
    <button class="glide__bullet" data-glide-dir="=1"></button>
    <button class="glide__bullet" data-glide-dir="=2"></button>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1055.6915245796895!2d-114.0511438487737!3d51.00004214982939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5371712b1213333d%3A0x529a48d44eae962f!2sThe%20Room%20YYC%20-%20a%20creative%20space!5e0!3m2!1sru!2sca!4v1708795198618!5m2!1sru!2sca" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
</section>

<?php get_footer();
?>