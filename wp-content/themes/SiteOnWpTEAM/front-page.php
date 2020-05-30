 <?php
    /*
    Template Name: front-page
    */
?>



<?php get_header(); ?>

<section class="home-one"  style="background: url(<?php echo get_field('home-one-img') ['url']?>) center center; background-size: cover;">
    <div class="container">
        <h1><?php echo get_field('home-one-h1') ?></h1>
        <span><?php echo get_field('home-one-text') ?></span>
        <a href="/" class="button-big"><?php echo get_field('home-one-button') ?></a>
    </div>
</section>

<section class="home-two">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-two-h2') ?></h2>
        <span class="h2-text"><?php echo get_field('home-two-text') ?></span>
        <div class="home-two-box">
            <?php foreach (get_field('home-two-box') as $key => $value): ?>
                <div class="home-two-item">
                    <img src="<?=$value['home-two-icon']['url']?>">
                    <div class="home-two-item-textbox">
                        <span><?=$value['home-two-title']?></span>
                        <span><?=$value['home-two-textitem']?></span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="home-three">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-three-h2') ?></h2>
        <div class="home-three-box"></div>
        <a href="/" class="button-border"><?php echo get_field('home-three-button') ?></a>
    </div>
</section>

<section class="home-four">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-four-h2') ?></h2>
        <div class="home-four-box">
            <?php foreach (get_field('home-four-box') as $key => $value): ?>
                <div class="home-four-item">
                    <img src="<?=$value['home-four-logo']['url']?>">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="home-five" style="background: url(<?php echo get_field('home-five-img')['url'] ?>) center center; background-size: cover;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-five-h2') ?></h2>
        <span class="h2-text"><?php echo get_field('home-five-text') ?></span>
        <span  class="text"><?php echo get_field('home-five-texttwo') ?></span>
        <?php echo do_shortcode( '[contact-form-7 id="11" title="Form-one"]' ); ?>
        <span class="form-text">Спам не рассылаем, номер никому не передаём. Позвоним в течение 15 минут для согласования даты и времени.</span>
    </div>
</section>

<section class="home-six">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-six-h2') ?></h2>
        <div class="home-six-box">
        </div>
        <a href="/" class="button-border"><?php echo get_field('home-six-button') ?></a>
    </div>
</section>

<section class="home-five home-seven" style="background: url(<?php echo get_field('home-seven-img')['url']?>) center center; background-size: cover;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-seven-h2') ?></h2>
        <span class="h2-text"><?php echo get_field('home-seven-text') ?></span>
        <span class="home-seventext"><?php echo get_field('home-seven-text-two') ?></span>
        <?php echo do_shortcode( '[contact-form-7 id="12" title="Form-two"]' ); ?>
        <span class="form-text">Спам не рассылаем, номер никому не передаём. Позвоним в течение 15 минут для согласования даты и времени.</span>
    </div>
</section>

<section class="home-eight">
    <div class="container">
        <div class="home-eight-img-box">
            <div class="home-eight-img"  style="background: url(<?php echo get_field('home-eight-photo') ['url']?>) center center; background-size: cover;"></div>
            <span class="h2-text"><?php echo get_field('home-eight-imya') ?></span>
            <span><?php echo get_field('home-eight-spec') ?></span>
        </div>
        <div class="home-eight-box">
            <h2 class="h2"><?php echo get_field('home-eightt-h2') ?></h2>
            <span class="h2-text"><?php echo get_field('home-eight-text') ?></span>
            <div class="home-eight-box-two">
                <?php foreach (get_field('home-eight-box') as $key => $value): ?>
                    <div class="home-eight-item">
                        <span><?=$value['home-eight-tekst']?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<section class="home-nine"  style="background: url(<?php echo get_field('home-nine-img') ['url']?>) right center no-repeat;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-nine-h2') ?></h2>
        <?php echo do_shortcode( '[contact-form-7 id="13" title="Form-three"]' ); ?>
        <span class="form-text">Спам не рассылаем, номер никому не передаём. Позвоним в течение 15 минут для согласования даты и времени.</span>
    </div>
