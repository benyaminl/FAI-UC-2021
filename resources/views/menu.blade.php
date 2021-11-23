{{--
    {{ url()->current() == url("/for/bar") ? 'active' : '' }}
    dipakai untuk memberikan link aktif atau tidak pada web page
--}}
<div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="{{ url("/") }}">@yield("title","Home")</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link {{ url()->current() == url("/") ? 'active' : '' }}"
                aria-current="page" href="{{url("/")}}">Home</a></li>
            <li class="nav-item"><a class="nav-link  {{ url()->current() == url("/shop") ? 'active' : '' }}"
                href="{{ url("/shop") }}">Shop</a></li>
        </ul>
        <a href="{{ url("/shop/cart") }}" class="btn btn-outline-dark">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
        </a>
        <a class="nav-item btn pull-right {{ url()->current() == url("/shop") ? 'active' : '' }}"
            href="{{ url("/login") }}">Login</a>
    </div>
</div>

