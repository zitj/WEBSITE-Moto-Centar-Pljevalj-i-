<?php include('database_connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  maximum-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Moto Centar Pljevaljčić</title>
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <div class="advertisements active">
        
    <?php foreach($oglasi as $oglas): ?>
    <div class="containerAdvertisement">
        <div class="rotatedContainer"><img src="img/oglasi/<?php echo $oglas['title']?>/1.jpg" alt=""></div><!-- end .rotatedContainer -->
        <div class="text">
        <h3><?php echo htmlspecialchars($oglas['title']);?></h3>
        <p><?php echo htmlspecialchars($oglas['descr']);?></p>
        <h4>cena: <?php echo htmlspecialchars($oglas['price']);?> $</h4>
        </div><!-- end .text -->
        <a href="#">detalji</a>
    </div><!-- end .container -->
    <?php endforeach; ?>   
    </div><!-- end .advertisements -->
    <div class="gallery active">
        <div class="close-button"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="80" height="80"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#d02626"><path d="M49.5575,44.72l-4.8375,4.8375l36.55,36.4425l-36.55,36.4425l4.8375,4.8375l36.6575,-36.4425l36.55,36.4425l4.8375,-4.8375l-36.55,-36.4425l36.55,-36.4425l-4.8375,-4.8375l-36.55,36.4425z"></path></g></g></svg>
       </div><!-- end .close-button -->
        <!-- Slider main container -->
        <div class="swiper-container ">
            
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="img/galerija/11.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/galerija/22.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/galerija/33.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/galerija/44.jpg" alt=""></div>
        
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

         <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
        </div><!-- end .container-->
    </div><!-- end gallery-->
    
    


    <header>
        <nav class="center">
            <a href="#pocetna">početna</a>
            <a id="galleryButton" href="#">galerija</a>
            <a href="#lokacija">lokacija</a>
            <a href="#kontakt">kontakt</a>
            <a id="advertisementsButton" href="#">oglasi</a>
        </nav>
    </header>



    <div class="part1 active" id="pocetna">
        <div class="logo center">
            
            <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg class="motorcycle" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 727 392" style="enable-background:new 0 0 727 392;" xml:space="preserve">
    <style type="text/css">
        .st0{fill:url(#vizir_1_);}
        .st1{fill:url(#rezervoar_1_);}
        .st2{fill:url(#rep_1_);}
        .st3{fill:url(#spona_1_);}
        .st4{fill:url(#leva_veca_1_);}
        .st5{fill:url(#desna_veca_1_);}
        .st6{fill:url(#leva_manja_1_);}
        .st7{fill:url(#desna_manja_1_);}
        .st8{fill:url(#tlo_1_);}
    </style>
    <linearGradient id="vizir_1_" gradientUnits="userSpaceOnUse" x1="547.5" y1="73.8348" x2="664.1531" y2="73.8348">
        <stop  offset="0" style="stop-color:#F7931E"/>
        <stop  offset="0.1436" style="stop-color:#F73C1D"/>
        <stop  offset="1" style="stop-color:#C80007"/>
    </linearGradient>
    <path id="vizir" class="st0" d="M547.5,9.5c0,0,54,25,73,87s42,38,42,38s9-16-15-51S564.5,1.5,547.5,9.5z"/>
    <linearGradient id="rezervoar_1_" gradientUnits="userSpaceOnUse" x1="320.5" y1="112.8246" x2="592.7261" y2="112.8246">
        <stop  offset="0" style="stop-color:#F7931E"/>
        <stop  offset="0.1436" style="stop-color:#F73C1D"/>
        <stop  offset="1" style="stop-color:#B10208"/>
        <stop  offset="1" style="stop-color:#C80007"/>
    </linearGradient>
    <path id="rezervoar" class="st1" d="M592.5,94.5c0,0,10-36-103-44c-80-5.7-132.8,58.5-156,97c-9.6,15.9-13,28-13,28s7.2-9.2,18-24
        c22.4-30.7,66.8-79,141-75c0,0,41,4,61,14S587.5,103.5,592.5,94.5z"/>
    <linearGradient id="rep_1_" gradientUnits="userSpaceOnUse" x1="17.2745" y1="98.0556" x2="308.5473" y2="98.0556">
        <stop  offset="0" style="stop-color:#F7931E"/>
        <stop  offset="0.1436" style="stop-color:#F73C1D"/>
        <stop  offset="1" style="stop-color:#C80208"/>
        <stop  offset="1" style="stop-color:#B10007"/>
    </linearGradient>
    <path id="rep" class="st2" d="M308.5,138.5c0,0,2-7-20-11s-45-5-45-5s-30-2-37-10s34-53-2-70s-194,60-187,82s37,14,37,14
        s-57-7-15-30s109-43,109-43s65-21,39,19s8,58,8,58s12,10,51,13S307.5,148.5,308.5,138.5z"/>
    <linearGradient id="spona_1_" gradientUnits="userSpaceOnUse" x1="236.5" y1="293.9775" x2="503.6212" y2="293.9775">
        <stop  offset="0" style="stop-color:#F7931E"/>
        <stop  offset="0.1436" style="stop-color:#F73C1D"/>
        <stop  offset="1" style="stop-color:#C80007"/>
    </linearGradient>
    <path id="spona" class="st3" d="M503.5,300.5c0,0,8-31-106-24s-161,26-161,26s136-14,197,3S502.5,303.5,503.5,300.5z"/>
    <linearGradient id="leva_veca_1_" gradientUnits="userSpaceOnUse" x1="33.8078" y1="267.7282" x2="246" y2="267.7282">
        <stop  offset="0" style="stop-color:#999999"/>
        <stop  offset="0.1436" style="stop-color:#808080"/>
        <stop  offset="0.4901" style="stop-color:#666666"/>
        <stop  offset="1" style="stop-color:#333333"/>
    </linearGradient>
    <path id="leva_veca" class="st4" d="M137.2,168.5c6.8-2.5,20.1-6.3,35.9-3c10.6,2.2,17.8,6.6,24.9,11c7.6,4.7,21.8,13.7,32.9,31
        c13.5,20.9,14.5,41.5,15,52c0.3,8.9,0.9,30.5-11,54c-19.7,38.8-57.6,51.1-63.8,53c-10.3,3.2-36,9.3-65.8-1
        c-8.2-2.8-33.4-12.7-51.8-39c-3.7-5.3-30.2-44.5-15-91c11-33.7,37.1-50.5,44.9-55c20-11.7,39.1-13.7,48.9-14
        c-9.6,1.1-28.7,4.5-47.9,18c-6.9,4.8-28.6,20.7-37.9,51c-11.5,37.6,5.1,68.8,8,74c4.1,7.4,19.5,33,51.8,44
        c3.7,1.3,45.9,14.8,83.7-12c5.4-3.8,32.8-24.1,37.9-61c5.9-42.8-23.2-73.1-29.9-80C175.1,176.7,147.7,170.4,137.2,168.5z"/>
    <linearGradient id="desna_veca_1_" gradientUnits="userSpaceOnUse" x1="510.8078" y1="273.7037" x2="721" y2="273.7037">
        <stop  offset="0" style="stop-color:#999999"/>
        <stop  offset="0.1436" style="stop-color:#808080"/>
        <stop  offset="0.4901" style="stop-color:#666666"/>
        <stop  offset="1" style="stop-color:#333333"/>
    </linearGradient>
    <path id="desna_veca" class="st5" d="M613.2,175.4c6.7-2.5,19.9-6.2,35.6-3c10.5,2.2,17.7,6.5,24.7,10.9C681,188,695,196.9,706,214
        c13.3,20.7,14.4,41.1,14.8,51.5c0.3,8.8,0.9,30.2-10.9,53.5c-19.5,38.4-57,50.6-63.2,52.5c-10.2,3.1-35.6,9.2-65.2-1
        c-8.1-2.8-33.1-12.6-51.4-38.6c-3.7-5.2-29.9-44-14.8-90.1c10.9-33.4,36.8-50,44.4-54.5c19.8-11.6,38.7-13.6,48.4-13.9
        c-9.5,1-28.4,4.4-47.4,17.8c-6.8,4.8-28.4,20.5-37.5,50.5c-11.4,37.3,5,68.1,7.9,73.3c4.1,7.4,19.3,32.6,51.4,43.6
        c3.7,1.3,45.4,14.7,83-11.9c5.3-3.8,32.5-23.9,37.5-60.4c5.8-42.4-23-72.4-29.6-79.2C650.8,183.6,623.7,177.3,613.2,175.4z"/>
    <linearGradient id="leva_manja_1_" gradientUnits="userSpaceOnUse" x1="67.7815" y1="273.1724" x2="229.4376" y2="273.1724">
        <stop  offset="0" style="stop-color:#999999"/>
        <stop  offset="0.1436" style="stop-color:#808080"/>
        <stop  offset="0.4901" style="stop-color:#666666"/>
        <stop  offset="1" style="stop-color:#333333"/>
    </linearGradient>
    <path id="leva_manja" class="st6" d="M97.5,335.5c-1.7,3.5,14.7,15,20,18c24.3,13.7,83.1-1.7,104-47c15.8-34.2,8.7-82.6-27-106
        c-39-25.5-94.9-10.1-117,30c-17.3,31.3-11.2,72.7,16,101c-4.9-6.4-11.8-16.8-16-31c-2.9-9.7-10.1-34,2-59c16.1-33.3,52.9-39.7,55-40
        c5.1-0.8,37.3-5.2,62,19c1.8,1.8,26.2,26.6,20,62c-4.4,25.2-21.5,39.8-27,44c-12.5,9.7-25,12.5-32,14c-25.8,5.5-47.6-1.7-58-6
        C98.7,334.6,97.8,334.8,97.5,335.5z"/>
    <linearGradient id="desna_manja_1_" gradientUnits="userSpaceOnUse" x1="517" y1="279.3927" x2="699" y2="279.3927">
        <stop  offset="0" style="stop-color:#999999"/>
        <stop  offset="0.1436" style="stop-color:#808080"/>
        <stop  offset="0.4901" style="stop-color:#666666"/>
        <stop  offset="1" style="stop-color:#333333"/>
    </linearGradient>
    <path id="desna_manja" class="st7" d="M670.1,331.5c4.7,2.2,28.1-21.6,28.9-50c0-1.3,0-2.2,0-3c-0.5-23.8-12.2-41.1-15-45
        c-3.1-4.3-14.9-20.2-37.4-30c-5.8-2.5-45.2-18.9-84.5,2c-26.8,14.3-43.4,40.6-44.9,67c-2.4,42.2,31.1,87,77,91
        c40.1,3.5,68.9-26,72.7-30c-5.4,4.7-13.9,11.2-25.7,16c-6,2.5-41.3,17-74.9-1c-27-14.5-34.7-40.2-36.4-46c-2-6.8-6.6-23.1,0-42
        c7.5-21.4,28.2-42.7,57.8-47c42.1-6.1,69.3,27,71.7,30c16.4,20.7,16.1,44.8,16,53C675.2,318.3,667,330.1,670.1,331.5z"/>
    <linearGradient id="tlo_1_" gradientUnits="userSpaceOnUse" x1="17.5" y1="379.2758" x2="715.5" y2="379.2758">
        <stop  offset="0" style="stop-color:#999999"/>
        <stop  offset="0.1436" style="stop-color:#808080"/>
        <stop  offset="0.4901" style="stop-color:#666666"/>
        <stop  offset="1" style="stop-color:#333333"/>
    </linearGradient>
    <path id="tlo" class="st8" d="M17.5,378.5c0-3,45.5-6.7,83-7c3,0,6.7,0,14,0c37.7,0.1,65.7,0.8,73,1c9.5,0.2,50,0.8,131,2
        c73.3,1.1,98.2,0.6,189,1c59.8,0.3,122.5,0.8,202.5,1.9c0.7,0,4.8,0.1,5.5,0.1c-15.3,1-38.1,2.4-66,3c-26.6,0.6-39.3,0.2-70,0
        c-14.5-0.1-48.2,0.3-115,1c-62,0.7-92.9,1-93,1c-141.5,2-161.8,6.1-242,4C82.7,385.3,17.5,382,17.5,378.5z"/>
            </svg>
            <h1><span>M</span>oto <span>C</span>entar</h1>
            <h1>Pljevaljčić</h1>
            <h4>servis i prodaja delova</h4>
            <button><a href="tel:+381655325532"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="24" height="24"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M66.40633,113.6275l-18.963,-18.95583c5.7835,-10.97933 12.52017,-19.77283 20.00933,-27.219c7.44617,-7.48917 16.23967,-14.22583 27.219,-20.00933l19.10633,18.99883l36.722,-5.51833v-39.42383c0,0 -2.35067,0 -7.16667,0c-32.5295,0 -63.597,13.18667 -86.24367,35.58967c-22.403,22.64667 -35.58967,53.71417 -35.58967,86.24367c0,4.816 0,7.16667 0,7.16667h39.50267z"></path></g></g></svg>Pozovi</button>
            </a></div> <!-- end .logo-->
    </div><!-- end part1-->
    
    <div class="part2 active" id="servis">
        <div class="main center">
            <div class="rotatedContainer">
                <h2>SERVIS</h2>
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M22.93333,17.2l-11.46667,11.46667l11.46667,22.93333l17.2,5.73333l20.06667,20.06667l11.46667,-11.46667l-20.06667,-20.06667l-5.73333,-17.2zM126.51406,17.25599c-9.50891,-0.37598 -19.13079,3.05488 -26.39349,10.31328c-9.38011,9.38011 -10.21993,20.66193 -5.55417,31.27578l-66.59401,66.59401c-6.71947,6.71947 -6.71947,17.60241 0,24.32188c6.71947,6.71947 17.60241,6.71947 24.32188,0l66.59401,-66.59401c10.61316,4.66407 21.89638,3.81793 31.27578,-5.56536c9.6836,-9.6836 12.55439,-23.56561 8.66719,-35.76614l-21.24245,21.25364l-18.35339,-4.59114l-4.59114,-18.35339l21.25364,-21.24245c-3.05157,-0.97037 -6.21422,-1.52077 -9.38386,-1.64609zM117.65651,101.11719l-21.57839,21.57839l27.62526,27.63646c5.96267,5.96267 15.63265,5.96267 21.58958,0c5.96267,-5.96267 5.96267,-15.62692 0,-21.58958zM40.13333,131.86667c3.1648,0 5.73333,2.56853 5.73333,5.73333c0,3.1648 -2.56853,5.73333 -5.73333,5.73333c-3.1648,0 -5.73333,-2.56853 -5.73333,-5.73333c0,-3.1648 2.56853,-5.73333 5.73333,-5.73333z"></path></g></g></svg>
                    <p>Popravka</p>
                    <p>Motora</p>
                </div><!-- end .content-->
            </div> <!-- end .rotatedContainer-->
            <div class="rotatedContainer">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="96" height="96"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,21.5c-0.99169,0 -1.98696,0.2038 -2.91146,0.61589l-53.07812,23.59961c-5.17433,2.3005 -8.51042,7.41907 -8.51042,13.07357v77.3776c0,7.91917 6.41417,14.33333 14.33333,14.33333h14.33333v-64.5c0,-3.956 3.21067,-7.16667 7.16667,-7.16667h57.33333c3.956,0 7.16667,3.21067 7.16667,7.16667v64.5h14.33333c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-77.36361c0,-5.66883 -3.32892,-10.80106 -8.51042,-13.10156l-53.07812,-23.58561c-0.92808,-0.41208 -1.91977,-0.61589 -2.91146,-0.61589zM86,100.33333c-1.59996,0 -3.20126,0.61174 -4.42318,1.83366l-19.3584,19.3584c-2.75917,2.752 -0.80524,7.47461 3.09342,7.47461h41.3763c3.89867,0 5.84542,-4.72261 3.09342,-7.47461l-19.35839,-19.3584c-1.22192,-1.22192 -2.82322,-1.83366 -4.42318,-1.83366z"></path></g></g></svg>
                    <p>Garažiranje</p>
                    <p>Motora</p>
                </div><!-- end .content-->
            </div> <!-- end .rotatedContainer-->
            <div class="rotatedContainer">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M72.24,17.2c-1.89469,0 -3.44,1.54531 -3.44,3.44v13.76c0,1.89469 1.54531,3.44 3.44,3.44h13.76v6.88h20.64v-6.88h13.76c1.90813,0 3.44,-1.54531 3.44,-3.44v-13.76c0,-1.89469 -1.53187,-3.44 -3.44,-3.44zM68.8,48.16c-2.56656,0 -5.14656,1.00781 -7.095,3.01l-15.1575,17.63h-8.7075c-5.30781,0 -10.32,5.01219 -10.32,10.32v41.28c0,5.40188 4.91813,10.32 10.32,10.32h8.7075l15.3725,17.7375c1.80063,1.8275 4.31344,2.9025 6.88,2.9025h44.1825c2.55313,0 5.07938,-1.075 6.88,-2.9025l25.2625,-25.6925c1.81406,-1.84094 2.795,-4.25969 2.795,-6.88v-5.805h3.44v13.76c0,1.90813 1.53188,3.44 3.44,3.44h13.76c1.90813,0 3.44,-1.53187 3.44,-3.44v-55.04c0,-1.90812 -1.53187,-3.44 -3.44,-3.44h-13.76c-1.90812,0 -3.44,1.53188 -3.44,3.44v13.76h-3.44v-24.6175c0,-5.40187 -4.34031,-9.7825 -9.675,-9.7825zM3.44,68.8c-1.89469,0 -3.44,1.54531 -3.44,3.44v55.04c0,1.90813 1.54531,3.44 3.44,3.44h13.76c1.89469,0 3.44,-1.53187 3.44,-3.44v-17.2h3.44v-20.64h-3.44v-17.2c0,-1.89469 -1.54531,-3.44 -3.44,-3.44zM92.88,68.8h17.2l-17.2,27.52h17.2l-27.52,37.84l10.32,-30.96h-17.2z"></path></g></g></svg>
                    <p>Nabavka</p>
                    <p>Delova</p>
                </div><!-- end .content-->
            </div> <!-- end .rotatedContainer-->
            <div class="rotatedContainer">
                <div class="content">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="90" height="90"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g id="original-icon" fill="#ffffff"><path d="M86,5.73333c-5.07352,0 -9.58399,2.23982 -12.73203,5.73333h-15.92344c-4.05347,0 -6.83807,4.09987 -5.33021,7.86094l5.31901,15.0724h57.33333l5.31901,-15.0724c1.50787,-3.76107 -1.27674,-7.86094 -5.33021,-7.86094h-15.92344c-3.14804,-3.49351 -7.65851,-5.73333 -12.73203,-5.73333zM57.33333,45.86667c0,0 -40.13333,34.4 -40.13333,74.53333c0,22.93333 17.2,34.4 28.66667,34.4h40.13333h40.13333c11.46667,0 28.66667,-11.46667 28.66667,-34.4c0,-40.13333 -40.13333,-74.53333 -40.13333,-74.53333zM80.26667,65.93333h11.46667v9.26067c7.74,1.73147 12.91648,7.00524 13.16875,14.13177h-9.6638c-0.47587,-3.87573 -4.08285,-6.4612 -9.04792,-6.4612c-5.13707,0 -8.53281,2.38139 -8.53281,6.12526c0,3.0272 2.33436,4.76969 8.08489,5.99089l5.9237,1.25417c9.86707,2.07547 14.10938,6.33874 14.10938,13.95261c0,8.19867 -5.25872,13.69514 -14.04219,15.36354v9.18229h-11.46667v-9.15989c-8.43373,-1.5824 -13.73259,-6.7596 -14.04219,-14.33333h9.92136c0.47587,3.97893 4.49476,6.52839 10.27969,6.52839c5.33773,0 9.11511,-2.58377 9.1151,-6.29323c0,-3.1304 -2.44562,-4.93031 -8.46562,-6.22604l-6.39401,-1.36614c-8.944,-1.86907 -13.33672,-6.5266 -13.33672,-14.0086c0,-7.52787 4.98173,-12.8922 12.92239,-14.65807z"></path></g></g></svg>
                    <p>Preprodaja</p>
                    <p>Motora</p>
                </div><!-- end .content-->
            </div> <!-- end .rotatedContainer-->
        </div><!-- end .main-->
    </div> <!-- end .part2-->

    <div class="part3 active" id="lokacija">
        <div class="main center">
            <div class="rotatedContainer">
                <div class="content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.933457691511!2d21.935250951240857!3d43.00073570229009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47559d359a7857a7%3A0xc6f476c8bd536ac0!2z0IjRg9C20L3QvtC80L7RgNCw0LLRgdC60LjRhSDQkdGA0LjQs9Cw0LTQsCAyNTksINCb0LXRgdC60L7QstCw0YY!5e0!3m2!1ssr!2srs!4v1599319036974!5m2!1ssr!2srs" width="650" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div><!-- end .content-->
                
            </div><!-- end rotatedContainer-->
            <div class="text">
                <h2>LOKACIJA</h2>
                <p>Južnomoravskih Brigada br.259</p>
                <p>16000, Leskovac</p>
            </div><!-- end text-->
        </div><!-- end .main-->
    </div><!-- end .part3-->

    <div class="part4 active" id="kontakt">
        <div class="main center">
            <div class="rotatedContainer">
                <h2>KONTAKT</h2>
                <div class="content">
                    <p>Nikola Pljevaljčić</p>
                    <p>+381 65 532 5 532</p>
                    <div class="svgContainer">
                        <a href="https://sr-rs.facebook.com/pages/category/Motorcycle-Repair-Shop/Moto-Centar-Pljevalj%C4%8Di%C4%87-457291941104483/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="45" height="45"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#333333"></path><g id="original-icon" fill="#ffffff"><path d="M112.39573,72.02492h-16.42063v-9.31667c0,-4.8074 0.3913,-7.83532 7.28098,-7.83532h8.70177v-14.8135c-4.23443,-0.43788 -8.49214,-0.65217 -12.75452,-0.64285c-12.63806,0 -21.86156,7.71886 -21.86156,21.88951v10.71883h-13.975v18.63333l13.975,-0.00466v41.92966h18.63333v-41.93897l14.28245,-0.00466z"></path></g></g></svg>
                        </a>
                        <a href="https://www.instagram.com/explore/locations/176770375852208/moto-centar-pljevaljcic?hl=sr" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="45" height="45"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#333333"></path><g fill="#ffffff"><path d="M51.6,38.7c-7.07148,0 -12.9,5.82852 -12.9,12.9v68.8c0,7.07148 5.82852,12.9 12.9,12.9h68.8c7.07148,0 12.9,-5.82852 12.9,-12.9v-68.8c0,-7.07148 -5.82852,-12.9 -12.9,-12.9zM107.5,51.6h12.9v12.9h-12.9zM86,68.8c9.55742,0 17.2,7.64258 17.2,17.2c0,9.55742 -7.64258,17.2 -17.2,17.2c-9.55742,0 -17.2,-7.64258 -17.2,-17.2c0,-9.55742 7.64258,-17.2 17.2,-17.2zM47.3,77.4h14.37813c-0.95742,2.6875 -1.47812,5.59336 -1.47812,8.6c0,14.19336 11.60664,25.8 25.8,25.8c14.19336,0 25.8,-11.60664 25.8,-25.8c0,-3.00664 -0.5207,-5.9125 -1.47813,-8.6h14.37813v43c0,2.43555 -1.86445,4.3 -4.3,4.3h-68.8c-2.43555,0 -4.3,-1.86445 -4.3,-4.3z"></path></g></g></svg>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="45" height="45"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#333333"></path><g fill="#ffffff"><path d="M55.67839,45.95759c-6.18917,0 -10.68432,3.70896 -10.68432,8.81013c0,5.119 4.60217,8.99127 10.68432,8.99127c6.18917,0 10.68432,-3.78059 10.68432,-9.09578c-0.28538,-5.119 -4.69135,-8.70562 -10.68432,-8.70562zM46.76028,67.34366c-0.98099,0 -1.78362,0.80263 -1.78362,1.78362v51.72509c0,0.98099 0.80263,1.78362 1.78362,1.78362h17.83624c0.98099,0 1.78362,-0.80263 1.78362,-1.78362v-51.72509c0,-0.98099 -0.80263,-1.78362 -1.78362,-1.78362zM73.51463,67.34366c-0.98099,0 -1.78362,0.80263 -1.78362,1.78362v51.72509c0,0.98099 0.80263,1.78362 1.78362,1.78362h16.05261c0.98456,0 1.78362,-0.79906 1.78362,-1.78362v-26.75436v-0.44591v-0.44591c0,-4.22719 3.24731,-7.67042 7.38532,-7.99147c0.21403,-0.03567 0.42695,-0.03484 0.64099,-0.03484c0.21403,0 0.42695,-0.00084 0.64099,0.03484c4.13801,0.32105 7.38532,3.76428 7.38532,7.99147v27.64617c0,0.98456 0.79906,1.78362 1.78362,1.78362h16.05261c0.98099,0 1.78362,-0.80263 1.78362,-1.78362v-30.32161c0,-11.54005 -6.19085,-23.18711 -19.9961,-23.18711c-6.27836,0 -11.02112,2.42615 -13.89276,4.44164v-2.65802c0,-0.98099 -0.80263,-1.78362 -1.78362,-1.78362z"></path></g></g></svg>
                    </div><!-- end svgContainer-->
                    <p>motocentarpljevaljcic@gmail.com</p>
                    <p>Južnomoravskih Brigada br.259</p>
                    <p>16000, Leskovac</p>
                </div><!-- end .content-->
            </div><!-- end rotatedContainer -->
        </div><!-- end .main -->
    </div> <!-- end .part4 -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script>
        var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
//   direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
})
    </script>
</body>
</html>