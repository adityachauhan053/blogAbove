@extends('layouts.app')
@section('content')

   <div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Users Management</h2>

        </div>
     </div>

   </div>
			
        <table class="table table-bordered">
					<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					</tr>   
            	@foreach ($data as $key => $user)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
					</tr>
				@endforeach
		</table>
	{!! $data->render() !!}

	@endsection

                      

            

    





        