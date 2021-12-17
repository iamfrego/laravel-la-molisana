<header id="site-header">

    @include('partials.logo')

    <nav class="nav justify-content-center py-4">
        <a class="nav-link" href="{{route('welcome')}}">Home</a>
        <a class="nav-link" href="{{route('products')}}">Products</a>
        <a class="nav-link" href="{{route('news')}}">News</a>
    </nav>

</header>