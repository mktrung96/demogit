<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class PageController extends Controller
{
    public function getIndex(){
    	// $new_product là biến hứng dữ liệu
    	// vào bảng Product get các biến new_product có where  = 1, 
    	// cần  ' use App\Product;  '  để khai báo thư viện chứa Product, nằm trong model
    	$new_product = Product::where('new',1) ->get();

    	// dd($new_product);  // print colection lấy được ra màn hình web

    	// compact :  truyền biến ra trang chủ
    	return view('page.trangchu',compact('new_product'));
    }
    public function getLoaiSP(){
    	return view('page.loai_sanpham');
    }
    public function getChitiet(){
    	return view('page.chitiet_sanpham');
    }
}

