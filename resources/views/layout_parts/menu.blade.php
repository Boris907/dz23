<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Hillel Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/products">Товары</a></li>
                <li><a href="/products/new">Добавить товар</a></li>
                <li><a href="/orders">Корзина</a></li>
                <li><a href="/orders/show">Заказы</a></li>
                <li><a href="/pages">Pages</a></li>
                @foreach($pages as $page)
                    <li><a href="/{{$page->alias}}">{{$page->title}}</a></li>
                @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li>
                        <a class="" href="">{{Auth::user()->name}}</a>
                    </li>
                    <li><a href="/logout">Log out</a></li>
                @else
                <li><a href="/login">Login</a></li>
                <li><a href="/registration">Registration</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
