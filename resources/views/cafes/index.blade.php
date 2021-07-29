<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="UTF-8">
        <title>WCB Cafe</title>
        <meta name="description" content="ブレンドコーヒーとヘルシーなオーガニックフードを提供するカフェ">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" type="image/png" href="images/favicon.png">

    </head>

    
    <body>

        <style>
                h2 span {
                    font-size: 1rem;
                }
                .timer {
                    font-weight: bold;
                    font-size: 24px;
                    text-align: center;
                }
                .timer span {
                    font-size: 72px;
                }
                #home{
                    background-image:url({{ asset('images/main-bg.jpg') }});
                }
        </style>
        
        <div id="home" class="big-bg">
            <header class="page-header wrapper">
                <h1><a href="index.html"><img class="logo" src="/images/logo.svg" alt="WCBカフェホーム"></a></h1>
                    <nav>
                        <ul class="main-nav">
                            <li><a href="cafes.news">News</a></li>
                            <li><a href="cafes.menu">Menu</a></li>
                            <li><a href="cafes.contact">Contact</a></li>
                        </ul>
                    </nav>
            </header>
            
            <div class="home-content wrapper">
                <p><span id="time"></span></p>
                <h2 class="page-title">We'll Make your day</h2>
                <p>おしゃれなカフェで癒されてみませんか？無添加の食材で体の中からリフレッシュ。</p>
                <a class="button" href="cafes.menu">メニューを見る</a>
                
                
            </div>
        </div>
        <script>
            'use strict';
            
            const now = new Date();
            const year = now.getFullYear();
            const month = now.getMonth();
            const date = now.getDate();
            const hour = now.getHours();
            const min = now.getMinutes();
            
            document.getElementById('time').textContent = `${year}/${month + 1}/${date} ${hour}:${min}`;
            
           
        </script>
    </body>
</html>