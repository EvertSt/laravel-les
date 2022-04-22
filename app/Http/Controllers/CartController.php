<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Cart::All();
        $total = 0;
        $text = "Total:";

        foreach ($products as $product) {
            $total += $product->price * $product->quantity;
        }

        if ($total <= 0) {
            $total = "Your cart is empty";
            $text = "";
        } else {
            $total = number_format($total, 2);
        }

        return view("Cart", compact("products", "total", "text"));
    }

    /**
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function AddProduct($id)
    {
        $game =  Game::findOrFail($id);

        DB::table('carts')->insert([
            'title' => $game->title,
            'price' => $game->price,
            'img' => $game->img,
            'quantity' => 1
        ]);

        return redirect()->to('/games/' . $id);
    }

    /**
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function UpdateCart($id, Request $request)
    {

        DB::table('carts')->where("id", '=',  $id)->update([
            'quantity' => $request->input('qty')
        ]);

        return redirect()->to('/cart');
    }


    /**
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function DeleteCart($id)
    {
        DB::table('carts')->where("id", '=',  $id)->delete();

        return redirect()->to('/cart');
    }
}
