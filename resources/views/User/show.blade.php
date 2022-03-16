@extends('Layout.index')
@section('content')
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>{{$user->fname}} <small>{{$user->nic}}</small></h2>
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
<th>Bank Name</th>
<th>Branch Name</th>
<th>Account Numer</th>
<th>Action</th>

 </tr>
</thead>
<tbody>
@foreach ($user_details as $item)
<tr>
<th scope="row">{{$item->id}}</th>
   
<td>
    @php
        $bank_name = \App\Bank::where('id',$item->bank_id)->pluck('bank_name');
    @endphp
        {{$bank_name}}

</td>
<td>
    @php
        $branch_name = \App\Branch::where('id',$item->branch_name)->pluck('branch_name');
    @endphp
        {{$branch_name}}
</td>
<td>
    {{$item->acc_number}}
</td>

<td>
    <a name="" id="" class="btn btn-primary" href="{{route('user.account_edit',$item->id)}}" role="button">Edit</a>
    <form action="{{route('user.destroy',$item->id)}}" method="post">
        @csrf
        @method("DELETE")
    <button type="submit" class="btn btn-danger">Delete</button>
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