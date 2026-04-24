<!DOCTYPE html>
<html>
<head>
    <title>Tambah Layanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1 class="text-2xl font-bold mb-4">Tambah Layanan</h1>

@if ($errors->any())
<div class="bg-red-200 p-3 mb-4">
    {{ $errors->first() }}
</div>
@endif

<form action="/services" method="POST" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Nama Layanan" class="w-full border p-2">

    <input type="number" name="price" placeholder="Harga" class="w-full border p-2">

    <input type="text" name="category" placeholder="Kategori" class="w-full border p-2">

    <textarea name="description" placeholder="Deskripsi" class="w-full border p-2"></textarea>

    <button class="bg-green-500 text-white px-4 py-2">Simpan</button>
</form>

</body>
</html>