</section>

<section class="home-five home-ten" style="background: url(<?php echo get_field('home-ten-img') ['url']?>) center center; background-size: cover;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-ten-h2') ?></h2>
        <div class="home-ten-box">
            <?php foreach (get_field('home-ten-box') as $key => $value): ?>
                <div class="home-ten-item">
                    <img src="<?=$value['home-ten-ikon']['url']?>">
                    <span><?=$value['home-ten-tekst']?></span>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="home-eleven" style="background: url(<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/007_img.png) right center no-repeat;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-eleven-h2') ?></h2>
        <div class="home-eleven-box">
            <span><?php echo get_field('home-eleven-tekst') ?></span>
            <?php echo do_shortcode( '[contact-form-7 id="14" title="Form-four"]' ); ?>
        </div>
    </div>
</section>

<section class="home-twelve" style="background: url(<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/009_img_.jpg) left center no-repeat;">
    <div class="container">
        <div class="container-pd">
            <h2 class="h2"><?php echo get_field('home-twelve-h2') ?></h2>
            <span class="h2-text"><?php echo get_field('home-twelve-text') ?></span>
            <div class="home-twelve-box">
                <?php foreach (get_field('home-twelve-box') as $key => $value): ?>
                    <div class="home-twelve-item">
                        <img src="<?=$value['home-twelve-ikonka']['url']?>">
                        <span><?=$value['home-twelve-tekst']?></span>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="form-container">
                <h2 class="h2"><?php echo get_field('home-twelve-title') ?></h2>
                <?php echo do_shortcode( '[contact-form-7 id="15" title="Form-five"]' ); ?>
                <span class="form-text">Спам не рассылаем, номер никому не передаём. Позвоним в течение 15 минут для согласования даты и времени.</span>
            </div>
        </div>
    </div>
</section>

<section class="home-thirteen"  style="background: url(<?php echo get_field('home-thirt-img') ['url']?>) center center no-repeat;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-thirt-h2') ?></h2>
        <span class="h2-text"><?php echo get_field('home-thirt-tekst') ?></span>
    </div>
</section>

<section class="home-fourteen">
    <div class="container">
        <span class="h2-text"><?php echo get_field('home-fourt-tekst') ?></span>
        <div class="home-fourteen-box">
            <?php foreach (get_field('home-fourt-blok') as $key => $value): ?>
                <div class="home-fourteen-item">
                    <img src="<?=$value['home-fourt-ikonki']['url']?>">
                    <div class="home-two-item-textbox">
                        <span><?=$value['home-fourt-title']?></span>
                        <span><?=$value['home-fourt-tekst']?></span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="home-fifteen">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-fivet-h2') ?></h2>
            <div class="slider-container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach (get_field('home-fivet-blok') as $key => $value): ?>
                            <div class="swiper-slide" style="background: url(<?=$value['home-fivet-blok-shp']['url']?>) center center; background-size: cover;"></div>
                        <?php endforeach ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <!-- Add Pagination -->
                </div>
                <div class="swiper-button-next"></div>
            </div>
    </div>
</section>

<section class="home-eighteen">
    <div class="container">
        <div class="h2-cont">
            <h2 class="h2"><?php echo get_field('home-sixt-h2') ?></h2>
        </div>
        <span class="h2-text"><?php echo get_field('home-sixt-tekst') ?></span>
        <div class="home-eighteen-box">
            <div class="home-eighteen-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/uYEqA0gphro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><span>ООО «Татнефть»</span></div>
            <div class="home-eighteen-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/uYEqA0gphro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><span>ООО «Татнефть»</span></div>
            <div class="home-eighteen-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/uYEqA0gphro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><span>ООО «Татнефть»</span></div>
        </div>
        <div class="home-sixteen-a-box">
            <a href="/" class="home-sixteen-a">Все отзывы</a>
        </div>
    </div>
