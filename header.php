<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Film">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title>Film</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <div class="container">

        <header id="ust">
            <nav>
                <ul>
                    <li id="logo"><a href="#">FİLMİZLE</a></li>
                    <li class="aktif"><a href="#">Anasayfa</a></li>
                    <li><a href="#">Kategoriler</a></li>
                    <li><a href="#">İletişim</a></li>
                    <li id="ara"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26" version="1" fill="#FFFFFF"><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="ana-sayfa#3" transform="translate(-588, -46)"><g id="menü" transform="translate(28, 28)"><g id="büyüteç" transform="translate(573, 31) scale(-1, 1) translate(-573, -31) translate(560, 18)"><path d="M19 16L25 23C26 23 26 25 25 25 25 26 23 26 23 25L16 19 19 16" id="Shape"/><path d="M20 18L19 19 25 25 25 25 25 25C26 25 26 23 25 23L25 23 20 18" id="Shape"/><path d="M3 3C-1 8-1 15 3 19 8 24 15 24 19 19 24 15 24 8 19 3 15-1 8-1 3 3L3 3ZM17 17C14 20 9 20 5 17 2 14 2 9 5 6 9 2 14 2 17 6 20 9 20 14 17 17L17 17Z" id="Shape"/></g></g></g></g></svg></a></li>
                </ul>
            </nav>

            <div class="ust-banner">
                468x60 Reklam Alanı
            </div>
        </header><!--#ust-->

        <section id="arama">
            <div class="container">
                <input type="text" spellcheck="false" autocomplete="off" id="kelime" placeholder="Film Ara">
                
                <section id="arama-sonuclari">
                    <header>
                        <h2>Arama Sonuçları</h2></span>
                    </header>

                    <div class="filmler buyuk"></div>
                </section><!--#arama-sonuclari-->
            </div>
        </section><!--#arama-->