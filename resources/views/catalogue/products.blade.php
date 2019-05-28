@extends('layouts.app')

@section('content')
  <div class="container">



    @isset($products)

      @foreach ($products as $product)
            @php
            $array = json_decode($product->details($product->table_id), true);
            $obj=collect($array);
            @endphp

            @foreach ($obj as $key => $value)
              {{$key}} --> {{$value}}
              <br>
            @endforeach
            <br>

        <hr>
        <br>
      @endforeach

  {{ $products->links() }}
    @endisset

  </div>
@endsection
