@extends('layouts.app')
@section('csslink')
    <link rel="stylesheet" href="{{asset('css/gp.css')}}">
@endsection
@section('appcontent')
    <section class="gpdisplay">
        @if (is_string($gp))
        {{$gp}}
        @else
        <div class="img">
            <img src="{{asset($gp['img'])}}" alt="">
        </div>
        <div class="info">
            <span class="date">{{$gp['jour']}}</span>
            <span class="prix">{{$gp['prix']}}DH/kg</span>
        </div>
        @endif
    </section>
@endsection
