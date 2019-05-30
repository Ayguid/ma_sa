{{-- {{$cat}} --}}

@foreach ($models as $model)

    <a class="btn btn-primary" href="{{route('productsModel',[$cat->id ,$model->Modelo])}}">{{$model->Modelo}}</a>

@endforeach
