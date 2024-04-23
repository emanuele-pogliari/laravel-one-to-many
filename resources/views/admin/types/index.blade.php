@extends('layouts.admin')
@section('content')
<h1>INDEX TYPE VIEW</h1>


<div class="container">
    <table class="table table-hover mb-5">
        <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Name</th>
              <th scope="col">Date Added</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($types as $type)
            <tr>
                <th scope="row">{{$type->id}}</th>
                <td>{{$type->name}}</td>
                <td><a href="{{route('admin.types.show', $type->id)}}" class="text-decoration-none">Manage</a></td>
            </tr>
            @endforeach
          </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('admin.types.create')}}"><button class="btn btn-lg btn-primary">Add a Type</button></a>
    </div>
</div>
@endsection