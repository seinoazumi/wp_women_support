<?php echo get_header(); ?>
  <!-- end header ------------------------------------------------------>

  <!-- keyvisual--------------------------------------------------------->
  <div class="keyvis row no-gutters text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity_kvs_test.png" class="keyvis__img img-fluid" alt="事業のイメージ画像">
    <h2 class="keyvis__caption w-100">Activity<span class="jp">事業紹介</span></h2>
  </div>
  <!-- end keyvisual ----------------------------------------------------->
  <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
  
    <div class="container">
      <div class="row">
      
        <!-- main --------------------------------------------------------->
        <main class="main col col-lg-9">
          <article class="activity py-4">
            <h2 class="activity__title h2-header">
              主要な事業１
            </h2>
            <p class="category mt-4">
              Category:&nbsp;<span class="jp">親子向け, 子ども向け, 地域向け</span>
            </p>
            <figure class="activity__img">
              <img src="./assets/img/activities_01.png" alt="海辺の親子のイメージ" class="card-img-top">
            </figure>

            <section class="activity__intro mt-4">
              <p class="card-text activity__intro__text mt-2">
                この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入
              </p>

              <h3 class="activity__intro__title">
                見出し２はこの大きさにします
              </h3>

              <p class="card-text activity__intro__text mt-2">
                この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入
              </p>

              <blockquote class="activity__intro__quote p-4">
                <p class="ml-2 mt-2">
                この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入
                </p>
              </blockquote>

              <h4 class="actibity__intro__title-s">
                見出し3はこの大きさにします
              </h4>

              <p class="card-text activity__intro__text mt-2">
                この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入
              </p>              
            </section>
          </article>

          <nav aria-label="Page navigation col-sm-6">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="pagination__previous page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                </a>
              </li>
              <li class="pagenation__all page-item mx-1">
                <a class="pagination__link page-link" href="#">事業一覧へ</a>
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
