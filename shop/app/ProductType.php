<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
	protected $table = "type_products";
	public function product(){
		// param thứ 1 là đường dẫn đến model sản phẩm, param thứ 2 là khóa ngoại của bảng type_products với bảng products
		// param thứ 3 là khóa chính của bảng type_products
		return $this->hasMany('App\Product','id_type','id');
	}
}
