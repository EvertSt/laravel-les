<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{

    /**
     * Search product
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function search(Request $request)
    {
        $title = $request->query->get('game');

        $games =  Game::where("title", 'like', '%' . $title . '%')->get();

        return view("SearchedGames", compact("title", "games"));
    }
}
