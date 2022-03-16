@extends('Layout.index')
@section('content')
<div class="x_panel">
<div class="x_title">
<h2>All Users</h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Settings 1</a>
<a class="dropdown-item" href="#">Settings 2</a>
</div>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<table class="table table-striped">
<thead>
<tr>
<th>#</th>
<th>User NIC</th>
<th>Full Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
    <th scope="row">{{$user->id}}</th>
        <td>{{$user->nic}}</td>
        <td>{{$user->fname}}</td>
        <td>
            <a name="" id="" class="btn btn-primary" href="{{route('user.show', $user->id)}}" role="button">View Accounts</a>
        </td>
    </tr>  
    @endforeach
</tbody>
</table>
</div>
</div> 
@endsection