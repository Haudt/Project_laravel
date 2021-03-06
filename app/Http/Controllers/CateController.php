<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\cates;

class CateController extends Controller {

	//
	public function getList() {
		return view('admin.cate.list');
	}
	public function getAdd() {
		return view('admin.cate.add');
	}

	public function postAdd(CateRequest $request) {
		// print_r($request -> txtCateName);
		$cate = new cates;
		$cate->name    = $request->txtCateName;
		$cate->alias   = $request->txtOrder;
		$cate->parent_id    = 1;
		$cate->keywords   = $request->txtKeywords;
		$cate->description    = $request->txtDescription;
		$cate->save();
		return redirect() -> route('admin.cate.list');
	}
		

}
