<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model {

	//
	protected $table = "product_images";
	protected $fillable = ['id', 'images', 'product_id'];
	public $timestamps = false;

	 public function product_image() {
	 	return $this-> belongTo('app\products');
	 }

}
