<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();
        $data['slug'] = $this->getSlug($data['title']);
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected_comic = Comic::find($id);
        if($selected_comic){
            return view('comics.show', compact('selected_comic'));
        }
        abort(404, 'comic non trovato nell\'elenco');
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
        if($comic){
            return view('comics.edit', compact('comic'));
        }
        abort(404, 'comic non trovato nell\'elenco');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {

        //salvo i dati ricevuti in una var
        $data = $request->all();
        //creo lo slug
        $data['slug'] =$this->getSlug($data['title']);
        //sostituisco i nuovi data nel fumetto selezionato
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
        //prendo il comic
        // $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('delete_product', "Comic: $comic->title è stato eliminato correttamente.");
    }

    private function getSlug($string){
        $counter = 1;
        $slug = Str::slug($string, '-');
        $check_slug = Comic::where('slug', $slug)->first();

        while($check_slug){
            $slug = Str::slug($string, '-');
            $slug .= '-'. $counter;
            $counter ++;
            $check_slug = Comic::where('slug', $slug)->first();
        }

        return $slug;
    }
}
