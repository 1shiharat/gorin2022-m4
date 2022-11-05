<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>東京グルメ</title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>
    <header class="l-header">
        <h1 class="l-header__head">
            <a href=""><img src="<?php echo esc_url(get_theme_file_uri('image/ロゴ/logo-black.svg')) ?>" alt="logo"></a>
        </h1>
        <div class="l-header__menu">
            <a href="">ホーム</a>
            <a href="">人気レストラン</a>
            <a href="">新着レストラン</a>
            <a href="">レストラン一覧</a>
        </div>
    </header>
