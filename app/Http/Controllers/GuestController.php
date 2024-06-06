<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Guest;

use App\Models\Guest as ModelsGuest;

class GuestController extends Controller
{
// Daftar Tamu
public function index()
{
    return view('crud.index',[
        'guests' => ModelsGuest::all()
    ]);
}

// Tambah Tamu
public function create()
{
    return view('crud.create');
}

public function store(Request $request)
{
    $rules = $request->validate([
        'name' => 'required|max:50',
        'company' => 'required|max:20',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:14',
    ]);

    ModelsGuest::create($rules);

    return redirect('/crud')->with('success', 'Guest Added!');
}

public function show($id)
{
    return view('crud.detail',[
        'guests' => ModelsGuest::find($id)
    ]);
}


public function edit($id)
{
    return view('crud.edit',[
        'guests' => ModelsGuest::find($id)
    ]);
}


public function update(Request $request, $id)
{
    $rules = $request->validate([
        'name' => 'required|max:50',
        'company' => 'required|max:20',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:14',
    ]);

    ModelsGuest::where('id',$id)
    ->update($rules);

    return redirect('/crud')->with('success', 'Guest Added!');
}

public function destroy($id)
{
    ModelsGuest::destroy($id);
    return redirect('/crud');
}
}
