


    @isset($products)

      @foreach ($products as $product)

            <div class="card text-center">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>

                {{$product->details($product->table_id)}}

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>

            </div>

            <br>

      @endforeach

      {{ $products->links() }}
      
    @endisset
