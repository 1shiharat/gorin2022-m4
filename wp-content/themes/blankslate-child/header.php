<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <title>Making show</title>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>

  <header class="l-header">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="l-header__logo navbar-brand" href="<?php echo home_url('') ?>"><img src="<?php echo esc_url(get_theme_file_uri('/m4-image/logo.svg')) ?>" alt=""></a>

        <button class="l-header__btn navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo home_url('') ?>">ホーム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo home_url('/event') ?>">お知らせ一覧</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo home_url('/booth') ?>">企業ブース一覧</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo home_url('/info') ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
        <a href="<?php echo home_url('/ticket') ?>" class="l-header__tiket btn btn-outline-primary">チケット購入はこちら</a>

      </div>
    </nav>
  </header>