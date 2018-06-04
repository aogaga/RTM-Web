@extends('layout.master')

@section('content')
<?php $i = 0;?>


<h1> Customer Register</h1>



{{Form::open()}}

 	<p>
 		<div class="input-group">
 			{{Form::text('qry', null, ['class'=>'form-control', 'placeholder'=>'Search by name, phone number, email or address', 'required'=>''])}}
      
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Search</button>
      </span>
    </div><!-- /input-group -->
 	</p>
{{Form::close()}}

@if(!empty($customers))
	
<table class="table table-bordered">

<thead> 
		<tr>
			<th>#</th>
			<th> Customer Id</th>
			<th>Full Names </th>
			<th>Address</th>
			<th> Email</th>
			<th> Telephone</th>
			<th> View Orders</th>
				
			

		</tr>
</thead>

<tbody>
	 @foreach ($customers as $customer)
     
     		<tr>
     			<td> {{$i++}}</td>
     			<td> {{$customer->customerId}}</td>
     			<td> {{ucwords($customer->name)}}</td>
     			<td> {{$customer->address}}</td>
     			<td> {{$customer->email}}</td>
     			<td> {{$customer->phone}}</td>
     			<td> <a href="{{URL::to('/viewCustomers/'.$customer->id)}}">View Orders</a></td>

     		</tr>
 
 	@endforeach
</tbody>


</table>
	
		{{$customers->links()}}

	
@else

		<h1>nothing to show </h1>	

@endif
@stop