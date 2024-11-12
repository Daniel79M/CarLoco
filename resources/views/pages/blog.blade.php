@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.Nav_bar')
@endif

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p> --}}
                    <h1 class="mb-3 bread">Notre Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry justify-content-end mb-md-5">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Que faut-il savoir pour conduire une voiture.
                                    </a></h3>
                            <p>Vous vous êtes déjà demandé que faut-il pour conduire une voiture sans permis ? Pas de panique, on est là pour vous éclairer ! Ces voitures constituent une alternative intéressante pour ceux qui ne possèdent pas le précieux sésame. Faisons le point sur ce qu'est ce type de véhicule, qui peut la conduire et les papiers indispensables à avoir sous la main. Accrochez-vous, c'est parti pour tout savoir sur les voitures sans permis !</p>
                            <p><a href="blog-single.html" class="btn btn-primary">Continue <span
                                        class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry justify-content-end mb-md-5">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Quand faire le premier contrôle technique de votre véhicule</a></h3>
                            <p>Le contrôle technique, c’est un passage obligé pour tous les véhicules, et pour de bonnes raisons : le professionnel s’assure que votre voiture respecte les normes en vigueur. Que vous soyez déjà propriétaire ou que vous pensiez vendre votre véhicule, il est important de bien connaître les règles qui encadrent ce contrôle et ce que la loi exige. Faisons le point sur la question de quand faire le premier contrôle technique, les règles à suivre et les délais à respecter avec ce guide complet.</p>
                            <p><a href="blog-single.html" class="btn btn-primary">Continue <span
                                        class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Carte grise pour la vente d'un voiture.</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                                your mouth.</p>
                            <p><a href="blog-single.html" class="btn btn-primary">Continue <span
                                        class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry justify-content-end mb-md-5">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_4.jpg');">
                        </a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business
                                    Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                                your mouth.</p>
                            <p><a href="blog-single.html" class="btn btn-primary">Continue <span
                                        class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry justify-content-end mb-md-5">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_5.jpg');">
                        </a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business
                                    Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                                your mouth.</p>
                            <p><a href="blog-single.html" class="btn btn-primary">Continue <span
                                        class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_6.jpg');">
                        </a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 29, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Que faire en cas de panne sèche</a></h3>
                            <p>Il est impératif de vous mettre en sécurité et de chercher de l'aide.</p>
                            <p><a href="blog-single.html" class="btn btn-primary">Continue <span
                                        class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    @include('Components.Footer')

    {{-- <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div> --}}
