@extends('layouts.master')
@section('content')

@if(false)
<h3>Site contents</h3>
@elseif(false)
<h3>I am rendering from else if part</h3>
@else
<h3>I am rendering from else part</h3>
@endif

@php
    $array = ['renzo', 'arbole', 'v'];
@endphp
<ul>
    @foreach ($array as $arr)
      <li>{{ $arr }}</li>
    @endforeach
</ul>
<ul>
    @for($i=0; $i < count($array); $i++)
      <li>{{ $array[$i] }}</li>
    @endfor
</ul>

@empty()

@endempty

@include()

@isset()
@endisset

<p>Helloooo</p>
@endsection
