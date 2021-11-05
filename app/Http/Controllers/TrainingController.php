<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingRequest;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('trainings.index')->with(['trainings' => Training::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreTrainingRequest $request)
    {
        $validData = $request->validated();

        $training = new Training($validData);

        $training->save();

        return redirect()->route('trainings.index')->with('message_success', 'New training session type has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     */
    public function show($id)
    {
        return view('trainings.show')->with([
            'training' => Training::find($id),
            'show_training' => true,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     */
    public function edit($id)
    {
        return view('trainings.edit')->with([
            'training' => Training::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     */
    public function update(StoreTrainingRequest $request, Training $training)
    {
        $training = Training::findOrFail($training->id);


        if (!$training){
            return redirect(route('trainings.index'))->with('error', 'Training session type you were trying to edit doe not exist');
        }
        $validData = $request->validated();

        $training->update($validData);


        return redirect(route('trainings.index'))->with('message_success', 'Training session type record has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     */
    public function destroy(Training $training)
    {
        Training::destroy($training->id);
        return redirect(route('trainings.index'))->with('message_success', 'Training type has been successfully deleted');
    }
}
