<?php

class ApiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /api
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		
			return 'done';
	}


	public function getCustomers(){
		$customers = Customer::all();

		return $customers;

	}


	public function getOrders()
	{
			return 'done and dusted';
	}



}