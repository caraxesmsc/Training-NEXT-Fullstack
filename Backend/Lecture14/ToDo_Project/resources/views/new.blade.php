@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark-subtle text-dark">
                <div class="card-header">To DO</div>

                <div class="card-body">
                    <form action="/add" method="post">
                        @csrf

                        <p>Task Name</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" name="name" placeholder="TaskName" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <p>Details</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" name="details" placeholder="details" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <p>Study</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" name="deadline" placeholder="due" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning">Add</button>
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