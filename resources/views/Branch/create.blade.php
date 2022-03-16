@extends('Layout.index')
@section('content')
    <div class="row">
<div class="col-md-12 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<h2>Add New Branch</h2>
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
<form method="POST" action="{{route('branch.store')}}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
    @csrf
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Select 
    Bank <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 ">
    @error('bank_id')
    <p class="text-danger">{{ $message }}</p>
@enderror
<select class="select2_single form-control" tabindex="-1" name="bank_id">
<option></option>
@foreach ($banks as $bank)
    <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
@endforeach
</select>
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Branch Name <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 ">
<input type="text" name="branch_name" required="required" class="form-control">
    @error('branch_name')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
</div>
<div class="item form-group">
<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Branch Code</label>
<div class="col-md-6 col-sm-6 ">
<input class="form-control" type="text" name="branch_code">
    @error('branch_code')
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