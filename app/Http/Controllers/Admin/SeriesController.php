<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
//        $series = Serie::all();
        $series = Serie::query()
            ->orderBy('name')->get();
//        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $mensagemSucesso = session('mensagem.sucesso');

        //apaga a mensagem de sucesso quando for chamada novamente
        //se usar o flash para passar a mensagem não preciso apagar da session
        //$request->session()->forget('mensagem.sucesso');
        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        //        $nomeSerie = $request->input('nome');
        //        $serie = new Serie();
        //        $serie->name = $nomeSerie;
        //        $serie->save();

        //tenho q informar na Serie Model quais campos eu permito serem adicionados
//        dd($request->all());
        $serie = Serie::create($request->all());
//        Session::flash();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$serie->name}' foi cadastrada com sucesso!");
    }

    //series/{series}/edit
    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }
    public function update(Serie $series,Request $request )
    {
//        $series->name = $request->name;
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' foi editada com sucesso!");

    }

//    public function destroy(Request $request)
//instanciar o objeto para pegar o id e trazer o nome
    public function destroy(Serie $series)
    {
//        $serie = Serie::find($request->series);

//        Serie::destroy($request->series);
        $series->delete();
//        $request->session()->put('mensagem.sucesso', 'Série removida com sucesso!');
        //flash só dura uma requisição a mensagem nnao preciso apagar
//        $request->session()->flash('mensagem.sucesso', "Série '{$series->name}' removida com sucesso!");

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso!");
    }
}
