<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/jquery-2.1.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/custom.js"></script>
    <title>Kouzelník Robin</title>
</head>
<body>
    <header>
        <section id="menuContainer" class="menu">
                <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container-fluid">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                          </div>
                      
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                              <li class="active"><a href="#Bio">Bio</span></a></li>
                              <li><a href="#Mikromagie">Show</a></li>
                              <li><a href="#Gallery">Galerie</a></li>
                              <li><a href="#Projects">Projekty</a></li>
                              <li><a href="#Reference">Reference</a></li>
                              <li><a href="#Footer">Kontakt</a></li>
                            </ul>
                          </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                      </nav>
        </section>
    
        <section id="carouselContainer" class="carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="contentContainer">
                    <div class="item header">
                        <a id="btBio" href="#mikromagie" class="bt bt__mainPage--section">
                            <span class="bt__mainPage">Více zde</span>
                        </a>
                    </div>
                    <div class="item mikromagie">
                        <a id="btMikromagie" href="#mikromagie" class="bt bt__mainPage--section">
                            <span class="bt__mainPage">Více zde</span>
                        </a>
                    </div>
                    <div class="item kids">
                        <a id="btKids" href="#mikromagie" class="bt bt__mainPage--section">
                            <span class="bt__mainPage">Více zde</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </header>

    <section id="robinBio" class="robin_bio">
        <div class="container">
        <div class="row">
            <p class="sectionTitle text-center">bio</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <h1 class="title">Kouzelník Robin</h1>
                </div>
                <div class="row">
                    <h2 class="subtitle">Průvodce kouzelným světem, učaruje dospělým i dětem.</h2>
                </div>
                <div class="row">
                    <p class="descr">
                    Kouzelnik Robin, vlastním jménem Robert Chytil, se poprvé setkal s kouzly v 11 letech při narozeninové oslavě. Ohromen kouzlem, při kterém kouzelník nechal projít sklenici deskou stolu, ucítil, že se kouzlení stane jeho celoživotní zálibou.
                    </p>
                    <p class="descr">    
                    V současné době předvádí svá kouzla především v oblasti mikromagie a stand-up na narozeninových oslavách, dětské párty, firemní či prezentační akce. Viz galerie.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./img/o_nas.png" class="img-responsive" alt="">
            </div>
        </div>
        </div>
    </section>

    <section id="robinMikromagie" class="robin_mikromagie">
        <div class="container">
        <div class="row">
            <p class="sectionTitle text-center">show</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <h1 class="title">Mikromagie</h1>
                </div>
                <div class="row">
                    <h2 class="descr">Kouzla se odehrávají přímo před vaším zrakem u stolu nebo v těsné blízkosti. Kouzlit u stolu můžeme jak s dětmi tak i mezi dospělými.</h2>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./img/mikromagie_desktop.png" class="img-responsive" alt="">
            </div>
        </div>
        </div>
    </section>

    <section id="robinKids" class="robin_kids">
        <div class="container">
            <div class="row flexboxContainer">
                <div class="col-md-6">
                    <img src="./img/kids_desktop.png" class="img-responsive" alt="">
                </div>
        
                <div class="col-md-6">
                    <div class="row">
                        <h1 class="title">Kids show</h1>
                    </div>
                    <div class="row">
                        <h2 class="descr">Představení šité na míru dětskému publiku. Vhodné na narozeninové oslavy,  dětské a rodinné dny, tábory.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="robinGallery" class="robin_gallery">
        <div class="container">
            <div class="row">
                <p class="sectionTitle text-center">Galerie</p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a href="#" data-toggle="modal" data-target="#img1">
                            <img src="./img/gotik_nahled.png" class="img-responsive" alt="">
                        </a>
                        <span class="galleryDescr">Skuteč</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="img1" role="dialog">
                        <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Skuteč</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>Vystoupení pro děti na náměstí</h4>
                                    <img src="./img/gotik_velka.png" class="img-responsive" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a href="#"  data-toggle="modal" data-target="#img2">
                            <img src="./img/mince_nahled.png" class="img-responsive" alt="">
                        </a>
                        <span class="galleryDescr">Svatba</span>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="img2" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Svatba</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>Mikromagie - svatební odpoledne</h4>
                                    <img src="./img/mince_velka.png" class="img-responsive" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a href="#" data-toggle="modal" data-target="#img3">
                            <img src="./img/klaun_nahled.png"  class="img-responsive" alt="klaun">
                        </a>
                        <span class="galleryDescr">Dr. Klaun</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="img3" role="dialog">
                        <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Dr. Klaun</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>Kouzlení na dětském oddělení Fakultní nemocnice Královské Vinohrady</h4>
                                    <img src="./img/klaun_velka.png" class="img-responsive" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a href="#" data-toggle="modal" data-target="#img4">
                            <img src="./img/evt1.png" class="img-responsive" alt="">
                        </a>
                        <span class="galleryDescr">Street magic</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="img4" role="dialog">
                        <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Street magic</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>Magie v ulicích. Kouzla na ulici, v baru, či obchodním centru.</h4>
                                    <img src="./img/evt1.png" class="img-responsive" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                
            </div>

            <!-- 
                <div class="row">
                    <a href="#mikromagie" class="bt bt__mainPage--gallery">
                    <span class="bt__mainPage">Další foto</span>
                    </a>
                </div>
            -->

        </div>
    </section>

    <section id="robinProjects" class="robin_projects">
        <div class="container">
            <div class="row">
                <p class="sectionTitle text-center">Projekty</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://www.instagram.com/kouzelnik_robin/" target="_blank">
                        <img src="./img/friday_magic_logo.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-8">
                    <p class="descr">
                    Krátký kouzelnický pořad na instagramu, v němž vám každý pátek přinášíme kouzla předváděná na kameru z nejrůznějších prostředí - ulice, restaurace ci baru.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a class="videoicon" href="#" data-toggle="modal" data-target="#card_revelation" target="_blank">
                            <img src="./img/friday_magic_pozvanka_nahled.png" class="img-responsive" alt="">
                            <span class="galleryDescr videoLink">Cards revelation</span>
                        </a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="card_revelation" role="dialog">
                        <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Cards revelation</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>Pozvánka na kouzelnické představení do Muzea kouzel v Pardubicích</h4>
                                    <video width="320" height="240" controls>
                                        <source src="https://www.instagram.com/p/BqrKIp-Bx9s/?utm_source=ig_web_copy_link" type="video/mp4">
                                        <!-- <source src="movie.ogg" type="video/ogg"> -->
                                        Your browser does not support the video tag.
                                    </video>
                                    <!-- https://www.instagram.com/p/BqrKIp-Bx9s/?utm_source=ig_web_copy_link -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a class="videoicon" href="https://www.instagram.com/p/BmSPg4IBNX1/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="./img/friday_magic_provaz_nahled.png" class="img-responsive" alt="">
                            <span class="galleryDescr videoLink">Rope routine</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a class="videoicon" href="https://www.instagram.com/p/BlcKCH0HBEP/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="./img/friday_magic_tuzka_nahled.png"  class="img-responsive" alt="klaun">
                            <span class="galleryDescr videoLink">Pen thru the bill</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="gallery__itemContainer">
                        <a class="videoicon" href="https://www.instagram.com/p/BkmbTSonMIX/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="./img/friday_magic_gumicky_nahled.png" class="img-responsive" alt="">
                            <span class="galleryDescr videoLink">Between the lines</span> 
                            </a>
                    </div>
                </div>

                <!-- 
                <div class="col-sm-2">
                    <div class="gallery__itemContainer">
                        <a href="https://www.instagram.com/p/BnaW5wVFk0X/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="./img/friday_magic_ring_nahled.png" class="img-responsive" alt="">
                            <span class="galleryDescr">Ring levitation</span>
                            <span class="videoIcon"><span class="arrow-right"></span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="gallery__itemContainer">
                        <a href="https://www.instagram.com/p/BkCCuuEneZv/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="./img/friday_magic_shadow_coins.png" class="img-responsive" alt="">
                            <span class="galleryDescr">Shadow coins</span>
                            <span class="videoIcon"><span class="arrow-right"></span></span>
                        </a>
                    </div>
                </div>
                 -->
                
            </div>
            <div class="row">
                <a href="https://www.instagram.com/kouzelnik_robin/" target="_blank" class="bt bt__mainPage--gallery">
                <span class="bt__mainPage">Další kouzla</span>
                <span class="videoIcon"><span class="arrow-right"></span></span>
            </a>
            </div>        
        </div>
    </section>

    <section id="robinReference" class="robin_reference">
        <div class="container">
            <div class="row">
                <p class="sectionTitle text-center">Reference</p>
            </div>
            <div class="row">
                <div class="flexContainer">
                    <div class="flexItem"><img src="./img/lego_logo.png" alt="" class="img-responsive" ></div>
                    <div class="flexItem"><img src="./img/kouzla_a_magie_logo.png" class="img-responsive" alt=""></div>
                    <div class="flexItem"><img src="./img/skanska_logo.png" alt="" class="img-responsive"></div>   
                </div>
            </div>
        </div>
    </section>

    <footer id="robinFooter" class="robin_footer">
        <div class="container-fluid">
            <div class="row footer__header">
                <h1 class="title text-center">Kontakt</h1>
            </div>
        </div>
        <div class="container">
            <div class="row footer__content">
                <div class="col-sm-6 col-md-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="./img/robin_ikona.png" class="img-responsive robin__ikona" alt="">
                        </div>
                        <div class="col-sm-6">
                            <p class="name">
                                <span class="artistic">Kouzelnik Robin</span><br>
                                <span class="real">Robert Chytil</span>
                            </p>
                            <p class="tel">
                                608 950 823
                            </p>
                            <p class="email">
                                <a href="mailto:info@kouzelnikrobin.cz">info@kouzelnikrobin.cz</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4 text-center hidden-xs hidden-sm">
                    <img src="./img/klobouk.png" alt="">
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="https://www.facebook.com/kouzelnikrobin/" class="socialMedia_icon img-responsive" target="_blank"><img src="./img/fb_ikona.svg"  alt=""></a>
                    <a href="https://www.instagram.com/kouzelnik_robin/" class="socialMedia_icon img-responsive" target="_blank"><img src="./img/instagram_ikona.svg" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCRdFezFl9WZCXLR3hR-gwbw?view_as=subscriber" target="_blank" class="socialMedia_icon img-responsive"><img src="./img/youtube_ikona.svg" alt=""></a>
                </div>
            </div>
        </div>
    </footer>

    
</body>
</html>