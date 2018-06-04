<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function Admin()
	{
		return View::make('pages.admin');
	}




/**
     * validates the users credentials then logins in the user
     */
    public  function login(){

        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }else{


            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::get('email'),
                'password' 	=> Input::get('password')
            );


            if (Auth::attempt($userdata)) {
                return Redirect::to('dashboard')->with('message', 'You are now logged in!');
            }  else {
                return Redirect::to('/')
                    ->with('message', 'Your username/password combination was incorrect')
                    ->withInput();
            }


        }



    }

    /*
     * logouts out the user and clears data stored in session cookies
     */
    public  function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

	public function customers(){
		$customers = Customer::paginate(30);
		return View::make('pages.customers')->with(['customers'=>$customers]);

	}




	public function viewcustomers($id){

		$customer = Customer::find($id);

		return View::make('pages.viewcustomers')->with(['customer'=>$customer]);
	}




    public function findcustomers(){

        $key = Input::get('qry');
        $customers = Customer::where('name', 'LIKE', "%$key%")
          ->orWhere('address', 'LIKE', "%$key%")
          ->orWhere('email', 'LIKE', "%$key%")
          ->orWhere('phone', 'LIKE', "%$key%")
          ->orWhere('customerId', 'LIKE', "%$key%")
          ->get();
          //->paginate(10);

      
        return View::make('pages.findcustomers')->with(['customers'=>$customers]);
        
    }






    public function reps(){

        $reps = Salesrep::paginate(10);

        return View::make('pages.reps')->with(['reps'=>$reps]);

    }


      public function searchReps(){


        $key = Input::get('qry');
        $reps = Salesrep::where('firstname', 'LIKE', "%$key%")
          ->orWhere('address', 'LIKE', "%$key%")
          ->orWhere('email', 'LIKE', "%$key%")
          ->orWhere('phone', 'LIKE', "%$key%")
          ->orWhere('repid', 'LIKE', "%$key%")
          ->orWhere('lastname', 'LIKE', "%$key%")
          ->get();
          //->paginate(10);

            return View::make('pages.searchreps')->with(['reps'=>$reps]);

      }





}