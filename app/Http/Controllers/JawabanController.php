<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
   public function index($id) {
        $pertanyaan = PertanyaanModel::get_single($id);
        $pertanyaan = json_decode(json_encode($pertanyaan), true);
        $jawaban = JawabanModel::get_single($id);
        $pertanyaan['jawaban'] = json_decode(json_encode($jawaban), true);
        $pertanyaan['count'] = JawabanModel::get_single($id)->count();
        return view('jawaban.index', compact('pertanyaan'));
    }
}