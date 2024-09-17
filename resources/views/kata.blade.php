<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>продукты блин</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>продукты</h1>
    <div class="row">
        @foreach($products as $key => $product)
        <div class="col-md-4">
            <div class="card mb-4 {{ $product['amount'] == 0 ? 'bg-secondary text-white' : '' }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p>номер: {{ $key}}</p>
                    <p class="card-text">цена: {{ number_format($product['cost']) }} ₽</p>
                    @if ($product['amount'] == 0)
                        <p class="card-text">Нет в наличии</p>
                    @else
                        <p class="card-text">кол-во: {{ $product['amount'] }}</p>
                    @endif
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
</body>
</html>