</section>

<section class="home-nineteen" style="background: url(<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/010_img_.png) left center no-repeat;">
    <div class="container">
        <div class="home-nineteen-cont-bg">
            <h2 class="h2"><?php echo get_field('home-sevent-h2') ?></h2>
            <span><?php echo get_field('home-sevent-tekst') ?></span>
            <?php echo do_shortcode( '[contact-form-7 id="16" title="Form-six"]' ); ?>
        </div>
    </div>
</section>

<section class="home-twenty">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-eight-h2') ?></h2>
        <div class="home-twenty-box">
            <?php foreach (get_field('home-eight-blok') as $key => $value): ?>
                <div class="home-twenty-box-item">
                    <span><?=$value['home-eight-tajtl']?></span>
                    <img src="<?=$value['home-eight-sert']['url']?>">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="home-thirteen"  style="background: url(<?php echo get_field('home-ninet-img') ['url']?>) center center no-repeat;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-ninet-h2') ?></h2>
        <span class="h2-text"><?php echo get_field('home-ninet-text') ?></span>
    </div>
</section>

<section class="home-nine home-twentyone"  style="background: url(<?php echo get_field('home-twent-img') ['url']?>) right center no-repeat;">
    <div class="container">
        <h2 class="h2"><?php echo get_field('home-twent-h2') ?></h2>
        <?php echo do_shortcode( '[contact-form-7 id="13" title="Form-three"]' ); ?>
        <span class="form-text">Спам не рассылаем, номер никому не передаём. Позвоним в течение 15 минут для согласования даты и времени.</span>
    </div>
</section>

<section class="twentyone">
    <div class="container">
        <h2 class="h2">Офисы нашей компании расположены в 9 городах России</h2>
        <ul class="tabs__caption">
            <li class="active">Челябинск</li>
            <li>Екатеринбург</li>
            <li>Пермь</li>
            <li>Нижневартовск</li>
            <li>Тюмень</li>
            <li>Сыктывкар</li>
            <li>Ноябрьск</li>
            <li>Киров</li>
            <li>Ижевск</li>
        </ul>
    </div>
    <div class="tabs__content active">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container calendar-cont">
            <div class="caleddar-box">
                <div class="address">г. Челябинск <br>ул. Троицкий тракт, д. 11А</div>
                <div class="type"><img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/022_icon.svg">Металлобаза</div>
                <span>+7 (800) 775-07-60</span>
                <span>+7 (351) 267-50-77</span>
                <span>+7 (351) 216-03-21</span>
                <span>Сегодня 8:00 – 18:00</span>
                <div class="calendar">
                    <div class="calendar-item">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                    <div class="calendar-item">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                    <div class="calendar-item">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                    <div class="calendar-item">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                    <div class="calendar-item">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                    <div class="calendar-item curentday">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                    <div class="calendar-item">
                        <span class="day">Пн</span>
                        <div class="calendar-row">
                            <span>08:00</span>
                            <span>18:00</span>
                        </div>
                        <div class="calendar-row">
                            <span>13:00</span>
                            <span>14:00</span>
                        </div>
                    </div>
                </div>
                <span class="info">Офис работает в субботу, продлен рабочий день</span>
            </div>
        </div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">2rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">3rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">4rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">5rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">6rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">7rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">8rjynfrns</div>
    </div>
    <div class="tabs__content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.316837190326!2d61.37728259692711!3d55.09021596095775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58dacd57bdfad%3A0x29f1311b61e8312d!2z0KLRgNC-0LjRhtC60LjQuSDRgtGA0LDQutGCLCAxMdCwLCDQp9C10LvRj9Cx0LjQvdGB0LosINCn0LXQu9GP0LHQuNC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA0NTQwNTM!5e0!3m2!1sru!2skz!4v1586930171317!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container">9rjynfrns</div>
    </div>
</section>





<?php get_footer(); ?>