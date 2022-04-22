<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        $user = Auth::user();

        return view("games", compact("games", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("AddGame");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        $path = $request->file('img')->store('images', ['disk' => 'covers']);

        DB::table('games')->insert([
            'title' => $request->input('title'),
            'price' => $request->input("price"),
            'img' => $path
        ]);

        return Redirect::route('games.index');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('game', ['game' => Game::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("EditGame", ["game" => Game::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRequest $request, $id)
    {

        DB::table('games')->where("id", '=',  $id)->update([
            'title' => $request->input('title'),
            'price' => $request->input("price")
        ]);

        return Redirect::route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('games')->where("id", '=',  $id)->delete();

        return Redirect::route('games.index');
    }
}
