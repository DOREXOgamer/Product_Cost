<!DOCTYPE html>
<html>
<head>
    <title>Product Costs</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Product Costs</h1>
    @if($products->isEmpty())
        <p>No products found.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome do Produto</th>
                    <th>Custas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>
                            @if($product->costs->isEmpty())
                                Sem custos disponíveis
                            @else
                                <ul>
                                    @foreach($product->costs as $cost)
                                        <li>{{ $cost->cost_value }} ({{ $cost->date->format('Y-m-d') }})</li>
                                    @endforeach
                                </ul>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
