<?php /**
 * 全てのページに共通の<head></head>タグの中身
 * および<header></header>タグの中身
 * 
 * @link #
 *
 * @package WordPress
 * @subpackage yisc
 * @since 1.0.0
 */ ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>架空の女性支援団体のホームページ</title>
</head>

<!-- body----------------------------------------------------------------->
<body>
<!-- header------------------------------------------------------------>
<header class="header py-lg-4">
  <div class="container">
    <div class="navbar justify-content-end">
      <h1 class="header-logo px-4 pt-5 pt-md-3">
        <figure class="header-logo__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sample.png" alt="団体ロゴマーク" class="header-logo__img img-fluid">
        </figure>
      </h1>
      <nav class="sp-header-nav d-lg-none w-100">
        <ul class="nav float-right">
          <li class="sp-header-nav__item">
            <a href="#">
              <i class="far fa-envelope"></i>
            </a>
          </li>
          <li id="right-nav-btn" class="sp-header-nav__item">
            <a class="menu-trigger" href="#">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="header-nav col-9 row justify-content-between">
        <nav class="header-nav__left d-none d-lg-block">
          <ul class="nav">
            <li class="header-nav__left--list nav-item"><a href="index.html" class="nav-link">HOME</a></li>
            <li class="header-nav__left--list nav-item"><a href="activities.html" class="nav-link">ABOUT</a></li>
            <li class="header-nav__left--list nav-item"><a href="#" class="nav-link">EVENT</a></li>
            <li class="header-nav__left--list nav-item"><a href="contact.html" class="nav-link">CONTACT</a></li>
            <li class="header-nav__left--list nav-item"><a href="#" class="nav-link">BLOG</a></li>
          </ul>
        </nav>
        <nav class="header-nav__right d-none d-lg-block">
          <ul class="nav">
            <li class="header-nav__right--list nav-item"><a href="https://syncable.biz/associate/decentlifejapan/" target="_new" class="nav-link">DONATE</a></li>
            <li class="header-nav__right--list nav-item"><a href="contact.html" class="nav-link">CONTACT</a></li>
          </ul>
        </nav>
      </div>        
    </div>
  </div>
<?php wp_head(); ?>
</header>
