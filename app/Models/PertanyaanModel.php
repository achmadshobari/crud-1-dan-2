<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function add($data) {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function find($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function update($id, $request) {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->update([
            'judul' => $request["judul"],
            'isi_pertanyaan' => $request["isi_pertanyaan"],
            'date_created' => $request["date_created"],
        ]);
        return $pertanyaan;
    }

    public static function destroy($id) {
        $delete = DB::table('pertanyaan')->where('id', $id)->delete();
        return $delete;
    }

}