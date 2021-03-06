@extends('theme.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">My Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
           <th>ID</th>
            <th>Login</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($uadsusers as $uadsuser)
        <tr>
        <td>{{$uadsuser['id']}}</td>
        <td>{{$uadsuser['login']}}</td>
        <td>{{$uadsuser['name']}}</td>
        <td>{{$uadsuser['email']}}</td>
        <td>{{$uadsuser['password']}}</td>
        <td>{{$uadsuser['role']}}</td>
        <td><a href="{{action('UadsuserController@edit', $uadsuser['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{action('UadsuserController@destroy', $uadsuser['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection