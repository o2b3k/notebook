<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notebooks;
class NotebooksController extends Controller
{
    public function index(){
      /* userni asdatekshiramiz*/
      $user = Auth::user();
      /* userga xamma notelarni chiqarib beradi*/
      $notebooks = $user->notebooks;
      return view('notebooks.index',compact('notebooks'));
    }
    /* yangi note ochamiz*/
    public function create(){
      return view('notebooks.create');
    }

    public function show($id)
    {
        $notebook = Notebooks::findOrFail($id);
        $notes =$notebook->notes;
        return view('notes.index',compact('notes','notebook'));
    }
    /* xamma notelarni chiqarib beradi*/
    public function store(Request $request)
    {
      $dataInput = $request->all();
      /* userga yangi note ochishga ruhsat beramiz*/
      $user = Auth::user();
      $user->notebooks()->create($dataInput);
      //Notebooks::create($dataInput);
      return redirect('/notebooks');
    }
    /* notelarni titleni o`zgartiramiz*/
    public function edit($id)
    {
      $notebook = Notebooks::where('id',$id)->first();
      return view('notebooks.edit')->with('notebooks',$notebook);
    }
    /* bazani yangilaymiz*/
    public function update(Request $request,$id)
    {
        $user = Auth::user();
        $notebook = $user->notebooks()->find($id);
        //$notebook = Notebooks::where('id',$id)->first();
        $notebook->update($request->all());
        return redirect('/notebooks');
    }
    /* notelarni o`chiramiz */
    public function destroy($id)
    {
      //$notebook = Notebooks::where('id',$id)->first();
        $user = Auth::user();
        $notebook = $user->notebooks()->find($id);
        $notebook->delete();
      return redirect('/notebooks');
    }
}
