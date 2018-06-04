@extends('layout.master')

@section('content')

	@if(!empty($customer))
	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{ucwords($customer->name)}}</h2>
                    <p><strong>Address : </strong> {{$customer->address}} </p>
                    <p><strong>Phone Number : </strong> {{$customer->phone}} </p>
                       <p><strong>Email : </strong> {{$customer->email}} </p>
                      <p><strong>Customer Id :  </strong> {{$customer->customerId}} </p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="{{asset('img/default-user-icon-profile.png')}}" alt="" class="img-circle img-responsive">



                        <figcaption class="ratings">
                            <p>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 20,7K </strong></h2>                    
                
                    <button class="btn btn-primary btn-block"><span class="fa fa-plus-circle"></span> Orders </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
               
                    <button class="btn btn-danger btn-block"><span class="fa fa-user"></span> Payments Counts</button>
                </div>


                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                
                    <button class="btn btn-success btn-block"><span class="fa fa-user"></span> Payments total </button>
                </div>
                
            </div>
    	 </div>       

@else
	
		<h2> Customer Could not be found </h2>

@endif

@stop