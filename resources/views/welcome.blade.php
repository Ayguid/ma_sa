@extends('layouts.app')

@section('content')
  <div class="container">


    @isset($categories)
      @include('partials.categories_menu', ['categories'=>$categories])
    @endisset

    @isset($data)
      @include('partials.models', ['models'=>$data['models'], 'cat'=>$data['cat'] ])
      @include('partials.products', ['products'=>$data['products']])

    @endisset

  </div>
@endsection
