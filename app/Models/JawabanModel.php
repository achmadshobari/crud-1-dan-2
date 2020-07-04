<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_single($id) {
        $result = DB::table('pertanyaan')->where('id', $id)->get();
        return $result;
    }

    public static function add($data) {
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;

    }
    
}