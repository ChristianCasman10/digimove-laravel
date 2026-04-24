<!DOCTYPE html>
<html>
<head>
    <title>💼 Digimove Digital Agency</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- HEADER -->
<div class="bg-black text-white p-6 shadow">
    <h1 class="text-2xl font-bold">🚀 Digimove Digital Agency</h1>
    <p class="text-sm text-gray-300">Solusi Digital Marketing untuk Bisnis Anda</p>
</div>

<!-- CONTENT -->
<div class="p-10">

    <!-- TITLE + BUTTON -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-3xl font-bold">💼 Layanan Kami</h2>
            <p class="text-gray-500">Kelola layanan digital marketing Digimove</p>
        </div>

        <a href="/services/create" 
           class="bg-black text-white px-5 py-2 rounded-lg shadow hover:bg-gray-800 transition">
           + Tambah Layanan
        </a>
    </div>

    <!-- NOTIF -->
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- CARD TABLE -->
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="p-4">Nama Layanan</th>
                    <th class="p-4">Harga</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4">Deskripsi</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($services as $s)
                <tr class="border-t hover:bg-gray-50 transition">
                    <td class="p-4 font-semibold">{{ $s->name }}</td>
                    <td class="p-4 text-green-600 font-medium">
                        Rp {{ number_format($s->price) }}
                    </td>
                    <td class="p-4">
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">
                            {{ $s->category }}
                        </span>
                    </td>
                    <td class="p-4 text-gray-600">{{ $s->description }}</td>
                    <td class="p-4 text-center space-x-2">

                        <!-- EDIT -->
                        <a href="/services/{{ $s->id }}/edit" 
                           class="bg-yellow-400 text-white px-3 py-1 rounded text-xs hover:bg-yellow-500">
                           Edit
                        </a>

                        <!-- DELETE -->
                        <form action="/services/{{ $s->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button 
                                onclick="return confirm('Yakin hapus data?')"
                                class="bg-red-500 text-white px-3 py-1 rounded text-xs hover:bg-red-600">
                                Hapus
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-6 text-center text-gray-500">
                        Belum ada data layanan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</div>

</body>
</html>