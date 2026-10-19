<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Inventaris Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="navbar-brand">
                Inventaris Komputer
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h2>Dashboard</h2>
                <p class="mb-0">
                    Selamat datang,
                    <strong>{{ auth()->user()->name }}</strong>!
                </p>
                <p class="text-muted mt-2 mb-0">
                    Sistem Manajemen Inventaris Toko Perlengkapan Komputer.
                </p>
            </div>
        </div>

        <div class="row g-3">

            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Manajemen Kategori</h4>
                        <p>
                            Tambah, lihat, edit, dan hapus kategori barang.
                        </p>
                        <a href="{{ route('categories.index') }}"
                           class="btn btn-primary">
                            Buka Kategori
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Manajemen Barang</h4>
                        <p>
                            Kelola nama barang, kategori, harga, dan stok.
                        </p>
                        <a href="{{ route('items.index') }}"
                           class="btn btn-primary">
                            Buka Barang
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>
