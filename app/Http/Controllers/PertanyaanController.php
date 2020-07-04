<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        $pertanyaan = PertanyaanModel::add($data);
        if($pertanyaan) {
            return redirect('/pertanyaan');
        }
    }

    public function show($id) {
        $pertanyaan = PertanyaanModel::find($id);
        return view('/pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::find($id);
        return view('/pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request) {
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $delete = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}