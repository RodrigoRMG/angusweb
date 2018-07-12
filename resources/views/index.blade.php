@extends('layouts.angus')

@section('content')
<div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      @include('nav')

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
                  <h3 class="features-title font-alt">Wi-fi</h3>El servicio de red inalambrica con  tecnología de primera  que permite la interconexión con tus dispositivos con el mejor servicio ilimitado.
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-streetsign"></span></div>
                  <h3 class="features-title font-alt">Valet parking</h3>El mejor  servicio de aparcacoches por tu seguridad y comodidad trabajando en equipo, haciendo lo necesario para recibir y entregar automóviles eficientemente.
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-camera"></span></div>
                  <h3 class="features-title font-alt">Eventos</h3>El mejor lugar con  eventos  temáticos  durante la semana para que rías, cantes, bailes  y convivas  como nunca en un lugar como el nuestro. 
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-heart"></span></div>
                  <h3 class="features-title font-alt">Hostess</h3>Contamos con Hostess para la atención personalizada a nuestros clientes a partir de la 13:00 p.m.  de a 02:00 de la Mañana.
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module module-video bg-dark-30" data-background="{{url('image/corte.jpg')}}">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt mb-0">El mejor restaurante de cortes en la ciudad</h2>
              </div>
            </div>
          </div>
          <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=A4izqFF0fh0', containment:'.module-video', startAt:3, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        </section>

        <section class="module" id="menu">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Lo nuevo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Los platillos más populares</h2>
              </div>
            </div>
            <div class="row multi-columns-row">

            @foreach($menus as $menu)
              <div class="col-sm-6">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">{{$menu->titulo}}</h4>
                      <div class="menu-detail font-serif">{{$menu->descripcion}}</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">{{$menu->precio}}</h4>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @if(count($menus)==0)
              <div class="col-sm-6">
               <h4>Próximamente...</h4>
              </div>
              @endif
                
              </div>
            </div>
            <div class="text-center"><a class="btn btn-border-d mt-50" href="{{url('menu')}}">Ver menú completo</a> <a class="btn btn-border-d mt-50" href="{{url('menu.pdf')}}" target="blank">Descargar menú</a></div>
          </div>
        </section>


@include('video')

<section id="map-section" >
          <div id="map"></div>
          
        </section>

        <section style="margin-bottom:40px;margin-top:40px;">
        <div class="text-center">
        <img src="https://web-assets.waze.com/website/assets/home/map_editing-7df15c15f330a3b3dae4cd8978355ef4e77b1e6dc716cfc0c9f98b0f86f718db.png" width="170px">
        </div>
        <div class="text-center" style="margin-top:20px">
        
        <a class="btn btn-border-d" target="blank" href="https://waze.com/ul?ll=19.3647072,-99.2657406&navigate=yes">Navegar con Waze</a>
          </div>
        </section>
        

             <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                <div class="callout-text font-alt">
                  <h3 class="callout-title">Suscribirse</h3>
                  <p>suscríbete ahora y recibe todas nuestras noticias</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="callout-btn-box">
                  <form id="subscription-form" role="form" method="post" action="php/subscribe.php">
                    <div class="input-group">
                      <input class="form-control" type="email" id="semail" name="semail" placeholder="Tu Email" data-validation-required-message="Please enter your email address." required="required"/><span class="input-group-btn">
                        <button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Suscribirse</button></span>
                    </div>
                  </form>
                  <div class="text-center" id="subscription-response"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
@include('footer')


@endsection
