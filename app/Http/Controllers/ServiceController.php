<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required'
        ]);

        Service::create($request->all());

        return redirect('/services')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required'
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect('/services')->with('success', 'Layanan berhasil diupdate!');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('/services')->with('success', 'Layanan berhasil dihapus!');
    }
}