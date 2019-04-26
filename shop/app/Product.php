<?php
	
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	public  function product_type(){
    	// param thứ 1 là đường dẫn đến model sản phẩm, param thứ 2 là khóa ngoại của bảng type_products với bảng products
		// param thứ 3 là khóa chính của bảng type_products
		return $this->belongsTo('App\Product_Type','id_type','id');
	}
	public function bill_detail(){
		// param thứ 3 là khóa chính của bảng bill_detail
		return $this->hasMany('App\BillDetail','id_product','id');
	}
}
