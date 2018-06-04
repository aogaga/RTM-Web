<?php

class Customer extends \Eloquent {
	protected $fillable = [];

		protected $table = 'customers';


	public function orders(){
		return $this->hasMany('Order');
	}
}