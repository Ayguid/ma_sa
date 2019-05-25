@extends('layouts.app')

@section('content')
  <div class="container">



    @isset($products)
      {{-- {{$products}} --}}
      {{-- {{dd($products)}} --}}
      @foreach ($products as $product)

        {{-- <a class="btn btn-primary" href="#" role="button">{{$product->Familia}}</a> --}}

        @foreach ($product->getAttributes() as $key => $attr)
          @if ($attr)
            <strong>{{$key}}</strong>
            <br>
            {{$attr}}<br>
          @endif
        @endforeach
        <hr>
        <br>
      @endforeach

  {{ $products->links() }}
    @endisset

  </div>
@endsection
