<?php 

namespace App\Models;

class ItemModel {
	public static function get_all(){
		$items = DB::table('items')->get();
		return $items;
	}
	public static function save($data){
		$new_item = DB::table('items')->insert($data);
		return $new_item;
	}
	use Illuminate\support\Facades\DB;

}













 ?>