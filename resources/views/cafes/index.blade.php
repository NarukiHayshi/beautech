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
                .home-content{
                    background-size:cover;
                    background-image:url("https://st2.depositphotos.com/1643295/11649/i/450/depositphotos_116491376-stock-photo-housewife-wiping-table-with-spray.jpg");
                }
        </style>
        
        <div id="" class="big-bg">
            <header class="page-header wrapper">
                <h1><a href="/"><img class="logo" src="/images/logo.JPG" alt="WCBカフェホーム"></a></h1>
                    <nav>
                        <ul class="main-nav">
                            <li><a href="cafes.news">業務内容</a></li>
                            <li><a href="cafes.menu">営業経歴</a></li>
                            <li><a href="cafes.contact">会社概要</a></li>
                        </ul>
                    </nav>
            </header>
            
            <div class="home-content wrapper">
                <p><span id="time"></span></p>
                <h2 class="page-title">（有）ビューテック</h2>
                <p>美装工事と内装工事で暮らしやすい住まいに。</p>
                <a class="button" href="cafes.news">企業説明へ</a>
                
                
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