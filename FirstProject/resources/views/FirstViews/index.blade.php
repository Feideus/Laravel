@extends('Master')

@section('NewText')

<ul style="border: 2px solid black; width: 50%;">
@foreach($Description as $data)

<p style="color: pink; text-align:center;"> Description has text : {{$data->body_text}}<p>

@endforeach

</ul>
@stop
