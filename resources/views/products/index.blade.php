<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>

<body>

    <h1>Daftar Produk Kami</h1>

    <ul>
        {{-- Gunakan @forelse untuk loop data, sekaligus handle jika data kosong --}}
        @forelse ($products as $product)
        <li>
            <strong>{{ $product['nama'] }}</strong> - Harga: Rp {{ number_format($product['harga']) }}
        </li>
        @empty
        <li>
            <p>Belum ada produk yang tersedia.</p>
        </li>
        @endforelse
    </ul>

</body>

</html>