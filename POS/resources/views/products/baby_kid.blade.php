
<!-- baby_kid.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Bayi dan Anak-anak</title>
</head>
<body>
    <h1>Daftar Produk Bayi dan Anak-anak</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>