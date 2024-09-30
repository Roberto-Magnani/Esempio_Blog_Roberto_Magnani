<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassesEditRequest;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ClassesRequest;

class ClassesController extends Controller
{
    public function index(){
        $classes = Classes::all();
        return view('classes.index', compact('classes'));
    }

    public function create(){

        return view('classes.create');
    }

    public function store(ClassesRequest $request)
    {
        $class = Auth::user()->classes()->create([
            'name' => $request->name,
            'class' => $request->class,
            'pf_dice' => $request->pf_dice,
            'pf_first' => $request->pf_first,
            'pf_higher' => $request->pf_higher,
            'armors' => $request->armors,
            'weapons' => $request->weapons,
            'tools' => $request->tools,
            'saving_throws' => $request->saving_throws,
            'abilities' => $request->abilities,
            'equipments' => $request->equipments,
            'img' => $request->file('img')->store('img', 'public'),
            'user_id'=> Auth::user()->name
        ]);

        return redirect(route('classes.index'))->with('status', 'Hai correttamente caricato la tua razza');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $class)
    {
        return view('classes.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $class)
    {
        
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassesEditRequest $request, Classes $class)
{
    

    if ($class->user_id == Auth::user()->id) {
        $class->update([
            'name' => $request->name,
            'class' => $request->class,
            'pf_dice' => $request->pf_dice,
            'pf_first' => $request->pf_first,
            'pf_higher' => $request->pf_higher,
            'armors' => $request->armors,
            'weapons' => $request->weapons,
            'tools' => $request->tools,
            'saving_throws' => $request->saving_throws,
            'abilities' => $request->abilities,
            'equipments' => $request->equipments,
            'img' => $request->file('img')->store('img', 'public'),
        ]);


        return redirect()->route('classes.index')->with('successMessage', 'Hai modificato correttamente i dati della tua razza!');
    } else {
        return redirect()->route('classes.index')->with('errorMessage', 'Qualcosa è andato storto!');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $class)
    {

        $class->delete();
        return redirect()->route('classes.index')->with('message', 'Hai correttamente eliminato la card!');
    }
}
