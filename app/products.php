<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model {

	protected $table = "products";
	protected $fillable = ['id', 'name', 'alias', 'price', 'intro', 'content', 'image', 'keywords', 'description', 'user_id', 'cate_id'];
	public $timestamp = false;
	public function cate() {
		return $this->belongTo('app\cates');

	}

	public function user() {
		return $this->belongTo('app\User');

	}

	public function product_image() {
		return $this->hasMany('app\product_images');
	}

}
