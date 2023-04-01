@extends('layouts.app')
@section('csslink')
    <link rel="stylesheet" href="{{asset('css/gplist.css')}}">
@endsection
<div class="gplist">
    @section('slogan')
        <h1>Réservez dès maintenant !</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam saepe distinctio atque alias, tenetur quis!</p>
        <a href="/contact" class="btn">Contactez-nous <i class="fa-solid fa-phone-alt"></i></a>
    @endsection
    @section('appcontent')
        <h2 class="title-section">Liste des GP disponible</h2>
        <section class="gplist">
            @foreach ($gplist as $gp)
            <div class="card">
                <div class="img">
                    <img src="{{asset($gp['picture'])}}" alt="">
                </div>
                <div class="info">
                    <span class="gp-{{$gp['id']}}">{{$gp['id']}}</span>
                    <span class="name">{{$gp['name']}}</span>
                    <span class="price">{{$gp['price']}} cfa / kg</span>
                    <span class="date">Départ : {{$gp['jour']}}</span>
                    <a href="reservation/{{$gp['id']}}">Consulter <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </section>
    @endsection
</div>
