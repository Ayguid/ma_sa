<div class="">


{{-- {{$categories}} --}}
@isset($categories)
  @foreach ($categories as $cat)
    @if ($cat->getSubCategories->count()>0)
      <a href="{{route('landing', $cat->id)}}" class="btn btn-light">{{$cat->desc_es}}</a>
    @else
      {{--  --}}
      <a href="{{route('productsCat', $cat->id)}}" class="btn btn-primary">{{$cat->desc_es}}</a>
    @endif
  @endforeach
  @endisset


</div>
