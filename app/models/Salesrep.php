<?php

class Salesrep extends \Eloquent {
	protected $fillable = [];
	protected $table = 'salesreps';


	 public function orders(){
		return $this->hasMany('Order');
	}
}