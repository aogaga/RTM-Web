<?php

class Payment extends \Eloquent {
	protected $fillable = [];

    protected $table = 'payments';

	 public function order(){
        return $this->belongsTo('Order');
    }
}