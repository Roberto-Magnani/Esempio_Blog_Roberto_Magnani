<?php

namespace App\Http\Controllers;

use App\Models\Races;
use App\Http\Requests\RacesRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RacesEditRequest;
use App\Models\Language;

class RacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $races = Races::all();
        return view('races.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $races = Races::all();
        $languages = Language::all();
        return view('races.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RacesRequest $request)
    {
        $race = Auth::user()->races()->create([
            'name' => $request->name,
            'alignment' => $request->alignment,
            'age' => $request->age,
            'size' => $request->size,
            'speed' => $request->speed,
            'subrace' => $request->subrace,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('img', 'public'),
            'user_id'=> Auth::user()->name
        ]);

        $race->languages()->attach($request->languages);

        return redirect(route('races.index'))->with('status', 'Hai correttamente caricato la tua razza');
    }

    /**
     * Display the specified resource.
     */
    public function show(Races $race)
    {
        return view('races.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Races $race)
    {
        $languages = Language::all();
        return view('races.edit', compact('race', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RacesEditRequest $request, Races $races)
{
    if ($races->user_id == Auth::user()->id) {
        $races->update([
            'name' => $request->name,
            'alignment' => $request->alignment,
            'age' => $request->age,
            'speed' => $request->speed,
            'size' => $request->size,
            'subrace' => $request->subrace,
            'plot' => $request->plot,
        ]);

        // Sincronizza le lingue
        $races->languages()->sync($request->languages);

        // Carica e aggiorna l'immagine se presente
        if ($request->hasFile('img')) {
            $request->validate(['img' => 'image|mimes:jpeg,png,jpg,gif,avif']);
            $races->img = $request->file('img')->store('public/images');
            $races->save(); // Salva l'immagine
        }

        return redirect()->route('races.index')->with('successMessage', 'Hai modificato correttamente i dati della tua razza!');
    } else {
        return redirect()->route('races.index')->with('errorMessage', 'Qualcosa è andato storto!');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Races $race)
    {

        $race->delete();
        return redirect()->route('races.index')->with('message', 'Hai correttamente eliminato la card!');
    }
}
