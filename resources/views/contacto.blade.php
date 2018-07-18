@extends('layouts.angus')
@section('content')

<main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      @include('nav')
      <div class="main">

<section class="module bg-dark-60 contact-page-header bg-dark" data-background="{{url('image/contacto.png')}}">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contáctanos</h2>
                <div class="module-subtitle font-serif"</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="font-alt">Contactar</h4><br/>
                <form id="contactForm" role="form" method="post" action="{{url('sendMailContact')}}">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Tu nombre*" required="required" data-validation-required-message="Ingresa tu nombre."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Tu Email*" required="required" data-validation-required-message="Ingresa tu email."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Tu mensaje*" required="required" data-validation-required-message="Ingresa tu mensaje."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" style="background-color:#551328" id="cfsubmit" type="submit">Enviar</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
              <div class="col-sm-6">
                <h4 class="font-alt">Visítanos</h4><br/>
                <img src="{{url('image/contacto2.jpg')}}" style="margin-left:25px;">
                <br><br>
                <ul class="list-unstyled">
                <ul class="icon-list">
                    <li>Dirección: Guillermo González Camarena  N° 1450, C.P. 01210; Ciudad de México; México.</li>
                    <li>Teléfono reservaciones: (55) 5292  58 60</li>
                    <li>Whatsapp: (55) 8598  83 09</li>
                    <li>Email: contacto@angus-santafe.mx</li>
                  </ul>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section id="map-section">
          <div id="map"></div>
        </section>

                @include('footer')
        
        </div>
      </main>
  
      @endsection