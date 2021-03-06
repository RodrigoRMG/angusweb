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
                <h2 class="module-title font-alt">Facturación</h2>
                <div class="module-subtitle font-serif"</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="font-alt">Solicitud de facturación</h4><br/>
                <p>Por favor ingrese los siguientes datos si require recibir una factura timbrada a su correo, todos los campos son obligatorios.</p>
                <form id="facturaForm" role="form" method="post" action="{{url('sendMailFactura')}}">
                    <div class="form-group">
                    <label class="" for="name">ID token*</label>
                    <input class="form-control" type="text" id="facidtoken" name="facidtoken" placeholder="ID Token*" required="required" data-validation-required-message="Ingresa tu nombre."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="" for="name">Nombre completo*</label>
                    <input class="form-control" type="text" id="facnombre" name="facnombre" placeholder="Nombre completo*" required="required" data-validation-required-message="Ingresa tu nombre."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="" for="name">R.F.C.*</label>
                    <input class="form-control" type="text" id="facrfc" name="facrfc" placeholder="RFC*" required="required" data-validation-required-message="Ingresa tu nombre."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="" for="email">Email*</label>
                    <input class="form-control" type="email" id="facemail" name="facemail" placeholder="Email*" required="required" data-validation-required-message="Ingresa tu email."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="" for="email">Dirección*</label>
                    <input class="form-control" type="text" id="facdireccion" name="facdireccion" placeholder="Dirección*" required="required" data-validation-required-message="Ingresa tu email."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" style="background-color:#551328" id="facturasubmit" type="submit">Solicitar</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="facturaFormResponse"></div>
              </div>
              <div class="col-sm-6">
                <h4 class="font-alt" style="margin-left:25px;">Contacto</h4><br/>
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