@extends('layouts.app')

@section('content')
  <div class="container">



    @isset($families)

      @foreach ($families as $fam)

        {{-- {{dd($fam->products($fam->id)->get()) }}

        @foreach ($fam->products($fam->id)->get() as $value)
          {{$value}}
        @endforeach --}}

            <a class="btn btn-primary" href="#" role="button">{{$fam->desc_es}}</a>





        <hr>
      @endforeach


    @endisset

  </div>
@endsection
