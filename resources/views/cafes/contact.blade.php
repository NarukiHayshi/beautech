<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="UTF-8">
        <title>WCB Cafe - CONTACT</title>
        <meta name="description" content="ブレンドコーヒーとヘルシーなオーガニックフードを提供するカフェ">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <style>
            #contact{
                background-image: url(images/contact-bg.jpg);
            }
        </style>
    </head>
    
    <body>
        <div id="contact" class="big-bg">
            <header class="page-header wrapper">
                <h1><a href="index.html"><img class="logo" src="images/logo.svg" alt="WCBカフェホーム"></a></h1>
                    <nav>
                        <ul class="main-nav">
                            <li><a href="cafes.news">News</a></li>
                            <li><a href="cafes.menu">Menu</a></li>
                            <li><a href="cafes.contact">Contact</a></li>
                        </ul>
                    </nav>
            </header>
            
            <div class="wrapper">
                <h2 class="page-title">Contact</h2>
                <form action="#">
                    <div>
                        <label for="name">お名前</label>
                        <input type="text" id="name" name="your-name"/>
                    </div>
                    <div>
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="your-email"/>
                    </div>
                    <div>
                        <label for="message">メッセージ</label>
                        <textarea id="message" name="your-message"></textarea>
                    </div>
                    
                    <input type="submit" class="button" value="送信">
                </form>
            </div>
            
            
        </div>
        <section id="location">
                <div class="wrapper">
                    <div class="location-info">
                        <h3 class="sub-title">カフェ　東駅前店</h3>
                        <p>
                            住所：カリブ海周辺<br>
                            電話：0120-2323-51<br>
                            営業時間：１０：００〜２０：００<br>
                            休日：月火水木金土日
                            
                        </p>
                    </div>
                    <div class="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.4659312057756!2d135.70682510799602!3d34.98599815793425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600106fbbdc9d74d%3A0xf8ace61b6558f1f4!2z44CSNjE1LTgwMTYg5Lqs6YO95bqc5Lqs6YO95biC6KW_5Lqs5Yy65qGC5LmF5pa555S677yS77yQ77yT!5e0!3m2!1sja!2sjp!4v1619438412880!5m2!1sja!2sjp" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>
            <section id="sns">
                <div class="wrapper">
                    <div class="sns-box">
                        <h3 class="sub-title">Facebook</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="315" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                    </div>
                    <div class="sns-box">
                        <h3 class="sub-title">Twitter</h3>
                        <a href="https://twitter.com/intent/tweet?button_hashtag=Naruki0206&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-related="Naruki0206" data-show-count="false">Tweet #Naruki0206</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="sns-box">
                        <h3 class="sub-title">Youtube</h3>
                        <iframe ="auto" height="360px" src="https://www.youtube.com/embed/dUNfqCtQtNk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                
            </section>
         <footer>
            <div class="wrapper">
                <p><small>&copy ; 20219 Manabox</small></p>
            </div>
        </footer>   
    </body>
</html>