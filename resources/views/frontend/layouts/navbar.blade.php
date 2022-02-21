<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="/"><strong>{{ config('app.name', 'Laravel') }} |</strong></a>
        <div class="col">
            <a class="navbar-brand" href="/">Home</a>
            <a class="navbar-brand" href="{{ Route('cart.index') }}"><i data-feather="shopping-cart"></i>  {{ Cart::getTotalQuantity()}}</a>
            @role('user')
            <a class="navbar-brand" href="{{ Route('owned.index') }}">Owned</a>
            @endrole
        </div>
        @role('user|admin')
        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @else
        <div class="col text-end">
            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
        @endrole
    </div>
</nav>