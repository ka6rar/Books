@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
        @foreach ($users as $user)

        <div class="col-sm-3 user">
        <p> <i class="far fa-user"></i> {{$user->name}}</p>
        <p><i class="far fa-envelope "></i> {{$user->email}}</p>
        <p><i class="far fa-clock "></i> {{$user->created_at->diffForHumans()}}</p>
        
         @if($user->admin > 0 )
      
        <div class="admin">You Admin</div>
            @else 
            <a class="btn btn-outline-warning" href="{{route('User.admin' , ['id' => $user->id])}}">Give Admin</a>

    
            <a class="btn btn-outline-danger" href="{{route('User.deldet' , ['id' => $user->id])}}">Deleted</a>

           @endif
        </div>


        @endforeach
       
      </div> 
  </div>
</div>

@endsection
