@extends('layouts.app')

@section('content')
  <div class="container">

    @isset($categories)
      @include('components.categories_menu', ['categories'=>$categories])
    @endisset

    @isset($data)
      @include('components.products', ['products'=>$data['products']])
    @endisset

  </div>
@endsection
