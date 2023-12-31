@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-primary text-light">
                <div class="card-header">Edit task</div>
                
                <div class="card-body">
                    <form action="{{url('/updatedData/'.$toEdit->id)}}" method="post">
                        @csrf
                        <p>Task Name</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" value="{{$toEdit->name}}" name="name" placeholder="Name" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <p>Details</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" value="{{$toEdit->details}}" name="details" placeholder="details" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <p>Study</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" value="{{$toEdit->deadline}}" name="deadline" placeholder="due" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </form>
                    
                </div>
            </div>
            
            <div class="card bg-danger text-light">
                <div class="card-header">Errors</div>
                <div class="card-body">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection