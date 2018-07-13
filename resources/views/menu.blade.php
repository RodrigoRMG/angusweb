@extends('layouts.angus')

@section('content')

<main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      @include('nav')
      <div class="main">

      @foreach($categorias as $categoria)
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="{{asset('storage/uploads/'.$categoria->imagen)}}">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">{{$categoria->descripcion}}</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">{{$categoria->titulo}}</h2>
              </div>
            </div>
          </div>
        </section>

        <?php 
        $menus=DB::table('menu')->where('categoria','=',$categoria->id)->get();
        ?>

        <section class="module">
          <div class="container">
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

            </div>
          </div>
        </section>
        @endforeach

        


        


        @include('footer')
        
      </div>
    </main>

    @endsection