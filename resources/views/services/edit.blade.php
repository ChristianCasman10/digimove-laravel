<!DOCTYPE html>
<html>
<head>
    <title>Edit Layanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1 class="text-2xl font-bold mb-4">Edit Layanan</h1>

<form action="/services/{{ $service->id }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $service->name }}" class="w-full border p-2">

    <input type="number" name="price" value="{{ $service->price }}" class="w-full border p-2">

    <input type="text" name="category" value="{{ $service->category }}" class="w-full border p-2">

    <textarea name="description" class="w-full border p-2">{{ $service->description }}</textarea>

    <button class="bg-yellow-500 text-white px-4 py-2">Update</button>
</form>

</body>
</html>