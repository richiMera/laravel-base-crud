<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{

    private $beerValidation = [
        'name' => 'required|max:50',
        'category'=> 'required|max:60',
        'price'=> 'required|numeric',    //validazione, richiamabile con $request->validate($this->beerValidation)
        'abv'=> 'required',
        'filepath'=> 'required',
        'description'=>'required'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();

        return view ('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $request->validate($this->beerValidation);

        $newBeer = new Beer;
        $newBeer->name = $data['name'];
        $newBeer->category = $data['category'];
        $newBeer->price = $data['price'];
        $newBeer->abv = $data['abv'];
        $newBeer->filepath = $data['filepath'];
        $newBeer->description = $data['description'];

        // $data->fill($data); via più veloce collegata al model protected fillable

        $newBeer->save();

        return redirect()->route('beers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        // $beer = Beer::find($id);
        return view('beers.show', compact('beer'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {   
        $request->validate($this->beerValidation);
        $data = $request->all();
        $beer->update($data);

        return redirect()->route('beers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();

        return redirect()->route('beers.index');
    }
}
