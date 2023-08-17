@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are loggedD in!') }}
                    <div>
                        <a class="btn btn-primary" href="/new">New Task</a>
                    </div>


                </div>
            </div>
            <div class="card bg-warning text-dark">
                <div class="card-header">Tasks</div>
                <div class="card-body">
                <table class="table table-striped border-warning ">
                <thead>
                    <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Details</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->details}}</td>
                    <td>{{$value->deadline}}</td>
                    <td><a href="{{url('/update/'.$value->id)}}}" class="btn btn-outline-primary">Edit</a></td>
                    <td><a href="{{url('/delete/'.$value->id)}}}" class="btn btn-outline-danger">Done</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection