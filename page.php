<?php echo get_header(); ?>
<!-- end header ------------------------------------------------------>
<!-- keyvisual--------------------------------------------------------->
  <?php get_template_part('template-parts/top-butterfly'); ?>
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
          </article>
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
