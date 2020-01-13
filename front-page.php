<?php echo get_header(); ?>
  <!-- end header ------------------------------------------------------>

  <!-- top slider--------------------------------------------------------->
  <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		
  <div id="topSlider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <figure class="carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_img_1.jpeg" alt="スライドのイメージ" class="w-100">
        <figcaption class="carousel-caption top-slider-caption">
          母子家庭の輝く笑顔のために
        </figcaption>
      </figure>
      <figure class="carousel-item">
        <img src="https://placehold.jp/1366x512.png" alt="スライドのイメージ" class="w-100">
      </figure>
      <figure class="carousel-item">
        <img src="https://placehold.jp/1366x512.png" alt="スライドのイメージ" class="w-100">
      </figure>
      <figure class="carousel-item">
        <img src="https://placehold.jp/1366x512.png" alt="スライドのイメージ" class="w-100">
      </figure>
    </div>
    <!-- カルーセルのコントローラー -->
    <a href="#topSlider" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">前に戻る</span>
    </a>
    <a href="#topSlider" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">次へ進む</span>
    </a>
    <!-- カルーセルのインジケーター -->
    <ol class="carousel-indicators">
      <li data-target="#topSlider" data-slide-to="0" class="active"></li>
      <li data-target="#topSlider" data-slide-to="1"></li>
      <li data-target="#topSlider" data-slide-to="2"></li>
      <li data-target="#topSlider" data-slide-to="3"></li>
    </ol>
    
  </div>
  <!-- end top slider ----------------------------------------------------->
  
    <div class="container">
      <div class="row">
      
        <!-- main --------------------------------------------------------->
        <main class="main col col-lg-9">
          <div class="py-4">
            <h2 class="tenez-l h2-header text-center">What's New</h2>
            <article class="top-news py-4 d-sm-flex">
              <figure class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mother-and-baby-sunset.jpeg" alt="最新のニュースに関連する写真" class="news__img img-fluid">
              </figure>
              <div class="news__right col">
                <section class="news-box">
                  <h3 class="news-box__header">2020.01.01</h3>
                  <p class="top-box__text">
                    このタイトルはダミーです。記事のタイトルが２行ぐらいで入るようにしたいです。
                  </p>
                </section>
                <section class="news-box">
                  <h3 class="news-box__header">2020.01.01</h3>
                  <p class="top-box__text">
                    このタイトルはダミーです。記事のタイトルが２行ぐらいで入るようにしたいです。
                  </p>
                </section>
                <section class="news-box">
                  <h3 class="news-box__header">2020.01.01</h3>
                  <p class="top-box__text">
                    このタイトルはダミーです。記事のタイトルが２行ぐらいで入るようにしたいです。
                  </p>
                </section>
              </div>
            </article>
          </div>
        
          <div class="events-container container py-4">
            <h2 class="tenez-l h2-header text-center">Events</h2>
            <div class="events row">
              <article class="event d-block col-sm">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/confirm-promise.jpeg" alt="イベントのイメージ写真" class="event__img img-fluid">
                </figure>
                <section class="event__content">
                  <h3 class="event__content__header text-center">
                    イベント名１
                  </h3>
                  <p class="event__content__text">
                    ここにイベントの説明が入ります。ここにイベントの説
                    <span class="read-more">…read more</span>
                  </p>
                </section>
              </article>
              <article class="event d-block col-sm">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mom-child-hug.jpeg" alt="" class="event__img img-fluid w-100">
                </figure>
                <section class="event__content">
                  <h3 class="event__content__header text-center">
                    イベント名１
                  </h3>
                  <p class="event__content__text">
                    ここにイベントの説明が入ります。ここにイベントの説
                    <span class="read-more">…read more</span>
                  </p>
                </section>
              </article>
              <article class="event d-block col-sm">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wisteria-trellis_mom_and_child.jpeg" alt="" class="event__img img-fluid w-100">
                </figure>
                <section class="event__content">
                  <h3 class="event__content__header text-center">
                    イベント名１
                  </h3>
                  <p class="event__content__text">
                    ここにイベントの説明が入ります。ここにイベントの説
                    <span class="read-more">…read more</span>
                  </p>
                </section>
              </article>
            </div>
          </div><!-- end events-container -->

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
                <li class="sp-right-nav__list nav-item"><a href="#" class="nav-link">HOME</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="#" class="nav-link">ABOUT</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="#" class="nav-link">EVENT</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="#" class="nav-link">CONTACT</a></li>
                <li class="sp-right-nav__list nav-item pt-2"><a href="#" class="nav-link">BLOG</a></li>
                <li class="sp-right-nav__list nav-item pt-2">
                  <a href="#" class="nav-link">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
                <button type="" class="btn btn__donate mt-4">
                  DONATE
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
                  <a href="#" class="nav-link">
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
                  <a href="#" class="nav-link">
                    ご支援のお願い
                  </a>
                </li>
                <li class="right-nav__list nav-item py-3">
                  <a href="#" class="nav-link">
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

    <div class="container-fluid">
      <div class="aboutus-container row">
        <div class="aboutus-container__left col col-lg-9">
          <div class="test">
            <h2 class="h2-header text-center tenez-l">About Us</h2>
            <section class="aboutus text-center">
              <p class="aboutus__info">
                ここに貴団体の簡単な説明が入ります。なぜ立ち上げたのか、代表者の思いなど、<br>
                下の二つのボタンをクリックしたくなるような<br>
                （もっと貴団体について詳しく知りたくなるような）文章を入れられたらと思います。<br>
              </p>
              <div class="aboutus__btn-box">
                <button class="aboutus__btn-box__btn btn-common btn mr-2 mb-2">
                  What We Do <span class="btn__jp">事業一覧</span>
                </button>
                <button class="aboutus__btn-box__btn btn mb-2">
                  Blog <span class="btn__jp">代表ブログ</span>
                </button>
              </div>
            </section>          
          </div>  
        </div>
        <div class="aboutus-container__right d-none d-lg-block col-3">

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <!-- form --------------------------------------------------------->
        <div class="contactus-container col col-lg-9 py-5">
          <h2 class="h2-header text-center tenez-l">Contact Us</h2>

          <!-- フォームの説明文 -->
          <article class="contactus">
            <section class="contactus__info py-3">
              DV・モラハラ被害へのご相談、弊団体への取材・講演依頼、その他のお問い合わせは下記のフォームよりお願いいたします。フォーム送信後、２営業日以内に返信のない場合には、恐れ入りますが050-XXXX-XXXXまでお電話ください。（火・木 9:00~18:00）
            </section>
            <div id="form-tabs" class="contactus__form form-group pt-4">

              <!-- フォームの選択のチェックボックス -->
              <form action="cgi-bin/postsample.cgi" method="post">
                <div class="radio-box pl-3 pb-3">
                  <p class="form-check col">
                    <input class="form-check-input" type="radio" name="purpose" value="0" id="counseling" checked>
                    <label class="form-check-label" for="counseling">
                      <a href="#form1">相談がしたい</a>
                    </label>
                  </p>
                  <p class="form-check col">
                    <input class="form-check-input" type="radio" name="purpose" value="1" id="event">
                    <label class="form-check-label" for="event">
                      <a href="#form2">イベントに参加したい</a>
                    </label>
                  </p>
                  <p class="form-check col">
                    <input class="form-check-input" type="radio" name="purpose" value="2" id="lecture">
                    <label class="form-check-label" for="lecture">
                      <a href="#form3">取材・講演依頼</a>
                    </label>
                  </p>
                  <p class="form-check col">
                    <input class="form-check-input" type="radio" name="purpose" value="3" id="other">
                    <label class="form-check-label" for="other">
                      <a href="#form4">その他のお問い合わせ</a>
                    </label>
                  </p>
                </div>
              </form>

              <!-- 基本のフォーム -->
              <form action="cgi-bin/postsample.cgi" method="post" id="form1" class="form-panel active">
                <div class="form-general">
                  <p class="form-group form-inline w-100">
                    <label class="label-inline w-100">
                      Your Name &nbsp;<span class="label__jp">お名前</span>
                      <input type="text" name="name" class="input-area col">
                    </label>
                  </p>
                  <p class="form-group form-inline">
                    <label class="label-inline w-100">E-mail &nbsp;<span class="label__jp">メールアドレス</span><br>
                      <input type="email" name="email" class="input-area col">
                    </label>
                  </p>
                  <p class="form-group">
                    <label for="message" class="label-block">Message &nbsp;<span class="label__jp">お問い合わせ内容</span></label><br>
                    <textarea name="message" id="message" class="textarea w-100" cols="30" rows="10" placeholder="Your Message..."></textarea>
                  </p>
                </div>
                <!-- 全フォーム共通の要素 -->
                <div class="form-common text-center submit-area">
                  <input type="checkbox" name="privacy" id="privacy">
                  <label for="privacy">
                    弊団体の<a>プライバシーポリシー</a>が適用されます
                  </label>
                  <p class="form-group">
                    <button type="submit" class="btn btn__submit col-3">Submit</button>
                  </p>
                </div>
              </form>

              <!-- Form 2 -->
              <div id="form2" class="form-panel">
                ここに２つ目のフォームの内容が入ります。下記はダミー画像です。
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/form2_img.png" alt="２つ目のフォームのダミー画像です" class="img-fluid">
                <!-- 全フォーム共通の要素 -->
                <div class="form-common text-center submit-area">
                  <input type="checkbox" name="privacy" id="privacy">
                  <label for="privacy">
                    弊団体の<a>プライバシーポリシー</a>が適用されます
                  </label>
                  <p class="form-group">
                    <button type="submit" class="btn btn__submit col-3">Submit</button>
                  </p>
                </div>
              </div>

              <!-- Form 3 -->
              <div id="form3" class="form-panel">
                ここに3つ目のフォームの内容が入ります。下記はダミー画像です。
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/form3_img.png" alt="3つ目のフォームのダミー画像です" class="img-fluid">
                <!-- 全フォーム共通の要素 -->
                <div class="form-common text-center submit-area">
                  <input type="checkbox" name="privacy" id="privacy">
                  <label for="privacy">
                    弊団体の<a>プライバシーポリシー</a>が適用されます
                  </label>
                  <p class="form-group">
                    <button type="submit" class="btn btn__submit col-3">Submit</button>
                  </p>
                </div>
              </div>

              <!-- Form 4 -->
              <div id="form4" class="form-panel">
                ここに4つ目のフォームの内容が入ります。下記はダミー画像です。
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/form4_img.png" alt="3つ目のフォームのダミー画像です" class="img-fluid">   
                <!-- 全フォーム共通の要素 -->
                <div class="form-common text-center submit-area">
                  <input type="checkbox" name="privacy" id="privacy">
                  <label for="privacy">
                    弊団体の<a>プライバシーポリシー</a>が適用されます
                  </label>
                  <p class="form-group">
                    <button type="submit" class="btn btn__submit col-3">Submit</button>
                  </p>
                </div>
              </div>
            </div><!-- end contactus__form -->
          </article>
          
        </div>

        <!-- end form --------------------------------------------------------->
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
