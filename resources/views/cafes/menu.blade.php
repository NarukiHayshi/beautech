<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="UTF-8">
        <title>WCB Cafe - MENU</title>
        <meta name="description" content="ブレンドコーヒーとヘルシーなオーガニックフードを提供するカフェ">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <style>
            #menu{
                background-image: url( {{ asset('images/menu-bg.jpg') }});
            }
        </style>
    </head>
    
    <body>
        <div id="menu" class="big-bg">
            <header class="page-header wrapper">
                <h1><a href="index.html"><img class="logo" src="{{ asset('images/logo.svg') }}" alt="WCBカフェホーム"></a></h1>
                    <nav>
                        <ul class="main-nav">
                            <li><a href="cafes.news">News</a></li>
                            <li><a href="cafes.menu">Menu</a></li>
                            <li><a href="cafes.contact">Contact</a></li>
                        </ul>
                    </nav>
            </header>
            
            <div class="menu-content wrapper">
                <h2 class="page-title">Menu</h2>
                <p>
                    体に優しい自然食を提供する、WCB　CAFE。無添加の食材を利用したメニューが特徴です。
                    おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒されてください
                </p>
            </div>
        </div>
        
        <div class="wrapper grid">
            <div class="item big-box">
                <img src="{{ asset('images/menu1.jpg') }}" alt="">
                <p>熱々コーヒー</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu2.jpg') }}" alt="">
                <p>キャラメルマキアート</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu3.jpg') }}" alt="">
                <p>畑のプリン</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu4.jpg') }}" alt="">
                <p>オマール海老のスープ</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu5.jpg') }}" alt="">
                <p>カプレーゼ</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu6.jpg') }}" alt="">
                <p>我ながらこれは何</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu7.jpg') }}" alt="">
                <p>十勝のジャガイモのアヒージョ</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu8.jpg') }}" alt="">
                <p>オレンジパイ</p>
            </div>
            <div class="item">
                <img src="{{ asset('images/menu9.jpg') }}" alt="">
                <p>チーズケーキ</p>
            </div>
        </div>
        
            
            
            <footer>
                <div class="wrapper">
                    <p><small>&copy ; 20219 Manabox</small></p>
                </div>
            </footer>
            
    </body>
</html>