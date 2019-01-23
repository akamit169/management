@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                
                    <table class="table">
                <thead>
                    
                  <tr>
                    <th>User Name</th>
                    @foreach ($data as $user)
                    <th>{{ $user->attendance_date }}</th>
                    @endforeach
                  </tr>
                </thead>
               
                 @foreach ($data as $user)
                <tbody>
                  <tr>
                    <td> {{ $user->name }}</td>
                    <td>{{ $user->attendance_time }}</td>
                   
                  </tr>
                </tbody> @endforeach
                
</table>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection