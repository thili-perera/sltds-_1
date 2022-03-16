@extends('Layout.index')
@section('content')
    <div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>{{$bank_name}}</small></h2>
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
<table class="table table-hover">
<thead>
<tr>
<th>#</th>
<th>Branch Name</th>
<th>Branch Code</th>
<th>Action</th>
 </tr>
</thead>
<tbody>
    @foreach ($branches as $branch)
        <tr>
            <th scope="row">{{$branch->id}}</th>
            <td>{{$branch->branch_name}}</td>
            <td>{{$branch->branch_code}}</td>
            <td>
                <a name="" id="" class="btn btn-primary" href="{{route('branch.edit',$branch->id)}}" role="button">Edit</a> 

                <form action="{{route('branch.destroy',$branch->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection