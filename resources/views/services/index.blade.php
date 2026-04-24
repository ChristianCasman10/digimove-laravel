<!DOCTYPE html>
<html>
<head>
    <title>Digimove Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-2">🚀 Layanan Digital Marketing Digimove</h1>
<p class="mb-6 text-gray-600">Kami membantu bisnis berkembang melalui strategi digital marketing.</p>

@if(session('success'))
<div class="bg-green-200 p-3 mb-4 rounded">
    {{ session('success') }}
</div>
@endif

<a href="/services/create" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah Layanan</a>

<table class="w-full mt-6 bg-white shadow rounded">
    <tr class="bg-gray-200">
        <th class="p-2">Nama Layanan</th>
        <th>Harga</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    @foreach($services as $s)
    <tr class="text-center border-t">
        <td>{{ $s->name }}</td>
        <td>Rp {{ number_format($s->price) }}</td>
        <td>{{ $s->category }}</td>
        <td>{{ $s->description }}</td>
        <td>
            <a href="/services/{{ $s->id }}/edit" class="text-blue-500">Edit</a>

            <form action="/services/{{ $s->id }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button class="text-red-500">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>