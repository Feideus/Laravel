@extends('Master')


@section('NewText')

@if(count($variables))

<div style=" border : 2px solid black; text-align:center; margin: 5%; width: 50%; ">
  <ul>
    @foreach ($variables as $data )
    <li><p style="color:grey; text-align: left;">$data has value : {{$data}}</p></li>
    @endforeach
  </ul>

</div>

@else
<div><p style="color:red;">An unexpected error occured</p></div>

@endif

@stop
