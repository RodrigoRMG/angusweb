@extends('layouts.angus')

@section('content')
<div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{url('/')}}">
            <img id="imagelogo" src="{{url('image/angus.gif')}}" width="172">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-top:25px;">
                
                <li class=""><a class="" href="#" data-toggle="dropdown">Menú</a></li>
                <li class=""><a class="" href="#" data-toggle="dropdown">Eventos</a></li>
                <li class=""><a class="" href="#" data-toggle="dropdown">Reservar</a></li>
                <li class=""><a class="" href="#" data-toggle="dropdown">Facturar</a></li>
                <li class=""><a class="" href="#" data-toggle="dropdown">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="home-section home-full-height " id="home" data-background="{{url('image/back.jpg')}}">
        <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=towzhVfB_Bs', containment:'.home-section', startAt:0, mute:false, autoPlay:true, loop:false, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        <div class="video-controls-box">
          <div class="container">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div>
      </section>


<section class="module" id="services">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Para tu confort</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Servicios</h2>
              </div>
            </div>
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-laptop"></span></div>
                  <h3 class="features-title font-alt">Wi-fi</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-streetsign"></span></div>
                  <h3 class="features-title font-alt">Valet parking</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-camera"></span></div>
                  <h3 class="features-title font-alt">Eventos</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-heart"></span></div>
                  <h3 class="features-title font-alt">Hostess</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module module-video bg-dark-30" data-background="assets/images/restaurant/coffee_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt mb-0">The Best Restaurant In Town. Enjoy Your Meal</h2>
              </div>
            </div>
          </div>
          <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=i_XV7YCRzKo', containment:'.module-video', startAt:3, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        </section>

        <section class="module" id="menu">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Most popular menu</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Popular Dishes</h2>
              </div>
            </div>
            <div class="row multi-columns-row">
              <div class="col-sm-6">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center"><a class="btn btn-border-d mt-50" href="restaurant_menu1.html">Ver menú completo</a></div>
          </div>
        </section>


@include('video')

<section id="map-section">
          <div id="map"></div>
        </section>

        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">Una Empresa de Carnes y Chamorros S.A. de C.V. <br>Angus Santa Fe Todos los Derechos Reservados 2018</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>


@endsection
