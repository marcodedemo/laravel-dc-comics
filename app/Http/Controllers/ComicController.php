<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);

        $formData = $request->all();

        $newComic = new Comic();

        $newComic->fill($formData);

        $newComic->save();


        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {



        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request);

        $formData = $request->all();

        $comic->update($formData);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    // funzione da richiamare per le validazioni dei campi inseriti (create & edit)
    private function validation($request){

        // $request->validate([

        //     'title'=>'required|max:100',
        //     'description' => 'required',
        //     'thumb'=> 'required',
        //     'price'=>'required|max:10',
        //     'series'=>'required|max:50',
        //     'sale_date'=>'required|date_format:Y-m-d',
        //     'type'=>'required|max:50',
        //     'artists'=>'required',
        //     'writers'=>'required',
        // ]);

        $formData = $request->all();

        $validator = Validator::make($formData, [ 

            'title'=>'required|max:100',
            'description' => 'required',
            'thumb'=> 'required',
            'price'=>'required|max:10',
            'series'=>'required|max:50',
            'sale_date'=>'required|date_format:Y-m-d',
            'type'=>'required|max:50',
            'artists'=>'required',
            'writers'=>'required',

        ], 
        [

            'title.required' => 'Inserire il titolo',
            'title.max' => 'Il titolo può essere lungo al massimo 100 caratteri',
            'description.required' => 'Inserire una descrizione',
            'thumb.required' => 'Inserire un link valido per la copertina',
            'price.required' => 'Inserire il prezzo',
            'price.max' => 'Il prezzo può essere lungo al massimo 10 caratteri',
            'series.required' => 'Inserire la serie',
            'series.max' => 'La serie può essere lunga al massimo 50 caratteri',
            'sale_date.required' => 'Inserire la data di pubblicazione',
            'sale_date.date_format' => 'Inserire un valore della data che abbia formato Y-m-d',
            'type.required' => 'Inserire il tipo',
            'type.max' => 'Il tipo può essere lungo al massimo 50 caratteri',
            'artists.required' => "Inserire almeno un artista (grafico)",
            'writers.required' => 'Inserire almeno uno scrittore',

        ])->validate();

        return $validator;

    }
}
