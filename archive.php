<?php echo get_header(); ?>

  <!-- end header ------------------------------------------------------>

  <!-- top slider--------------------------------------------------------->
  <div class="keyvis row no-gutters text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activities_kvs.png" class="keyvis__img img-fluid w-100" alt="事業のイメージ画像">
    <h2 class="keyvis__caption w-100">What We Do <span class="jp">事業一覧</span></h2>
  </div>
  <!-- end top slider ----------------------------------------------------->
  <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
    the_post(); ?>
      
    <div class="container">
      <div class="row">
      
        <!-- main --------------------------------------------------------->
        <main class="main col col-lg-9">
          <article class="py-4">
            <h2 class="tenez-l h2-header text-center">What We Do</h2>
            <section class="lead-msg py-4">
              <p class="text-center">母子家庭のために、地域のために<br>私たちがしている事を紹介しますのような<br>リード文が２〜３行入ると良いです</p>
            </section>

            <nav class="d-sm-none d-flex justify-content-center">
              <ul class="index py-3">
                <li class="index__item">
                  <a href="#" class="index__item__link">
                    母子家庭の支援事業
                  </a>
                </li>
                <li class="index__item">
                  <a href="#" class="index__item__link">
                    DV・虐待・モラハラ被害者支援
                  </a>
                </li>
                <li class="index__item">
                  <a href="#" class="index__item__link">
                    代表的な事業を４つ入れます
                  </a>
                </li>
                <li class="index__item">
                  <a href="#" class="index__item__link">
                    目立たせたくないものは入れない
                  </a>
                </li>
              </ul>
            </nav>

            <div class="activities-container card-columns mt-4 mt-sm-0">
              <section class="activity-card card">
                <figure class="activity-card__img">
                  <img src="./assets/img/activities_01.png" alt="海辺の親子のイメージ" class="card-img-top">
                  <span class="card-read-more">
                    <span class="card-read-more__msg">
                      <a href="activity.html" class="">
                        Read More
                      </a>
                    </span>
                  </span>
                </figure>
                <div class="card-body">
                  <h3 class="card-title activity-card__title">主要な事業１</h3>
                  <p class="category">
                    Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
                  </p>
                  <p class="card-text activity__text">
                    ここに事業の説明が入ります。ここに事業の説明が入ります&nbsp;
                    <span class="read-more">
                      <a href="activity.html" class="">
                        ...read more
                      </a>
                    </span>
                  </p>
                </div>
              </section>

              <section class="activity-card card">
                <figure class="activity-card__img">
                  <img src="./assets/img/activities_02.png" alt="海辺の親子のイメージ" class="card-img-top">
                  <span class="card-read-more">
                    <span class="card-read-more__msg">
                      <a href="activity.html" class="">
                        Read More
                      </a>
                    </span>
                  </span>
                </figure>
                <div class="card-body">
                  <h3 class="card-title activity-card__title">主要な事業２</h3>
                  <p class="category">
                    Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
                  </p>
                  <p class="card-text activity__text">
                    ここに事業の説明が入ります。ここに事業の説明が入ります&nbsp;
                    <span class="read-more">
                      <a href="activity.html" class="">
                        ...read more
                      </a>
                    </span>
                  </p>
                </div>
              </section>

              <section class="activity-card card">
                <figure class="activity-card__img">
                  <img src="./assets/img/activities_03.png" alt="海辺の親子のイメージ" class="card-img-top">
                  <span class="card-read-more">
                    <span class="card-read-more__msg">
                      <a href="activity.html" class="">
                        Read More
                      </a>
                    </span>
                  </span>
                </figure>
                <div class="card-body">
                  <h3 class="card-title activity-card__title">主要な事業３</h3>
                  <p class="category">
                    Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
                  </p>
                  <p class="card-text activity__text">
                    ここに事業の説明が入ります。ここに事業の説明が入ります&nbsp;
                    <span class="read-more">
                      <a href="activity.html" class="">
                        ...read more
                      </a>
                    </span>
                  </p>
                </div>
              </section>

              <section class="activity-card card">
                <figure class="activity-card__img">
                  <img src="./assets/img/activities_04.png" alt="海辺の親子のイメージ" class="card-img-top">
                  <span class="card-read-more">
                    <span class="card-read-more__msg">
                      <a href="activity.html" class="">
                        Read More
                      </a>
                    </span>
                  </span>
                </figure>
                <div class="card-body">
                  <h3 class="card-title activity-card__title">主要な事業４</h3>
                  <p class="category">
                    Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
                  </p>
                  <p class="card-text activity__text">
                    ここに事業の説明が入ります。ここに事業の説明が入ります&nbsp;
                    <span class="read-more">
                      <a href="activity.html" class="">
                        ...read more
                      </a>
                    </span>
                  </p>
                </div>
              </section>

              <section class="activitiy-card card d-none d-sm-block">
                <figure class="activity-card__img">
                  <img src="./assets/img/activities_05.png" alt="海辺の親子のイメージ" class="card-img-top">
                  <span class="card-read-more">
                    <span class="card-read-more__msg">
                      <a href="activity.html" class="">
                        Read More
                      </a>
                    </span>
                  </span>
                </figure>
                <div class="card-body">
                  <h3 class="card-title activity-card__title">サブ事業１</h3>
                  <p class="category">
                    Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
                  </p>
                  <p class="card-text activity__text">
                    ここに事業の説明が入ります。ここに事業の説明が入ります&nbsp;
                    <span class="read-more">
                      <a href="activity.html" class="">
                        ...read more
                      </a>
                    </span>
                  </p>
                </div>
              </section>

              <section class="activitiy card d-none d-sm-block">
                <figure class="activity-card__img">
                  <img src="./assets/img/activities_06.png" alt="海辺の親子のイメージ" class="card-img-top">
                  <span class="card-read-more">
                    <span class="card-read-more__msg">
                      <a href="activity.html" class="">
                        Read More
                      </a>
                    </span>
                  </span>
                </figure>
                <div class="card-body">
                  <h3 class="card-title activity-card__title">サブ事業</h3>
                  <p class="category">
                    Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
                  </p>
                  <p class="card-text activity__text">
                    ここに事業の説明が入ります。ここに事業の説明が入ります&nbsp;
                    <span class="read-more">
                      <a href="activity.html" class="">
                        ...read more
                      </a>
                    </span>
                  </p>
                </div>
              </section>
            </div>
          </article>

          <nav aria-label="Page navigation col-sm-6">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="pagination__previous page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                </a>
              </li>
              <li class="page-item mx-1 active">
                <a class="pagination__link page-link" href="#">1</a>
              </li>
              <li class="page-item mx-1">
                <a class="pagination__link page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link pagination__next" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </main>
        <!-- end main --------------------------------------------------------->

        <!-- aside --------------------------------------------------------->
        <aside class="aside col-0 col-lg-3 pt-4 text-center">
          <div class="sp-right-nav px-4 pt-1">
            <div id="nav-close-btn" class="nav-close-btn mt-4 mr-2">
              <span class="nav-close-btn__bar"></span>
              <span class="nav-close-btn__bar"></span>
            </div>
            <div class="nav-list-box">
            <nav class="d-lg-none pt-4">
              <ul class="nav flex-column">
                <li class="sp-right-nav__list nav-item"><a href="index.html" class="nav-link">HOME</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="activities.html" class="nav-link">ABOUT</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="#" class="nav-link">EVENT</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="contact.html" class="nav-link">CONTACT</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="#" class="nav-link">BLOG</a></li>
                <li class="sp-right-nav__list nav-item pt-2">
                  <a href="#" class="nav-link">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
                <button type="" class="btn btn__donate mt-4">
                  <a href="https://syncable.biz/associate/decentlifejapan/">
                    DONATE
                  </a>
                </button>
              </ul>
            </nav>
          </div>
          </div>
          
          <div class="w-100 d-none d-lg-block">
            <h2 class="h2-header tenez-l">Information</h2>
            <nav class="right-nav-container">
              <ul class="right-nav nav flex-column">
                <li class="right-nav__list nav-item py-3">
                  <a href="activities.html" class="nav-link">
                    事業一覧
                  </a>
                </li>
                <li class="right-nav__list nav-item py-3">
                  <a href="#" class="nav-link">
                    イベント
                  </a>
                </li>
                <li class="right-nav__list nav-item py-3">
                  <a href="#" class="nav-link">
                    私たちについて
                  </a>
                </li>
                <li class="right-nav__list nav-item py-3">
                  <a href="#" class="nav-link">
                    代表ブログ
                  </a>
                </li>
                <li class="right-nav__list nav-item py-3">
                  <a href="https://syncable.biz/associate/decentlifejapan/" target="_new" class="nav-link">
                    ご支援のお願い
                  </a>
                </li>
                <li class="right-nav__list nav-item py-3">
                  <a href="contact.html" class="nav-link">
                    お問い合わせ
                  </a>
                </li>
                <li class="right-nav__list nav-item py-1">
                  <a href="#" class="nav-link">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
        <!-- end aside --------------------------------------------------------->
      </div>
    </div>

    <?php
      } // end while
    } // end if
    ?>
  <!-- footer --------------------------------------------------------->
<?php get_footer(); ?>
<!-- end footer --------------------------------------------------------->
<?php wp_footer(); ?>
</body>
</html>
