
@extends('template.base')

@section('bevande')
  @foreach ($arrDrinks as $drink)
    <li>
      {{$drink -> nome}}
    </li>
  @endforeach
@endsection

@section('prezzi')
  <div>
    {{ $maxPrice}}
  </div>

  <div>
    {{ $minPrice}}
  </div>

  <div>
    {{ $avgPrice}}
  </div>
@endsection
