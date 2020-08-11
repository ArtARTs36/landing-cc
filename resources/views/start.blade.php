<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title>{TITLE}</title>
    <meta name="keywords" content="{keyword}" />
    <meta name="description" content="{description}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/jquery') }}{THEME}/js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Marck+Script" rel="stylesheet">
</head>
<style>
    @font-face {
        font-family: 'Nautilus Pompilius';
        src: local('Nautilus Pompilius'), local('NautilusPompilius'), url('{THEME}/css/nautiluspompilius.woff2') format('woff2'), url('{THEME}/css/nautiluspompilius.woff') format('woff'), url('{THEME}/css/nautiluspompilius.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
    }

    *{margin:0;padding:0}
    body{background:#000;font-family: 'Comfortaa', cursive;}
    #image {
        background: url('{THEME}/img/1.jpg') no-repeat center center fixed;
        background-size: cover;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #logo{font-family: 'Nautilus Pompilius', cursive;font-size:24pt;color:#fff;font-weight:bold}
    #logo span{font-size:20pt;color:yellow}
    #content{text-align:center;padding:175px;position: relative;z-index:999999999;}
    #block{}
    #buttons{padding:0 150px}
    #buttons a{display:block;border:1px solid #eee;padding:6px;box-sizing:border-box;width:100%;text-decoration:none;color:#fff;border-radius:5px}
    #buttons a.white:hover{background:#ecf0f1;color:#777}
    #buttons a.green{background:#27ae60;border:1px solid #27ae60;color:#fff}
    #buttons a.green:hover{background:none;color:#2ecc71}

    #pch1 {
        position: fixed;
        bottom: 0px;
        right: 0px;
    }
    #pch2 {
        position: fixed;
        top: 0px;
        left: 0px;
    }
    @media (max-width: 800px) {
        #content{padding:100px;}
        #buttons{padding:0 150px}
    }
    @media (max-width: 550px) {
        #content{padding:85px;}
        #buttons{padding:0 100px}
    }
    @media (max-width: 500px) {
        #content{padding:115px 45px;}
        #buttons{padding:0 100px}
    }
    @media (max-width: 450px) {
        #content{padding:115px 25px;}
        #buttons{padding:0 100px}
    }
    @media (max-width: 380px) {
        #content{padding:135px 0;}
        #buttons{padding:0 50px}
    }
    @media (max-width: 230px) {
        #content{padding:115px 0;}
        #buttons{padding:0 25px}
    }
</style>
<script>

    $(document).ready(function(){

        var currimg = 1;
        function loadimg(){

            $('#image').animate({ opacity: 1 }, 500,function(){

                //finished animating, minifade out and fade new back in
                $('#image').animate({ opacity: 0.7 }, 100,function(){

                    currimg++;

                    if(currimg > 4){

                        currimg=1;

                    }

                    var newimage = '{THEME}/img/'+currimg+'.jpg';

                    //swap out bg src
                    $('#image').css("background-image", "url("+newimage+")");

                    //animate fully back in
                    $('#image').animate({ opacity: 1 }, 800,function(){

                        //set timer for next
                        setTimeout(loadimg,6000);

                    });

                });

            });

        }
        setTimeout(loadimg,5000);

    });
</script>
<body>
<div id="image">
</div>
<div id="pch2"><img src="http://www.gifki.org/data/media/185/pchela-animatsionnaya-kartinka-0165.gif"/></div>
<div id="content">
    <div id="logo">Цветы Черноземья <br/> <span>пчелоферма</span></div>
    <div id="buttons">
        <br/>
        <a href="/home" class="white">Перейти к сайту</a> <br/>
        <a href="/home" class="green">Посмотреть продукцию</a>
    </div>
</div>
<div id="pch1"><img src="http://www.gifki.org/data/media/185/pchela-animatsionnaya-kartinka-0194.gif"/></div>
</body>
</html>
