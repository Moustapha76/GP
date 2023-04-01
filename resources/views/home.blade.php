@extends('layouts.app')
<div class="home">
    @section('slogan')
        <h1>GP Trans</h1>
        <p>Votre partenaire de confiance pour les trajets entre le Maroc et le Sénégal.</p>
        <div class="btn-group">
            <a href="/gplist" class="btn">Consultez les GP <i class="fa-solid fa-arrow-right"></i></a>
            <a href="tel:+212 629 511 197" class="btn">Appelez-nous <i class="fa-solid fa-phone-alt"></i></a>
        </div>
    @endsection()
    @section('appcontent')
        <section id="qui-sommes-nous">
            <div class="accueil-img">
                <img src="{{asset('images/galerie/accueil-img.jpg')}}" alt="banner">
            </div>
            <div class="bloc-text">
                <h1>Qui sommes-nous ?</h1>
                <p>Bienvenue chez GPTrans, le site web qui facilite votre voyage entre le Maroc et le Sénégal. Nous sommes une plateforme de transport en ligne qui regroupe tous les GP disponibles pour les trajets entre ces deux pays. Nous avons pour objectif de rendre votre voyage aussi confortable et agréable que possible, en vous offrant des services de qualité et en veillant à votre sécurité tout au long du trajet.</p>
            </div>
        </section>
        <section id="nos-atouts">
            <div class="bloc-atout">
                <h1>Nos atouts</h1>
                <div class="container">
                    <div class="item-atout">
                        <i class="fa-solid fa-user-tie"></i>
                        <b>Expérience</b>
                        <p>Un réseau de transporteurs fiables et expérimentés pour sécuriser vos bagages</p>
                    </div>
                    <div class="item-atout">
                        <i class="fa-solid fa-coins"></i>
                        <b>Prix compétitifs</b>
                        <p>Des tarifs compétitifs pour vous permettre d’envoyer vos colis à moindre coût</p>
                    </div>
                    <div class="item-atout">
                        <i class="fa-solid fa-star"></i>
                        <b>Flexibilité</b>
                        <p>Une réservation simple et rapide en ligne pour vous offrir un maximum de flexibilité.</p>
                    </div>
                    <div class="item-atout">
                        <i class="fa-solid fa-headset"></i>
                        <b>Service client</b>
                        <p>Une équipe de service clientèle dédiée pour répondre à toutes vos questions.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="nos-services">
            <h1>Nos services</h1>
            <div class="services">
                <div class="item-service">
                    <img src="{{asset('images/services/s1.svg')}}" alt="Réservation en ligne">
                    <h4>Réservation en ligne</h4>
                    <p>Réservez votre place en ligne en quelques clics !</p>
                </div>
                <div class="item-service">
                    <img src="{{asset('images/services/s2.svg')}}" alt="Transport de bagages">
                    <h4>Transport de bagages</h4>
                    <p>Transport de vos bagages en toute sécurité !</p>
                </div>
                <div class="item-service">
                    <img src="{{asset('images/services/s3.svg')}}" alt="Suivi en temps réel">
                    <h4>Suivi en temps réel</h4>
                    <p>Suivez votre trajet en temps réel pour rester informé.</p>
                </div>
                <div class="item-service">
                    <img src="{{asset('images/services/s4.svg')}}" alt="Assistance en ligne">
                    <h4>Assistance en ligne</h4>
                    <p> Notre équipe de service clientèle est à votre disposition pour répondre à toutes vos questions.</p>
                </div>
            </div>
        </section>
        <section id="nos-destinations">
            <h1>Nos destinations</h1>
            <div class="container">
                <div class="left"><img src="{{asset('images/galerie/galsen/dakar.jpg')}}" alt="dakar"></div>
                <div class="right"><img src="{{asset('images/galerie/morocco/maroc.jpg')}}" alt="maroc"></div>
            </div>
        </section>
        <section id="nos-prestations">
            <h1>Nos prestations</h1>
            <div class="prestations">
                <div class="item-prestation">
                    <img src="{{asset('images/prestations/p1.svg')}}" alt="Transfert d’argent">
                    <h4>Transfert d’argent</h4>
                    <p>Transférer votre argent entre le Sénégal et le Maroc à des frais abordables.</p>
                </div>
                <div class="item-prestation">
                    <img src="{{asset('images/prestations/p2.svg')}}" alt="Echange CFA - DH">
                    <h4>Echange CFA - DH</h4>
                    <p>Echangez votre CFA avec le DH sans aucun frais !</p>
                </div>
                <div class="item-prestation">
                    <img src="{{asset('images/prestations/p3.svg')}}" alt="location de voiture">
                    <h4>location de voiture</h4>
                    <p>Une large gamme de voiture pour vos courses partout dans le Maroc.</p>
                </div>
            </div>
        </section>
        <section id="reservation">
            <a href="/gplist" class="btn">Je cherche un GP</a>
            <a href="/registration" class="btn">Je suis un GP</a>
        </section>
        <section id="formulaire">
            <div class="form">
                <h1>Contactez-nous</h1>
                <form action="/msg" method="POST">
                    <input type="text" name="prenom" placeholder="Entrez votre prénom">
                    <input type="tel" name="tel" placeholder="Entrez votre téléphone">
                    <textarea name="msg" cols="30" rows="10" placeholder="Votre message..."></textarea>
                    <input type="submit" class="btn" value="Soumettre"/>
                </form>
            </div>
            <div class="img-form">
                <img src="{{asset('images/galerie/contact.svg')}}" alt="Contactez-nous">
            </div>
        </section>
    @endsection
</div>
