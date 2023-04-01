<script src="{{asset('js/main.js')}}"></script>
<div class="navbar">
    <a href="/accueil" class="logo">
        <img src="{{asset('images/galerie/logo.png')}}" alt="logo">
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('home')}}">Accueil</a></li>
            <li><a href="{{route('gplist')}}">Réservation</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </nav>
    <a href="tel:+212 629 511 197" class="tel-header"><i class="fa-solid fa-phone"></i> +212 629 511 197</a>
</div>
