<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;

class MembreController extends Controller
{
    public function index()
    {
        $members = Membre::all();
        return view('members.index', ['members' => $members]);
    }

    public function create()
    {
        return view('members.create');
    }
    public function store(Request $request)
    {
        $ma_validation = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'adresse' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:255',
        ]);

        Membre::create($ma_validation);
        session()->flash('message', 'Membre ajouté avec succès !');
        return redirect()->route('members.index');
    }



    public function edit($id)
{
    $membre = Membre::find($id);
    return view('edit', ['membre' => $membre]);
}


public function update(Request $request, $id)
{
    $ma_validation = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'age' => 'required|integer',
        'adresse' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'tel' => 'required|string|max:255',
    ]);

    $membre = Membre::find($id);
    $membre->update($ma_validation);
    session()->flash('message', 'Membre mis à jour avec succès !');
    return redirect()->route('members.index');
}


public function delete($id)
{
$membre = Membre::find($id);
$membre->delete();
session()->flash('message', 'Membre supprimé avec succès !');
return redirect()->route('members.index')->with('success', 'Le membre a été supprimé avec succès.');
}

}


