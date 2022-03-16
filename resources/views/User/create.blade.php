@extends('Layout.index')
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<h2>Add User</h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<ul class="dropdown-menu" role="menu">
<li><a class="dropdown-item" href="#">Settings 1</a>
</li>
<li><a class="dropdown-item" href="#">Settings 2</a>
</li>
</ul>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br>
<form method="post" action="{{route('user.store')}}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
    @csrf
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 ">
<input type="text" id="first-name" required="required" class="form-control " name="fname">
@error('fname')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIC <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 ">
<input type="text" id="last-name" required="required" class="form-control" name="nic">
@error('nic')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
</div>
<div class="item form-group">
<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bank Name</label>
<div class="col-md-6 col-sm-6 ">
<select class="select2_single form-control" tabindex="-1" name="bank_id">
<option></option>
@foreach ($banks as $bank)
<option value="{{$bank->id}}">{{$bank->bank_name}}</option>
@endforeach
</select>
</div>
@error('bank_id')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
<div class="item form-group">
<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Branch Name</label>
<div class="col-md-6 col-sm-6 ">
<select class="select2_single form-control" tabindex="-1" name="branch_id">
<option></option>
@foreach ($branches as $branch)
<option value="{{$branch->id}}">{{$branch->branch_name}}</option>
@endforeach
</select>
</div>
@error('branch_id')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
<div class="item form-group">
<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Acc Number</label>
<div class="col-md-6 col-sm-6 ">
<input id="middle-name" class="form-control" type="text" name="acc_number">
@error('acc_number')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
</div>

<div class="ln_solid"></div>
<div class="item form-group">
<div class="col-md-6 col-sm-6 offset-md-3">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
