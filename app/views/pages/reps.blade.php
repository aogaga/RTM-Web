@extends('layout.master')
<?php $i =0; ?>
@section('content')



<h2> Sales Representatives </h2>

{{Form::open()}}

 	<p>
 		<div class="input-group">
 			{{Form::text('qry', null, ['class'=>'form-control', 'placeholder'=>'Search by name, phone number, email or address', 'required'=>''])}}
      
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Search</button>
      </span>
    </div><!-- /input-group -->
 	</p>

	@if(!empty($reps))


	
<table class="table table-bordered">

<thead> 
		<tr>
			<th>#</th>
			<th> RepId</th>
			<th> Fullnames</th>
			<th>Phone</th>
			<th>Email</th>
		
			<th> View Details</th>
				
			

		</tr>
</thead>

<tbody>


		@foreach($reps as $rep)
			<tr>
			<td>{{$i++}} </td>
			<td> {{$rep->repid}}</td>

			<td> {{$rep->firstname}} {{$rep->lastname}}  </td>
			<td> {{$rep->phone}}</td>
			<td>{{$rep->email}} </td>
			<td> <a href="{{URL::to('/viewRepDetails')}}">View Details</a></td>
			</tr>


		@endforeach

</tbody>
</table>





		{{$reps->links()}}










	@else


<h4> Nothing to display</h4>

	@endif



@stop