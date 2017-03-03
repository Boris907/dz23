<div class="navbar-right col-md-4 col-md-pull-1 affix">
    <div class="panel panel-default">
        <div class="panel-body">
            Корзина
        </div>
        <div class="panel-footer">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                </tr>
                </thead>
                @if(isset($cart[$product->id]))

                <tbody>
                @php
                    $total_sum=0;
                @endphp
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a class="btn btn-danger" href="/cart_minus/{{$product->alias}}">-</a>
                            {{$cart[$product->id]}}
                            <a class="btn btn-success" href="/cart_add/{{$product->alias}}">+</a>
                        </td>
                        <td>{{$product->price * $cart[$product->id]}}</td>
                    </tr>
                    @php
                        $total_sum+= $product->price * $cart[$product->id];
                    @endphp
                @endforeach
                <tr>
                    <td colspan="3">К оплате:</td>
                    <td>{{$total_sum}}</td>
                </tr>
                </tbody>
                    @endif
            </table>
        </div>
    </div>
</div>
</div>