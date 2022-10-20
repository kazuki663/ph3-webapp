@extends('layouts.webapp')

@section('header_title', 'first week')

@section('today')
<p class="number">{{$time}}</p>
@endsection

@section('month')
<p class="number">{{$month}}</p>
@endsection

@section('total')
<p class="number">{{$total}}</p>
@endsection

@section('year', '2022年8月')


