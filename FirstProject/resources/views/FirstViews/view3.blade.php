@extends('Master')


@if($name === 'Erwan')

@section('NewText')

<div style=" border : 2px solid black; text-align:center; margin: 5%; width: 50%; ">
  
  <p style="color: grey;">Author : Feideus</p>
  <p style="color: pink;">Email : erwan.ulrich@gmail.com</p>
  <p> Friend me on my 
    <a href="https://www.facebook.com/mrwan.ulrich" style="text-decoration: none;">Facebook Page</a>
  </p>
  
</div>

@stop

@else()

@section('Javascript')
<script>alert('Name unknown');</script>
@stop

@endif


