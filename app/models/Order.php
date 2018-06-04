<?php

class Order extends \Eloquent {
	protected $fillable = [];

protected $table = 'orders';


	public function customer()
    {
        return $this->belongsTo('Customer');
    }


    public function salesrep()
    {
        return $this->belongsTo('Salesrep');
    }



    public function payments(){
		return $this->hasMany('Payment');
	}


}