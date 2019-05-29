

{{-- {{$data['products']}} --}}


    @isset($products)

      @foreach ($products as $product)
            @php
            $array = json_decode($product->details($product->table_id), true);
            $details=collect($array);
            @endphp
            <div class="card text-center">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                @foreach ($details as $key => $value)
                  {{$key}} --> {{$value}}

                  <br>
                @endforeach
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>

            </div>

            <br>

        <hr>
        <br>
      @endforeach

      {{ $products->links() }}
    @endisset
