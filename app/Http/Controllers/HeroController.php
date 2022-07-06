<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();

        return view('admin.heroes.index', ['heroes'=> $heroes]);
    }

    public function create(){
        return view('admin.heroes.create');
    }

    public function store(Request $request){
        return $this->saveHero($request, null);
    }

    public function edit($id){
        $heroes = Hero::find($id);

        return view('admin.heroes.edit', ['hero' => $heroes]);
    }

    public function update(Request $request, $id){
        return $this->saveHero($request, $id);
    }

    public function saveHero(Request $request, $id){
        if($id){
            $heroes = Hero::find($id);
        }else{
            $heroes = new Hero();
            $heroes->xp = 0;
            $heroes->level_id = 1;
        }

        $heroes->name = $request->input('name');
        $heroes->hp = $request->input('hp');
        $heroes->atq = $request->input('atq');
        $heroes->def = $request->input('def');
        $heroes->luck = $request->input('luck');
        $heroes->coins = $request->input('coins');

        $heroes->save();

        return redirect()->route('heroes.index');
    }

    public function destroy($id){
        $heroes = Hero::find($id);
        $heroes->delete();
        return redirect()->route('heroes.index');
    }
}
