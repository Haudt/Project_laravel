<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class cates extends Model {

	protected $table = "cates";
	protected $fillable = ['id', 'name', 'alias', 'order', 'parent_id', 'keywords', 'description'];
	public $timestamps = false;

	public function product() {
		return $this->hasMany('app\products');
	}

}
