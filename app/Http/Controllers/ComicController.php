<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

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
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate( $this->validateRules(), $this->validateMessages() );

        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            return view('comics.edit', compact('comic'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic )
    {

        $request->validate( $this->validateRules(), $this->validateMessages() );

        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validateRules(){
        return [
            'title' => 'required|max:50|min:3',
            'image' => 'required|max:255|min:10',
            'type' => 'required|max:50|min:3',
        ];
    }

    private function validateMessages(){
        return [

            'title.required' => 'Il nome è obbligatorio',
            'title.max' => 'Il nome deve avere al massimo :max caratteri',
            'title.min' => 'Il nome deve avere minimo :min caratteri',

            'type.required' => 'La tipologia è obbligatoria',
            'type.max' => 'La tipologia deve avere al massimo :max caratteri',
            'type.min' => 'La tipologia deve avere minimo :min caratteri',

            'image.required' => 'Il campo Url immagine è obbligatorio',
            'image.max' => 'Il campo Url immagine deve avere al massimo :max caratteri',
            'image.min' => 'Il campo Url immagine deve avere minimo :min caratteri',

        ];

    }

}
