<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Redirect;

class gameController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function create()
    {
        //$games = Game::class;

        return view ('create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $post = Game::create([
            'newgame'=>$data['newgame'],
            'gender'=>$data['gender'],
            'year'=>$data['year'],
            'price'=>$data['price'],
        ]);
        return Redirect::Route('game.index');
    }

    public function show ()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }

    public function console()
    {
        return view ('console');
    }
}
