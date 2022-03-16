@extends('Layout.index')
@section('content')
    <div class="x_panel">
<div class="x_title">
<h2>All Banks</h2>
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
<th>Bank Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    @foreach ($banks as $bank)
    <tr>
    <th scope="row">{{$bank->id}}</th>
        <td>{{$bank->bank_name}}</td>
        <td>
            <a name="" id="" class="btn btn-primary" href="{{route('bank.show', $bank->id)}}" role="button">View All</a>
        </td>
    </tr>  
    @endforeach
</tbody>
</table>
</div>
</div>
@endsection