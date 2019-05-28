<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Micro Sa
                </div>

                <div class="links">

                  @isset($categories)
                    @foreach ($categories as $cat)
                      @if ($cat->getSubCategories->count()>0)
                        <a href="{{route('landing', $cat->id)}}" class="btn btn-light">{{$cat->desc_es}}</a>
                      @else
                        <a href="#" class="btn btn-light">{{$cat->desc_es}}</a>
                      @endif
                    @endforeach
                    {{-- @foreach ($categories as $cat)
                      <a href="#" class="w-100 btn btn-primary">{{$cat->desc_es}}</a>
                      @if ($cat->getSubCategories)

                        @foreach ($cat->getSubCategories as $subCat)
                          <a href="#" class="btn btn-light">{{$subCat->desc_es}}</a>
                          @foreach ($subCat->products as $prod)
                            <p>{{$prod->getAttr($cat->id)}}</p>

                          @endforeach
                        @endforeach
                      @endif
                    @endforeach
                    <br> --}}

                  @endisset

                  {{-- {{App\Category::find(1)->getSubCategories[0]->products}} --}}

                  {{-- @foreach (App\Category::find(1)->getSubCategories[0]->products as $prod)
                    @php
                      $p=$prod->getAttr(App\Category::find(1)->id);
                    @endphp
                      <a href="#" class="btn btn-light"><span class="badge badge-secondary">{{$p->Operaci_n}}</span></a>

                  @endforeach --}}


                  {{-- @php
                    $cat=App\Category::find(1);

                    $attr=$cat->getSubCategories[0]->products[0]->getAttr($cat->getSubCategories[0]->products[0]->table_id);
                    // DD($attr);
                  @endphp --}}

                </div>
            </div>
        </div>
    </body>
</html>
