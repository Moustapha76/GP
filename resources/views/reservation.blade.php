@extends('layouts.app')
@section('csslink')
    <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
@endsection
<div class="reservation">
    @section('slogan')
        <h1>Réservation en ligne !</h1>
        <p>Choisissez dès maintenant votre GP !</p>
        <a href="/contact" class="btn">Contactez-nous <i class="fa-solid fa-phone-alt"></i></a>
    @endsection
    @section('appcontent')
        <h2 class="title-section">Réservation</h2>
        <div class="gpinfo">
            <div class="left">
                <img src="{{asset($gpInfo['picture'])}}" alt="">
            </div>
            <div class="right">
                <h3>{{$gpInfo['name']}}</h3>
                <table>
                    <tr>
                        <td>Prix / Kg :</td>
                        <td>{{$gpInfo['price']}} DH</td>
                    </tr>
                    <tr>
                        <td>Lieu de collection :</td>
                        <td>{{$gpInfo['depart']}}</td>
                    </tr>
                    <tr>
                        <td>Lieu de récupération :</td>
                        <td>{{$gpInfo['arrival']}}</td>
                    </tr>
                    <tr>
                        <td>Date de départ :</td>
                        <td>{{$gpInfo['jour']}}</td>
                    </tr>
                    <tr>
                        <td>Téléphone :</td>
                        <td>{{$gpInfo['tel']}}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endsection



</div>
