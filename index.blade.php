<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan PDAM </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Perhitungan PDAM </h1>
        @if (isset($tagih))
            <div class="alert alert-success">
                <p>Penggunaan: {{ $guna }} m<sup>3</sup></p>
                <p>Total Tagihan: Rp. {{ number_format($tagih, 0, ',', '.') }}</p>
            </div>
        @endif
        <form action="{{ route('pdam.hitung') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="guna">Penggunaan (m<sup>3</sup>)</label>
                <input type="number" class="form-control" id="guna" name="guna" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung Harga</button>
        </form>
    </div>
</body>
</html>
