
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Acerca de Angus</h5>
                  <p style="text-align:justify">ANGUS Butcher House® cuenta con una imagen al estilo Nuevo México, con detalles y cuadros de los artistas más representativos del American West Art como: Frank Howell, Malcolm Furlow, entre otros, y esculturas de bronce tipo Frederick Remington.
Nuestra filosofía es manejarnos dentro de un sistema de servicio altamente calificado, dando la atención y cuidado a nuestros clientes, cumpliendo con cada una de sus expectativas en cuanto a calidad y atención, que son los puntos fundamentales de ANGUS Butcher House®.</p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Contacto</h5>
                  <ul class="icon-list">
                    <li>Dirección: Guillermo González Camarena  N° 1450, C.P. 01210; Ciudad de México; México.</li>
                    <li>Teléfono reservaciones: (55) 5292  58 60</li>
                    <li>Whatsapp: (55) 8598  83 09</li>
                    <li>Email: contacto@angus-santafe.mx</li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Eventos</h5>
                  <ul class="icon-list">
                    @foreach($eventos as $evento)
                    <li><a href="{{$evento->url}}">{{$evento->nombre}} - {{$evento->fecha}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Redes sociales</h5>
                  <ul class="icon-list">
                    <li><a href="http://instagram.com/angus_santa_fe" target="blank"><i class="fa fa-instagram"></i> Instragram</a></li>
                    <li><a href="http://faceboo.com/angus.santafe" target="blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <footer class="footer bg-dark">
        
          <div class="container">
            <div class="row">
            <hr class="divider-d" style="border-top:1px dotted #c2c2c2">
              <div class="col-sm-6">
                <p class="">UNA EMPRESA DE  OPERADORA  DE CARNES Y CHAMORROS  S.A. DE C.V. © 2018 ANGUS SANTA FE , TODOS LOS DERECHOS RESERVADOS.</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a  target="blank" href="http://faceboo.com/angus.santafe"><i class="fa fa-facebook"></i></a><a  target="blank" href="http://instagram.com/angus_santa_fe"><i class="fa fa-instagram"></i></a><a  href="mailto:contacto@angus-santafe.mx"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="col-sm-12" style="text-align:right">
                <br>
                Created by <a href="http://indexceed.com" target="blank">Indexceed</a>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>