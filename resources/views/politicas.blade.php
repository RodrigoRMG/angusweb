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
                <h2 class="module-title font-alt">Políticas de privacidad</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
            <div class="col-sm-3">
            </div>
              <div class="col-sm-6" >
               <center> <h4 class="font-alt">AVISO DE PRIVACIDAD</h4></center><br/>
                <h5 style="text-align:justify;">OPERADORA DE CHAMORROS Y CARNES LUCAS, S.A de C.V. (Restaurante Angus Butcher House, Santa Fe) con, domicilio en Avenida Guillermo González Camarena 1450, Local A, Santa Fe, Álvaro Obregón, Ciudad de México, C.P. 01210; es responsable de recabar sus datos personales, del uso que se les dé a los mismos y de su protección.
Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad de los productos y servicios que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: nombre, dirección, teléfono y correo electrónico, considerando como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales al teléfono: (55) 5292 58.60, y/o al correo electrónico: contacto@angus-santafe.mx
Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En este sentido, su información puede ser compartida con empresas pertenecientes a Grupo Angus y Angus Butcher House, con la finalidad de recabar información sobre la calidad de nuestros productos y servicios. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.
No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad (dar clic para que llegue correo con esta leyenda y saber quién es)
Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través del correo electrónico contacto@angus-santafe.mx
Cualquier modificación a este aviso de privacidad podrá consultarla en nuestra página de internet www.angus-santafe.mx
</h5>
               

              </div>
            </div>
          </div>
        </section>

                @include('footer')
        
        </div>
      </main>
  
      @endsection