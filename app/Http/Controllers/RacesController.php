<?php

namespace App\Http\Controllers;

use App\Models\Races;
use App\Http\Requests\RacesRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RacesEditRequest;

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
        return view('races.create', compact('races'));
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
            'language' => $request->language,
            'subrace' => $request->subrace,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('img', 'public'),
            'user_id'=> Auth::user()->name
        ]);

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
        return view('races.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RacesEditRequest $request, Races $races)
    {
        if ($races->user_id == Auth::user()->id) {
            $races->update([
                $races->name = $request->name,
                $races->alignment = $request->alignment,
                $races->age = $request->age,
                $races->speed = $request->speed,
                $races->size = $request->size,
                $races->language = $request->language,
                $races->subrace = $request->subrace,
                $races->plot = $request->plot,
            ]);
            if ($request->img) {
                $request->validate(['img' => 'img']);
                $races->update([
                    $races->img = $request->file('img')->store('public/images'),
                ]);
            }
            return redirect()->route('races.index')->with('successMessage', 'Hai modificato correttamente i dati della tua razza!');
        } else {
            return redirect()->route('home')->with('errorMessage', 'Non puoi vedere questa pagina!');
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
